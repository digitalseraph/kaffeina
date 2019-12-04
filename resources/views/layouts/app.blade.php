<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @component('layouts.snippets.nav.navbar')
        @endcomponent

        @guest
        @else
        <div class="progress">
            <div class="progress-bar" role="progressbar"
                 style="width: {{ Auth::user()->percentageAllowed() }}%;"
                 aria-valuenow="{{ Auth::user()->percentageAllowed() }}"
                 aria-valuemin="0" aria-valuemax="100">{{ Auth::user()->percentageAllowed() }}%</div>
        </div>
        @endguest

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <!-- Scripts -->
    @component('layouts.snippets.footer.scripts')
            <script src="{{ mix('/js/manifest.js') }}" ></script>
            <script src="{{ mix('/js/vendor.js') }}" ></script>
            <script src="{{ mix('/js/app.js') }}" ></script>
    @endcomponent
</body>
</html>
