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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('components.menus.navbar')

        <main class="py-4">
            <div class="container-md">

                <div class="card pageCard">

                    <div class="card-header py-3 pageCard__header">

                        <div class="row">
                            <div class="btn-toolbar col" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="Back Action">
                                    @section('pageCard_actionBack')
                                    @show
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Page Title">
                                    <h1 class="pageCard__title mb-0 text-left align-baseline">
                                        @section('pageCard_actionTitle')
                                        @show
                                    <h1>
                                </div>
                                <div class="btn-group mr-2 ml-auto" role="group" aria-label="Other Actions">
                                    @section('pageCard_actions')
                                    @show
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body p-0 pageCard__body">
                        @yield('content')
                    </div>

                    @if($options['page']['footer'])
                        <div class="card-footer pageCard__footer text-muted">
                            @yield('footer')
                        </div>
                    @endif
                </div>

            </div>
        </main>
    </div>
</body>
</html>
