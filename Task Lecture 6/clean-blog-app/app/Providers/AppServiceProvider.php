<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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

        Gate::define('add-comment', function () {
            return auth()->user()->role == 0;
        });

        Gate::define('delete-comment', function ($user, $comment) {
            return $user->id == $comment->user_id ;
        });

        View::share('site_data', Setting::where('id', 1)->first());
    }
}
