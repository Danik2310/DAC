<aside id="sidebar-wrapper">
    <!-- <div class="sidebar-brand">
        <img class="navbar-brand-full app-header-logo" src="{{ asset('img/logoL.png') }}" width="65"
             alt="Infyom Logo">
        <a href="{{ url('/') }}"></a>
    </div> -->
    <div class="sidebar-brand sidebar-brand-ms">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/logoL.png') }}" width="50px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
