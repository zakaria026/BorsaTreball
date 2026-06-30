@extends('web.layout.layout')

@section('title_web')
Formulari de Treball
@endsection

@section('content')
    @include('components.alta_empresa.formulari_alta')
@endsection

@section('script')
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
></script>
@endsection
