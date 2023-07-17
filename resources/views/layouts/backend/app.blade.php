<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME','Application') }} | @yield('title','Home')</title>
    {!!Html::style('main.css')!!}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('css')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layouts.backend.includes.header')
        <div class="app-main">
            @include('layouts.backend.includes.sidebar')
            <div class="app-main__outer">
                @yield('content')
                @include('layouts.backend.includes.footer')
            </div>
        </div>
    </div>
    {!! Html::script('assets/backend/scripts/main.js') !!}
    {!! Html::script('assets/backend/scripts/jquery.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton" : true,
            "progressBar" : true
        }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
            toastr.warning("{{ session('warning') }}");
        @endif
      </script>
    @yield('script')
</body>
</html>
