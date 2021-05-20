<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <div class="text-center">
        <a href="{{ route('home')  }}"
           class="mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="{{ asset('assets/img/brand/logo.png') }}" height="30"/>
        </a>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('home') }}"
               class="nav-link {{ \Illuminate\Support\Facades\Route::is('home') ? 'active' : 'text-white' }}" aria-current="page">
                <i class="me-2 bi-house-door-fill"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('networks.index') }}"
               class="nav-link {{ \Illuminate\Support\Facades\Route::is('networks*') ? 'active' : 'text-white' }}" aria-current="page">
                <i class="me-2 bi-diagram-3-fill"></i>
                Networks
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('nodes.index') }}"
               class="nav-link {{ \Illuminate\Support\Facades\Route::is('nodes*') ? 'active' : 'text-white' }}" aria-current="page">
                <i class="me-2 bi-share-fill"></i>
                Nodes
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('services.index') }}"
               class="nav-link {{ \Illuminate\Support\Facades\Route::is('services*') ? 'active' : 'text-white' }}" aria-current="page">
                <i class="me-2 bi-puzzle-fill"></i>
                Services
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('stacks.index') }}"
               class="nav-link {{ \Illuminate\Support\Facades\Route::is('stacks*') ? 'active' : 'text-white' }}" aria-current="page">
                <i class="me-2 bi-stack"></i>
                Stacks
            </a>
        </li>
    </ul>
</div>
