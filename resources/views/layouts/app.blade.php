<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <main>{{ $slot }}</main>
</body>

</html>

{{-- <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" height="20" width="20" stroke-width="1.5"
        stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20" width="20"
        stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se axy">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
    </svg> --}}
