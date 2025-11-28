# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **Lunar PHP Livewire Starter Kit** - a reference e-commerce storefront built on the Lunar Laravel package. It demonstrates headless e-commerce implementation using Laravel 10/11, Livewire, and Lunar v1.0@beta.

**Note**: This is a demo/reference implementation, not production-ready.

## Technology Stack

- **Backend**: Laravel 10/11, PHP 8.2+, Lunar PHP v1.0@beta
- **Frontend**: Livewire, Tailwind CSS, Alpine.js, Vite
- **Database**: MySQL 8.0, Redis (cache/sessions)
- **Search**: Meilisearch
- **Payments**: Stripe (via lunarphp/stripe)

## Common Commands

### Development Setup (Docker)
```bash
cp .env.docker.example .env
docker-compose up
# App: http://localhost | Admin: http://localhost/lunar
# Default admin: admin@lunarphp.io / password
```

### Frontend Build
```bash
npm run dev    # Development with hot reload
npm run build  # Production build
```

### Artisan Commands
```bash
php artisan migrate
php artisan lunar:install
php artisan db:seed
php artisan lunar:create-admin
php artisan storage:link
php artisan lunar:search:index
```

### Testing
```bash
./vendor/bin/phpunit                      # All tests
./vendor/bin/phpunit tests/Unit           # Unit tests only
./vendor/bin/phpunit tests/Feature        # Feature tests only
./vendor/bin/phpunit --filter=TestName    # Single test
```

## Architecture

### Livewire-First Pattern
Routes map directly to Livewire components (no traditional controllers for storefront):

- **Full-page components** (`app/Livewire/Pages/`): `Home`, `ProductPage`, `CollectionPage`, `SearchPage`, `CheckoutPage`, `CheckoutSuccessPage`
- **Sub-components** (`app/Livewire/Components/`): `Navigation`, `Cart`, `AddToCart`, `CheckoutAddress`, `ShippingOptions`

### Key Patterns

**URL-based Product Fetching**: Uses `FetchesUrls` trait with Lunar's URL model for SEO-friendly slugs:
```php
use App\Traits\FetchesUrls;
// Products queried via URL model, not direct Product queries
```

**Model Extension**: Custom models extend Lunar's base models:
```php
// app/Models/Product.php extends Lunar\Models\Product
// Registered in AppServiceProvider via model manifest
```

**Shipping Modifier Pipeline**: Custom shipping logic via modifiers:
```php
// app/Modifiers/ShippingModifier.php
// Registered in AppServiceProvider: ShippingModifiers::add(ShippingModifier::class)
```

### Directory Structure
```
app/
├── Livewire/
│   ├── Components/    # Reusable UI components
│   └── Pages/         # Full-page route components
├── Models/            # Custom model extensions
├── Modifiers/         # Cart/shipping modifiers
└── Traits/            # Shared functionality

resources/views/
├── layouts/           # storefront.blade.php, checkout.blade.php
├── components/        # Blade components
└── livewire/          # Livewire component views

config/lunar/          # Lunar-specific configuration
database/seeders/      # Demo data seeders with data/ subdirectory
```

## Important Considerations

1. **Lunar Package**: Many features come from Lunar core packages. Check Lunar docs (https://docs.lunarphp.com/) before implementing custom solutions.

2. **Admin Panel**: Separate from storefront, accessible at `/lunar` route using Lunar's Filament-based panel.

3. **Search**: Meilisearch-powered via Laravel Scout. Run `lunar:search:index` after data changes.

4. **Testing**: Uses `RefreshDatabase` trait and `assertSeeLivewire()` for Livewire component tests.

5. **Environment**: Multiple .env examples exist (`.env.docker.example`, `.env.lando.example`). Choose appropriate one.

6. **Translations**: Language files in `lang/` directory (English and Turkish currently supported).

## Working Guidelines

### Communication
- Always communicate in Turkish with the user (use proper Turkish characters: ş, ğ, ü, ö, ç, ı, İ - never convert to ASCII)
- Write code in English (variable names, function names, class names, etc.)
- Write code comments in Turkish (use proper Turkish characters)
- Write technical documentation (README, CHANGELOG, etc.) in English
- Never use emojis in code, views, responses, or anywhere else

### Development Approach
- Act as a Senior Developer with full ownership of this codebase
- Before implementing any request, critically evaluate if it's the correct approach
- If the user requests something incorrect or suboptimal, suggest the better solution instead of blindly following
- Question the user's request if it seems wrong or could be done better - do not blindly accept
- Follow SOLID, DRY, KISS, and YAGNI principles strictly
- Avoid over-engineering; implement only what is explicitly needed
- Never forget these guidelines throughout the conversation

### Decision Making Process
1. Analyze the request and its implications on the codebase
2. If multiple approaches exist, present options to the user via CLI-selectable questions (using AskUserQuestion tool)
3. Explain trade-offs objectively before proceeding
4. Get user confirmation before making significant changes
5. Progress step-by-step, consulting the user at each major decision point
6. If unsure about the best approach, ask the user first rather than making assumptions

### Code Quality Standards
- No magic strings; use constants or enums
- Add proper type hints and return types
- Keep methods small and focused (Single Responsibility)
- Prefer composition over inheritance
- Write self-documenting code; avoid unnecessary comments
- Ensure backward compatibility when modifying existing code
- Consider performance implications of changes
