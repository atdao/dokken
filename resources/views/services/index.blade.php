@extends('_layouts.bootstrap')

@section('title', 'Docker Services')

@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">@yield('title')</h5>
        <div class="d-flex text-muted pt-3">
            <table class="table table-striped">
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
                        <td>{{ $item->Replicas }}</td>
                        <td>{{ $item->Ports }}</td>
                        <td>{{ $item->Image }}</td>
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
