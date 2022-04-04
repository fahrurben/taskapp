@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>{{ __('Projects') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <a href="{{ route('project.create') }}" class="btn btn-primary m-2">{{ __('Add Project') }}</a>
                            </div>
                            <br>
                            <table class="table table-responsive-sm table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th width="30px;"></th>
                                    <th width="30px;"></th>
                                    <th width="30px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td><strong>{{ $project->name }}</strong></td>
                                        <td><strong>{{ $project->code }}</strong></td>
                                        <td>
                                            <a href="{{ route('project.show', ['project' => $project]) }}" class="btn btn-sm btn-secondary">View</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('project.edit', ['project' => $project])  }}" class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('project.destroy', ['project' => $project]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $projects->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
