@props(['label', 'for'])

<div class="form-group row">
    <label for="{{$for}}">{{$label}}</label>
    {{ $slot }}
</div>
