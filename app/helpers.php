<?php

use App\Contracts\AttendanceRepository;
use App\Contracts\CategoryRepository;
use App\Contracts\GalleryRepository;
use App\Contracts\MediaRepository;
use App\Contracts\PaymentRepository;
use App\Contracts\ProgramRepository;
use App\Contracts\UserRepository;

if (!function_exists('attendance')) {
    function attendance(): \App\Contracts\AttendanceRepository
    {
        return resolve(AttendanceRepository::class);
    }
}

if (!function_exists('category')) {
    function category(): \App\Contracts\CategoryRepository
    {
        return resolve(CategoryRepository::class);
    }
}

if (!function_exists('gallery')) {
    function gallery(): \App\Contracts\GalleryRepository
    {
        return resolve(GalleryRepository::class);
    }
}

if (!function_exists('media')) {
    function media(): \App\Contracts\MediaRepository
    {
        return resolve(MediaRepository::class);
    }
}

if (!function_exists('payment')) {
    function payment(): \App\Contracts\PaymentRepository
    {
        return resolve(PaymentRepository::class);
    }
}

if (!function_exists('program')) {
    function program(): \App\Contracts\ProgramRepository
    {
        return resolve(ProgramRepository::class);
    }
}

if (!function_exists('user')) {
    function user(): \App\Contracts\UserRepository
    {
        return resolve(UserRepository::class);
    }
}
