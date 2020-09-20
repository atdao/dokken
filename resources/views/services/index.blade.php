@extends('_layouts.default')

@section('title', 'Docker Services')

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
                                <th>Mode</th>
                                <th>Replicas</th>
                                <th>Ports</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td><a href="{{ route('services.show', $item->ID) }}">{{ $item->ID }}</a>
                                    <td>{{ $item->Name }}</td>
                                    <td>{{ $item->Mode }}</td>
                                    <td>{{ $item->Mode == 'replicated' ? $item->Replicas  : '' }}</td>
                                    <td>{{ $item->Ports }}</td>
                                    <td>{{ $item->Image }}</td>
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
