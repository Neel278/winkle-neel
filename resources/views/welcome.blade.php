<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live wire</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles>
        <script src="{{ asset('js/app.js') }}" data-turbolinks-suppress-warning></script>

</head>

<body>
    @include('header')

    @include('layouts.app')

    @livewire('index')

    @livewire('footer')


    <livewire:scripts>
</body>

</html>