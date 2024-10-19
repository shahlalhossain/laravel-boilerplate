<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Schedule;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
//            'is_super_admin'    => \App\Domains\Auth\Http\Middleware\SuperAdminCheck::class,
//            'is_admin'          => \App\Domains\Auth\Http\Middleware\AdminCheck::class,
//            'is_user'           => \App\Domains\Auth\Http\Middleware\UserCheck::class,
//            'type'              => \App\Domains\Auth\Http\Middleware\UserTypeCheck::class,
//            'permission'        => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
//            'role'              => \Spatie\Permission\Middlewares\RoleMiddleware::class,
        ]);
    })
//    ->withSchedule(function (Schedule $schedule) {
//        // Call an Invokable Class
//        // $schedule->call(new InvokableClassName())->daily()->at('18:00')->timezone('Asia/Dhaka');
//
//        // Run a Console Command
//        // $schedule->command('app:artisan-command-name')->daily()->at('18:00')->timezone('Asia/Dhaka');
//    })
//    ->withCommands([
//        __DIR__.'/../app/Console/Commands',         // Automatically Register, No Need to Register them Here
//        __DIR__.'/../app/Domain/Orders/Commands',   // Automatically Register, also you can Register them Here
//        CommandName::class,                         // Directly Use the CommandName
//    ])
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
