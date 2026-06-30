@props(['label', 'name', 'placeholder', 'required' => false])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="password" class="form-control" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}" @if($required) required @endif>
</div>
