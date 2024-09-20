<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="stylesheet" href="{{ asset('assets/icons/css/all.css') }}">
    </head>
    <body class="h-full" dir="rtl">
        {{ $slot }}
    </body>
</html>
