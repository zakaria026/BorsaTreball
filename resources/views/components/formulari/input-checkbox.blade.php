<!-- resources/views/components/alta_usuari/input-checkbox.blade.php -->
@props(['label', 'name'])

<div class="form-group form-check mt-2">
    <input type="checkbox" class="form-check-input" id="{{ $name }}" name="{{ $name }}">
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
</div>
