@extends('_layouts.bootstrap')

@section('title', 'Dashboard')


@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">@yield('title')</h5>
        <div class="d-flex text-muted pt-3">
            Something, something dark side ...
        </div>
    </div>
@endsection
