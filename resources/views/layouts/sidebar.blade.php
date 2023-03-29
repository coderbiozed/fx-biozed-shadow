<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link" style="background: #6f42c1 !important;">
        <img src="{{asset('assets')}}/images/TopAsiaFX.png"
             alt="AdminLTE Logo"
             class="brand-image elevation-3">
        
    </a>
    <span class="brand-text font-weight-bold d-block text-center">{{ config('app.name') }}</span>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
