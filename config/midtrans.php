<?php

return [
    'server_key' => env('MIDTRANS_SERVER_KEY', 'YourServerKey'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'YourClientKey'),
    'is_production' => false, // Ubah ke true jika dalam mode produksi
    'is_sanitized' => true,
    'is_3ds' => true,
];
