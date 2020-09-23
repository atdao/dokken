<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
        <h4 class="c-sidebar-brand-full mb-0"><img src="{{ asset('assets/img/brand/logo.png') }}" height="30" /> Dokken</h4>
        <img class="c-sidebar-brand-minimized mb-0" src="{{ asset('assets/img/brand/logo.png') }}" height="30" />
    </div>
    <ul class="c-sidebar-nav ps">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link{{ \Illuminate\Support\Facades\Route::is('home') ? ' c-active' : '' }}"
               href="{{ route('home') }}">
                <i class="fas fa-home c-sidebar-nav-icon"></i>
                Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link{{ \Illuminate\Support\Facades\Route::is('networks*') ? ' c-active' : '' }}"
               href="{{ route('networks.index') }}">
                <i class="fas fa-network-wired c-sidebar-nav-icon"></i>
                Networks
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link{{ \Illuminate\Support\Facades\Route::is('nodes*') ? ' c-active' : '' }}"
               href="{{ route('nodes.index') }}">
                <i class="fas fa-project-diagram c-sidebar-nav-icon"></i>
                Nodes
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link{{ \Illuminate\Support\Facades\Route::is('services*') ? ' c-active' : '' }}"
               href="{{ route('services.index') }}">
                <i class="fas fa-cogs c-sidebar-nav-icon"></i>
                Services
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link{{ \Illuminate\Support\Facades\Route::is('stacks*') ? ' c-active' : '' }}"
               href="{{ route('stacks.index') }}">
                <i class="fas fa-layer-group c-sidebar-nav-icon"></i>
                Stacks
            </a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
