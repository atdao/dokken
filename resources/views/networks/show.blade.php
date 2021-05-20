@extends('_layouts.bootstrap')

@section('title', sprintf('Network: %s', $item->Name))

@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">Network Details</h5>
        <div class="d-flex text-muted pt-3">
            <table class="table table-striped">
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
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h5 class="border-bottom pb-2 mb-0">Containers</h5>
            <div class="d-flex text-muted pt-3">
                <table class="table table-striped">
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
@endsection
