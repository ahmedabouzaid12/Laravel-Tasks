<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // VerifyEmail::toMailUsing(function($notifiable, $url){
        //     return (new MailMessage)
        //         ->subject('Verify Email Address')
        //         ->line('Click the Button to Verify Email Address')
        //         ->action('Verify Email Address',$url);
        // });

    }
}
