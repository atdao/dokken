@extends('_layouts.bootstrap')

@section('title', sprintf('Node: %s', $item->Description->Hostname))

@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">Node Details</h5>
        <div class="d-flex text-muted pt-3">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{ $item->ID }}</td>
                </tr>
                <tr>
                    <td>Hostname</td>
                    <td>{{ $item->Description->Hostname }}</td>
                </tr>
                <tr>
                    <td>CreatedAt</td>
                    <td>{{ $item->CreatedAt}}</td>
                </tr>
                <tr>
                    <td>UpdatedAt</td>
                    <td>{{ $item->UpdatedAt}}</td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>{{ $item->Spec->Role }}</td>
                </tr>
                <tr>
                    <td>Availability</td>
                    <td>{{ $item->Spec->Availability }}</td>
                </tr>
                <tr>
                    <td>EngineVersion</td>
                    <td>{{ $item->Description->Engine->EngineVersion }}</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>{{ $item->Status->State }}</td>
                </tr>
                <tr>
                    <td>IP</td>
                    <td>{{ $item->Status->Addr }}</td>
                </tr>
                @if(isset($item->ManagerStatus))
                    <tr>
                        <td>Leader</td>
                        <td>{{ isset($item->ManagerStatus->Leader) ? 'true' : 'false' }}</td>
                    </tr>
                    <tr>
                        <td>ManagerStatus</td>
                        <td>{{ $item->ManagerStatus->Reachability }}</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
    @if (count($tasks))
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h5 class="border-bottom pb-2 mb-0">Tasks</h5>
            <div class="d-flex text-muted pt-3">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Node</th>
                        <th>CurrentState</th>
                        <th>DesiredState</th>
                        <th>Error</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->ID }}</td>
                            <td>{{ $task->Name }}</td>
                            <td>{{ $task->Node }}</td>
                            <td>{{ $task->CurrentState }}</td>
                            <td>{{ $task->DesiredState }}</td>
                            <td>{{ $task->Error }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
