<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <script src="{{ asset('js/app.js') }}" data-turbolinks-suppress-warning></script>
</head>

<body>
    @livewire('header')

    @yield('content')

    @livewire('footer')

    @livewireScripts
</body>

</html>