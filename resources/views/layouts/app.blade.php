<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car parts - @yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    @yield('body')
</body>
</html>

@section('body') 
    <div id="wrapper">
        @include('layouts.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div class="content">
                @include('layouts.navbar')

                <main class="container-xxl">
                    <header class="d-flex justify-content-between align-items-center">
                        <h3 class="my-3">@hasSection ('header-title') @yield('header-title') @else @yield('title') @endif</h3>
                        <div class="btn-group">
                            @yield('header-actions')
                        </div>
                    </header>

                    @yield('content')
                </main>

                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection