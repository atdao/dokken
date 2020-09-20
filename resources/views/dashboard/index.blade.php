@extends('_layouts.default')

@section('title', 'Dashboard')

@section('content')
    {{--    <div class="card-deck mb-4">--}}
    {{--        <div class="card shadow-sm text-center">--}}
    {{--            <div class="card-body">--}}
    {{--                <a href="{{ route('stacks.index') }}" class="text-decoration-none">--}}
    {{--                    <span class="fas fa-layer-group"></span> {{ count($stacks) }}--}}
    {{--                    <div>stacks</div>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="card shadow-sm text-center">--}}
    {{--            <div class="card-body">--}}
    {{--                <a href="{{ route('services.index') }}" class="text-decoration-none">--}}
    {{--                    <span class="fas fa-cogs"></span> {{ count($services) }}--}}
    {{--                    <div>services</div>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="card shadow-sm text-center">--}}
    {{--            <div class="card-body">--}}
    {{--                <a href="{{ route('nodes.index') }}" class="text-decoration-none">--}}
    {{--                    <span class="fas fa-project-diagram"></span> {{ count($nodes) }}--}}
    {{--                    <div>nodes</div>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="card shadow-sm text-center">--}}
    {{--            <div class="card-body">--}}
    {{--                <a href="{{ route('networks.index') }}" class="text-decoration-none">--}}
    {{--                    <span class="fas fa-network-wired"></span> {{ count($networks) }}--}}
    {{--                    <div>networks</div>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-primary p-3 mr-3">
                            <span class="fas fa-layer-group fa-lg"></span>
                        </div>
                        <div>
                            <div class="text-value text-primary">{{ count($stacks) }}</div>
                            <a href="{{ route('stacks.index') }}" class="text-muted text-uppercase font-weight-bold small stretched-link">Stacks</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-info p-3 mr-3">
                            <span class="fas fa-cogs fa-lg"></span>
                        </div>
                        <div>
                            <div class="text-value text-info">{{ count($services) }}</div>
                            <a href="{{ route('services.index') }}" class="text-muted text-uppercase font-weight-bold small stretched-link">Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-warning p-3 mr-3">
                            <span class="fas fa-project-diagram fa-lg"></span>
                        </div>
                        <div>
                            <div class="text-value text-warning">{{ count($nodes) }}</div>
                            <a href="{{ route('nodes.index') }}" class="text-muted text-uppercase font-weight-bold small stretched-link">Nodes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-danger p-3 mr-3">
                            <span class="fas fa-network-wired fa-lg"></span>
                        </div>
                        <div>
                            <div class="text-value text-danger">{{ count($networks) }}</div>
                            <a href="{{ route('networks.index') }}" class="text-muted text-uppercase font-weight-bold small stretched-link">Networks</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
