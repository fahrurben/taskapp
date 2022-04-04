@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ $project->name }}</div>
                    <div class="card-body">
                        <br>
                        <h4>Name:</h4>
                        <p> {{ $project->name }}</p>
                        <h4>Code:</h4>
                        <p> {{ $project->code }}</p>
                        <a href="{{ route('project.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection
