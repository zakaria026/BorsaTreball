<!-- resources/views/components/alta_usuari/input-text.blade.php -->
@props(['label', 'name', 'placeholder', 'required' => false, 'value' => ""])


<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" class="form-control" id="{{ $name }}" value="{{ $value }}" name="{{ $name }}" placeholder="{{ $placeholder }}" @if($required) required @endif>
</div>
