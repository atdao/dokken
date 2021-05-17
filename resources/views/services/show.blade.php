@extends('_layouts.bootstrap')

@section('title', sprintf('Service: %s', $item->Spec->Name))

@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">Service Details</h5>
        <div class="d-flex text-muted pt-3">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{ $item->ID }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $item->Spec->Name }}</td>
                </tr>
                <tr>
                    <td>CreatedAt</td>
                    <td>{{ $item->CreatedAt }}</td>
                </tr>
                <tr>
                    <td>UpdatedAt</td>
                    <td>{{ $item->UpdatedAt }}</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td>{{ $item->Version->Index }}</td>
                </tr>
                <tr>
                    <td>Mode</td>
                    <td>{{ isset($item->Spec->Mode->Global) ? 'global' : 'replicated' }}</td>
                </tr>
                @if(isset($item->Spec->Mode->Replicated))
                    <tr>
                        <td>Replicas</td>
                        <td>{{ $item->Spec->Mode->Replicated->Replicas }}</td>
                    </tr>
                @endif
                <tr>
                    <td>Image</td>
                    <td>{{ $item->Spec->TaskTemplate->ContainerSpec->Image }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    @if(isset($item->Spec->TaskTemplate->ContainerSpec->Labels))
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h5 class="border-bottom pb-2 mb-0">Container Labels</h5>
            <div class="d-flex text-muted pt-3">
                <table class="table table-striped">
                    <tbody>
                    @foreach($item->Spec->TaskTemplate->ContainerSpec->Labels as $label => $value)
                        <tr>
                            <td>{{ $label }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    @if (isset($item->Spec->TaskTemplate->ContainerSpec->Env))
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h5 class="border-bottom pb-2 mb-0">Environment Variables</h5>
            <div class="d-flex text-muted pt-3">
                <table class="table table-striped">
                    <tbody>
                    @foreach($item->Spec->TaskTemplate->ContainerSpec->Env as $env)
                        <tr>
                            @if($maskedKeywords != "" && preg_match("/($maskedKeywords)/i", $env))
                                <td>{{ explode('=', $env)[0] }}</td>
                                <td>[ masked ]</td>
                            @else
                                @foreach(explode('=', $env) as $value)
                                    <td>{{ $value }}</td>
                                @endforeach
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    @if(isset($item->Spec->TaskTemplate->ContainerSpec->Mounts))
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h5 class="border-bottom pb-2 mb-0">Volume Mounts</h5>
            <div class="d-flex text-muted pt-3">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Source</th>
                        <th>Target</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($item->Spec->TaskTemplate->ContainerSpec->Mounts as $mount)
                        <tr>
                            <td>{{ $mount->Type }}</td>
                            <td>{{ $mount->Source }}</td>
                            <td>{{ $mount->Target }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
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
