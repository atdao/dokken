@extends('_layouts.default')

@section('title', sprintf('Network: %s', $item->Name))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <h4 class="card-header">Network details</h4>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{ $item->Id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $item->Name }}</td>
                            </tr>
                            <tr>
                                <td>Created</td>
                                <td>{{ $item->Created }}</td>
                            </tr>
                            <tr>
                                <td>Scope</td>
                                <td>{{ $item->Scope }}</td>
                            </tr>
                            <tr>
                                <td>Driver</td>
                                <td>{{ $item->Driver }}</td>
                            </tr>
                            <tr>
                                <td>EnableIPv6</td>
                                <td>{{ $item->EnableIPv6 ? 'true' : 'false' }}</td>
                            </tr>
                            <tr>
                                <td>Attachable</td>
                                <td>{{ $item->Attachable ? 'true' : 'false' }}</td>
                            </tr>
                            <tr>
                                <td>Ingress</td>
                                <td>{{ $item->Ingress ? 'true' : 'false' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @if (isset($item->Containers))
                    <div class="card mt-4">
                        <h4 class="card-header">Containers</h4>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped">
                                <tbody>
                                @foreach($item->Containers as $container)
                                    <tr>
                                        <td>{{ $container->Name }}</td>
                                        <td>{{ $container->IPv4Address }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
