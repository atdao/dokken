@extends('_layouts.default')

@section('title', sprintf('Service: %s', $item->Spec->Name))

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <h4 class="card-header">Service details</h4>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
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
                <div class="card mt-4">
                    <h4 class="card-header">Container labels</h4>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
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
                @if (isset($item->Spec->TaskTemplate->ContainerSpec->Env))
                    <div class="card mt-4">
                        <h4 class="card-header">Environment variables</h4>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped">
                                <tbody>
                                @foreach($item->Spec->TaskTemplate->ContainerSpec->Env as $env)
                                    <tr>
                                        @foreach(explode('=', $env) as $value)
                                            <td>{{ $value }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                @if(isset($item->Spec->TaskTemplate->ContainerSpec->Mounts))
                    <div class="card mt-4 shadow-sm">
                        <h4 class="card-header">Volume mounts</h4>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped">
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
                    <div class="card mt-4">
                        <h4 class="card-header">Tasks</h4>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped">
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
            </div>
        </div>
    </div>
@endsection
