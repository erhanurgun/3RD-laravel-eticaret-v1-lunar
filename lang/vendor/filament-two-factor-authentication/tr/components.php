<?php

return [
    'enable' => [
        'header' => 'Çift faktörlü kimlik doğrulama etkinleştirilmemiş.',
        'description' => 'Çift faktörlü kimlik doğrulama etkinleştirildiğinde, giriş sırasında güvenli, rastgele bir kod girmeniz istenecektir. Bu kodu telefonunuzdaki Google Authenticator uygulamasından alabilirsiniz.',
    ],
    'logout' => [
        'button' => 'Oturumu Kapat',
    ],
    'enabled' => [
        'header' => 'Çift faktörlü kimlik doğrulama etkin.',
        'description' => 'Bu kurtarma kodlarını güvenli bir şifre yöneticisinde saklayın. Çift faktörlü kimlik doğrulama cihazınız kaybolursa hesabınıza erişimi kurtarmak için kullanılabilirler.',
    ],
    'setup_confirmation' => [
        'header' => 'Çift faktörlü kimlik doğrulamayı etkinleştirmeyi tamamlayın.',
        'description' => 'Çift faktörlü kimlik doğrulama etkinleştirildiğinde, giriş sırasında güvenli, rastgele bir kod girmeniz istenecektir. Bu kodu telefonunuzdaki Google Authenticator uygulamasından alabilirsiniz.',
        'scan_qr_code' => 'Çift faktörlü kimlik doğrulamayı etkinleştirmeyi tamamlamak için, telefonunuzun kimlik doğrulama uygulamasını kullanarak aşağıdaki QR kodunu tarayın veya kurulum anahtarını girin ve oluşturulan OTP kodunu sağlayın.',
    ],
    'base' => [
        'wrong_user' => 'Kimlik doğrulanmış kullanıcı nesnesi, profil sayfasının güncellenmesine izin vermek için bir Filament Auth modeli olmalıdır.',
        'rate_limit_exceeded' => 'Çok fazla istek',
        'try_again' => 'Lütfen :seconds saniye sonra tekrar deneyin',
    ],
    '2fa' => [
        'confirm' => 'Onayla',
        'cancel' => 'İptal',
        'enable' => 'Etkinleştir',
        'disable' => 'Devre Dışı Bırak',
        'confirm_password' => 'Şifreyi Onayla',
        'wrong_password' => 'Girilen şifre yanlış.',
        'code' => 'Kod',
        'setup_key' => 'Kurulum Anahtarı: :setup_key.',
        'current_password' => 'Mevcut Şifre',
        'regenerate_recovery_codes' => 'Yeni Kurtarma Kodları Oluştur',
    ],
    'passkey' => [
        'add' => 'Passkey Oluştur',
        'name' => 'Ad',
        'added' => 'Passkey başarıyla eklendi.',
        'login' => 'Passkey ile Giriş Yap',
    ],
];
