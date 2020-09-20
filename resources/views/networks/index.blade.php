@extends('_layouts.default')

@section('title', 'Docker Networks')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <h1 class="card-header">@yield('title')</h1>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Driver</th>
                                <th>Scope</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td><a href="{{ route('networks.show', $item->ID) }}"
                                           title="{{ $item->ID }}">{{ substr($item->ID, 0, 13) }}</a></td>
                                    <td>{{ $item->Name }}</td>
                                    <td>{{ $item->Driver }}</td>
                                    <td>{{ $item->Scope }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
