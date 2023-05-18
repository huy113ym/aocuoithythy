<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#FC5F2F"/>

    @yield('open_graph')

    <link rel="icon" type="image/x-icon" href="{{ Vite::image('favicon.png') }}">

    <!-- Scripts -->
    @vite('resources/assets/frontend/scss/app.scss')

    @yield('styles')
</head>

<body>
    <div id="app">
        <!-- Header -->
        <header id="masthead" class="site-header">
            @include("frontend.common.header")
        </header>

        <div id="spacing"></div>

        <!-- Breadcrumb -->
        @if(!request()->routeIs('home'))
            <div class="container">
                <ul class="breadcrumb">
                    <li class="link">
                        <a href="{{ route('home') }}">
                            <img src="{{ Vite::image('icons/r-home.svg') }}" width="16px" height="16px" alt="Trang chủ"> Trang chủ
                        </a>
                    </li>

                    <li><img src="{{ Vite::image('icons/g-right.svg') }}" width="16px" height="16px" alt="Right"> @yield('breadcrumb')</li>
                </ul>
            </div>
        @endif

        <!-- Content -->
        <div id="content">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer id="colophon">
            @include("frontend.common.footer")
        </footer>

        <!-- Notify -->
        <div class="col-md-12 text-left" id="notify">
            @if(session()->has('notify'))
                <div class="alert alert-{{ session()->get('class') }} alert-dismissible fade show" role="alert">
                    <div class="alert-icon"></div>

                    @foreach(session()->get('notify') as $notify)
                        {{ $notify }}
                    @endforeach

                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">×</button>
                </div>
            @endif
        </div>
    </div>

    @vite('resources/assets/frontend/js/app.js')

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'vi' }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    @yield('scripts')
</body>
</html>
