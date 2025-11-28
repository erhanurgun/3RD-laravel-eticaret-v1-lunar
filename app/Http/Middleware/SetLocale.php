<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

/**
 * Locale middleware.
 * Kullanıcının dil tercihini belirler ve uygular.
 *
 * Öncelik sırası:
 * 1. URL parametresi (?lang=tr)
 * 2. Session değeri
 * 3. Cookie değeri
 * 4. Varsayılan dil (config)
 */
class SetLocale
{
    /**
     * Handle an incoming request.
     * Gelen isteği işler ve dil ayarını yapar.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $this->determineLocale($request);

        App::setLocale($locale);

        // URL parametresi ile dil değişikliği yapıldıysa
        // session ve cookie'ye kaydet, sonra parametresiz URL'e yönlendir
        if ($request->has('lang')) {
            $this->persistLocale($locale);

            return redirect()->to($this->removeQueryParam($request->fullUrl(), 'lang'));
        }

        return $next($request);
    }

    /**
     * Determine the locale based on priority.
     * Öncelik sırasına göre dili belirler.
     */
    protected function determineLocale(Request $request): string
    {
        $supportedLocales = array_keys(config('localization.supported_locales', []));

        // Desteklenen dil yoksa varsayılanı kullan
        if (empty($supportedLocales)) {
            return config('app.locale', 'tr');
        }

        // Öncelik 1: URL parametresi
        if ($request->has('lang')) {
            $langParam = $request->query('lang');
            if (in_array($langParam, $supportedLocales, true)) {
                return $langParam;
            }
        }

        // Öncelik 2: Session
        $sessionKey = config('localization.session_key', 'app_locale');
        if (session()->has($sessionKey)) {
            $sessionLocale = session()->get($sessionKey);
            if (in_array($sessionLocale, $supportedLocales, true)) {
                return $sessionLocale;
            }
        }

        // Öncelik 3: Cookie
        $cookieName = config('localization.cookie_name', 'app_locale');
        if ($request->hasCookie($cookieName)) {
            $cookieLocale = $request->cookie($cookieName);
            if (in_array($cookieLocale, $supportedLocales, true)) {
                return $cookieLocale;
            }
        }

        // Öncelik 4: Varsayılan
        return config('localization.default_locale', config('app.locale', 'tr'));
    }

    /**
     * Persist locale to session and cookie.
     * Dil tercihini session ve cookie'ye kaydeder.
     */
    protected function persistLocale(string $locale): void
    {
        $sessionKey = config('localization.session_key', 'app_locale');
        $cookieName = config('localization.cookie_name', 'app_locale');
        $cookieDuration = config('localization.cookie_duration', 525600);

        session()->put($sessionKey, $locale);
        Cookie::queue($cookieName, $locale, $cookieDuration);
    }

    /**
     * Remove a query parameter from URL.
     * URL'den belirtilen parametreyi kaldırır.
     */
    protected function removeQueryParam(string $url, string $param): string
    {
        $parsed = parse_url($url);
        $query = [];

        if (isset($parsed['query'])) {
            parse_str($parsed['query'], $query);
            unset($query[$param]);
        }

        $baseUrl = ($parsed['scheme'] ?? 'http') . '://' . ($parsed['host'] ?? 'localhost');

        if (isset($parsed['port'])) {
            $baseUrl .= ':' . $parsed['port'];
        }

        $baseUrl .= $parsed['path'] ?? '/';

        if (!empty($query)) {
            $baseUrl .= '?' . http_build_query($query);
        }

        return $baseUrl;
    }
}
