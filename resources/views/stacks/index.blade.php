@extends('_layouts.default')

@section('title', 'Docker Stacks')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <h1 class="card-header">@yield('title')</h1>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Services</th>
                                <th class="border-top-0">Orchestrator</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td><a href="#">{{ $item->Name }}</a>
                                    <td>{{ $item->Services }}</td>
                                    <td>{{ $item->Orchestrator }}</td>
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
