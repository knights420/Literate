<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- plugins:css -->
        <link rel="stylesheet" href="/assets/auth/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/assets/auth/vendors/iconfonts/ionicons/dist/css/ionicons.css">
        <link rel="stylesheet" href="/assets/auth/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/assets/auth/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="/assets/auth/vendors/css/vendor.bundle.addons.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="/assets/auth/css/shared/style.css">
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="/assets/auth/css/demo_1/style.css">
        <!-- End Layout styles -->
        <link rel="shortcut icon" href="/assets/auth/images/favicon.ico" />
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    </head>
    <body>
        <div id="app" class="container-scroller">
            <div class="alert alert-light alert-elevate" id="errors" role="alert" style="display: none">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @if(Session::get('success'))
            <div id="successmsg" style="display:none">
                {{session('success')}}
            </div>
            @endif
            @yield('content')
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="/assets/auth/vendors/js/vendor.bundle.base.js"></script>
        <script src="/assets/auth/vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="/assets/auth/js/shared/off-canvas.js"></script>
        <script src="/assets/auth/js/shared/misc.js"></script>
        <!-- endinject -->
        <script src="/assets/auth/js/shared/jquery.cookie.js" type="text/javascript"></script>
        {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            @if(count($errors)>0)
                swal({
                    title: "Warning!",
                    text: $('#errors').html(),
                    icon: "warning",
                    button: "Close",
                    timer:3000
                });
            @endif
            @if(Session::get('error'))
            swal({
                    title: "Warning!",
                    text: `{{Session::get('error')}}`,
                    icon: "warning",
                    button: "Close",
                    timer:3000
                });
            @endif
            @if(Session::get('success'))
                swal({
                    title: "Success",
                    text: $('#successmsg').html(),
                    icon: "success",
                    button: "Close",
                    timer:2000
                });
            @endif
        </script> --}}
    </body>
</html>