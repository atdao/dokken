@extends('_layouts.bootstrap')

@section('title', 'Docker Nodes')

@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">@yield('title')</h5>
        <div class="d-flex text-muted pt-3">
            <table class="table table-striped">
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
                        <td><a href="{{ route('nodes.show', $item->ID) }}">{{ substr($item->ID, 0, 12) }}</a>
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
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.table').DataTable({
                "order": [[1, "asc"]],
                "paging": false,
                "info": false
            });
        });
    </script>
@endsection
