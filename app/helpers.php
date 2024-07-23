<?php

use App\Contracts\AttendanceRepository;
use App\Contracts\CategoryRepository;
use App\Contracts\GalleryRepository;
use App\Contracts\MediaRepository;
use App\Contracts\PaymentRepository;
use App\Contracts\ProgramRepository;
use App\Contracts\UserRepository;

if (!function_exists('attendance')) {
    function attendance(): AttendanceRepository
    {
        return resolve(AttendanceRepository::class);
    }
}

if (!function_exists('category')) {
    function category(): CategoryRepository
    {
        return resolve(CategoryRepository::class);
    }
}

if (!function_exists('gallery')) {
    function gallery(): GalleryRepository
    {
        return resolve(GalleryRepository::class);
    }
}

if (!function_exists('media')) {
    function media(): MediaRepository
    {
        return resolve(MediaRepository::class);
    }
}

if (!function_exists('payment')) {
    function payment(): PaymentRepository
    {
        return resolve(PaymentRepository::class);
    }
}

if (!function_exists('program')) {
    function program(): ProgramRepository
    {
        return resolve(ProgramRepository::class);
    }
}

if (!function_exists('user')) {
    function user(): UserRepository
    {
        return resolve(UserRepository::class);
    }
}
