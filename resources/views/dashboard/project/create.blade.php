@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> {{ __('Create Note') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('project.store') }}">
                                @csrf
                                <x-inputs.group for="name" label="Name">
                                    <x-inputs.text name="name" label="Name" value="" />
                                </x-inputs.group>

                                <x-inputs.group for="name" label="Name">
                                    <x-inputs.text name="code" label="Code" value="" />
                                </x-inputs.group>

                                <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
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
