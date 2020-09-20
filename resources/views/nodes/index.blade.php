@extends('_layouts.default')

@section('title', 'Docker Nodes')

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
                                <th>Hostname</th>
                                <th>EngineVersion</th>
                                <th>Status</th>
                                <th>Availability</th>
                                <th>ManagerStatus</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td><a href="#">{{ $item->ID }}</a>
                                    <td>{{ $item->Hostname }}</td>
                                    <td>{{ $item->EngineVersion }}</td>
                                    <td>{{ $item->Status }}</td>
                                    <td>{{ $item->Availability }}</td>
                                    <td>{{ $item->ManagerStatus }}</td>
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
