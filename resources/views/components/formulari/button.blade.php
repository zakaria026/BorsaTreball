@props(['label', 'onclick' => "", 'buttontype' => "submit"])

<button type="{{$buttontype}}" class="btn btn-primary mt-2" onclick="{{ $onclick }}">{{ $label }}</button>
