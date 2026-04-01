<?php

use App\Http\Middleware\checkUserMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'isUserValid' => checkUserMiddleware::class,
        ]);

        // -----------chechking the token after payment ----------
        $middleware->validateCsrfTokens(except:[
            "razorpay/callback"
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();