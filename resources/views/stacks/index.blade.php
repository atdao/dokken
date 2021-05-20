@extends('_layouts.bootstrap')

@section('title', 'Docker Stacks')

@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">@yield('title')</h5>
        <div class="d-flex text-muted pt-3">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Services</th>
                    <th>Orchestrator</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td><a href="{{ route('stacks.show', $item->Name) }}">{{ $item->Name }}</a>
                        <td>{{ $item->Services }}</td>
                        <td>{{ $item->Orchestrator }}</td>
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
                "paging": false,
                "info": false
            });
        });
    </script>
@endsection
