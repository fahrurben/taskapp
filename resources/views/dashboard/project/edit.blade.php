@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> {{ __('Update Note') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('project.update', ['project' => $project]) }}">
                                @csrf
                                @method('PUT')
                                <x-inputs.group for="name" label="Name">
                                    <x-inputs.text name="name" label="Name" value="{{$project->name}}" />
                                </x-inputs.group>

                                <x-inputs.group for="name" label="Name">
                                    <x-inputs.text name="code" label="Code" value="{{$project->code}}" />
                                </x-inputs.group>

                                <button class="btn btn-block btn-success" type="submit">{{ __('Submit') }}</button>
                                <a href="{{ route('project.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')

@endsection
