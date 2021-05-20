@extends('_layouts.bootstrap')

@section('title', 'Dashboard')


@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">@yield('title')</h5>
        <div class="d-flex text-muted pt-3">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><a href="{{ route('networks.index') }}">Networks</a></td>
                    <td>{{ count($networks) }}</td>
                </tr>
                <tr>
                    <td><a href="{{ route('nodes.index') }}">Nodes</a></td>
                    <td>{{ count($nodes) }}</td>
                </tr>
                <tr>
                    <td><a href="{{ route('services.index') }}">Services</a></td>
                    <td>{{ count($services) }}</td>
                </tr>
                <tr>
                    <td><a href="{{ route('stacks.index') }}">Stacks</a></td>
                    <td>{{ count($stacks) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
