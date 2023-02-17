<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Comics | DC')</title>
    <link rel="icon" href="{{ Vite::asset('resources/assets/img/favicon.ico') }}" type="image/icon type">
    {{--  Styles --}}
    @vite('resources/js/app.js')
    {{-- Font-Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    @include('partials/header')
    <main>
        @yield('main-content')
    </main>
    @include('partials/footer')
</body>
