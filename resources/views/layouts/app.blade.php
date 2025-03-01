@extends('layouts.header')

@section('body') 
    <div id="wrapper">
        @include('layouts.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div class="content d-flex flex-column h-100">
                @include('layouts.navbar')

                <main class="container-xxl flex-grow-1">
                    <header class="d-flex justify-content-between align-items-center">
                        <h3 class="my-3">@hasSection ('header-title') @yield('header-title') @else @yield('title') @endif</h3>
                        <div class="btn-group">
                            @yield('header-actions')
                        </div>
                    </header>

                    @yield('content')
                </main>
            </div>
            @include('layouts.footer')
        </div>
    </div>
@endsection



