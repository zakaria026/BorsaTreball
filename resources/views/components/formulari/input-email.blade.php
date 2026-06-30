<!-- resources/views/components/alta_usuari/input-email.blade.php -->
@props(['label', 'name', 'placeholder', 'required' => false])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="email" class="form-control" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}" @if($required) required @endif>
</div>
