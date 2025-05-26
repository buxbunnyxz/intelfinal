<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>Intelboard | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('app/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('app/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{ asset('app/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">

    @stack('head')
</head>
<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false,"leftSidebarCondensed":false,"leftSidebarScrollable":false,"darkMode":false,"showRightSidebarOnStart":true}'>
<div class="wrapper">
    @include('layouts.partials.sidebar')
    <div class="content-page">
        <div class="content">
            @include('layouts.partials.header')
            <div class="container-fluid">
                @yield('page-title')
                @yield('content')
            </div>
        </div>
        @include('layouts.partials.footer')
    </div>
</div>
<!-- bundle -->
<script src="{{ asset('app/assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('app/assets/js/app.min.js') }}"></script>
@stack('scripts')
</body>
</html>
