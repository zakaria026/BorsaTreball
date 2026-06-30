<!-- resources/views/components/alta_usuari/textarea.blade.php -->
@props(['label', 'name', 'placeholder', 'value' => ""])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea class="form-control" id="{{ $name }}" name="{{ $name }}" rows="3" placeholder="{{ $placeholder }}">{{ $value }}</textarea>
</div>
