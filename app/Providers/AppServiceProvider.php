<?php

namespace App\Providers;

use App\Contracts\AttendanceRepository;
use App\Contracts\CategoryRepository;
use App\Contracts\GalleryRepository;
use App\Contracts\MediaRepository;
use App\Contracts\PaymentRepository;
use App\Contracts\ProgramRepository;
use App\Contracts\UserRepository;
use App\Repositories\AttendanceEloquentRepository;
use App\Repositories\CategoryEloquentRepository;
use App\Repositories\GalleryEloquentRepository;
use App\Repositories\MediaEloquentRepository;
use App\Repositories\PaymentEloquentRepository;
use App\Repositories\ProgramEloquentRepository;
use App\Repositories\UserEloquentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepository::class, UserEloquentRepository::class);
        $this->app->bind(AttendanceRepository::class, AttendanceEloquentRepository::class);
        $this->app->bind(CategoryRepository::class, CategoryEloquentRepository::class);
        $this->app->bind(GalleryRepository::class, GalleryEloquentRepository::class);
        $this->app->bind(MediaRepository::class, MediaEloquentRepository::class);
        $this->app->bind(PaymentRepository::class, PaymentEloquentRepository::class);
        $this->app->bind(ProgramRepository::class, ProgramEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
