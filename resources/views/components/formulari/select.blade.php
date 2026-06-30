<!-- resources/views/components/alta_usuari/select.blade.php -->
@props(['label', 'name', 'options'])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}" class="form-control">
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}">{{ $optionLabel }}</option>
        @endforeach
    </select>
</div>
