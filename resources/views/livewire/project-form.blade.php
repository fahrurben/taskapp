<form wire:submit.prevent="submit">
    @csrf
    <div class="form-group row">
        <label>Name</label>
        <input class="form-control" type="text" placeholder="{{ __('Name') }}" wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form-group row">
        <label>Content</label>
        <input class="form-control" type="text" placeholder="{{ __('Code') }}" wire:model="code">
        @error('code') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button class="btn btn-block btn-success" type="submit">{{ __('Submit') }}</button>
</form>
