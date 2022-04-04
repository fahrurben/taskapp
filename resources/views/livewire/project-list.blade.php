<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>{{ __('Project') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <a href="#" class="btn btn-primary m-2" wire:click.prevent="$emit('triggerCreateProject')">{{ __('Add Project') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->code}}</td>
                                    <td><a href="#" class="btn btn-sm btn-primary" wire:click.prevent="$emitTo('project-form', 'triggerEdit', {{$project->id}})">{{ __('Edit') }}</a></td>
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
