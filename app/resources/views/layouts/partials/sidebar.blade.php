<div class="leftside-menu">
    <!-- LOGO -->
    <a href="{{ url('/') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('app/public/assets/images/logo.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('app/public/assets/images/logo_sm.png') }}" alt="" height="16">
        </span>
    </a>
    <a href="{{ url('/') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('app/public/assets/images/logo-dark.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('app/public/assets/images/logo_sm_dark.png') }}" alt="" height="16">
        </span>
    </a>
    <div class="h-100" id="leftside-menu-container" data-simplebar="">
        <!--- Sidemenu -->
        @include('layouts.partials.sidemenu')
        <div class="clearfix"></div>
    </div>
</div>
