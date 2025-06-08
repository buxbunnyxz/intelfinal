<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\SetLocale;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'web' => [
            // existing middleware...
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,

            // ✅ add your custom locale middleware
            \App\Http\Middleware\SetLocale::class,
        ],

        'api' => [
            'throttle:ap    i',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    // ... rest of the class
}
