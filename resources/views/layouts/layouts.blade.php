<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @component('components.header')
    @endcomponent
    <div class="container">
        @yield('content')
    </div>

    @component('components.footer')
    @endcomponent

</body>
</html>