@extends('dashboard.base')

@section('content')
    <livewire:project-list />

    <!-- add this -->
    <div class="modal" tabindex="-1" role="dialog" id="project-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-4">
                    <livewire:project-form />
                </div>
            </div>
        </div>
    </div>
@endsection
