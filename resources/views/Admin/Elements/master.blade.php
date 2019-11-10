<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quản trị - Đăng ký thành lập doanh nghiệp</title>
        <base {{ asset('') }}>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="modules/admin/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="modules/admin/css/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="modules/admin/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="modules/admin/css/_all-skins.min.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="modules/admin/css/bootstrap-datepicker.min.css">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="modules/admin/css/app.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper" id="app">
            @include('Admin.Elements.header')

            @include('Admin.Elements.sidebar')

            <div class="content-wrapper">
                @yield('content')
            </div>
            
            @include('Admin.Elements.footer')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
