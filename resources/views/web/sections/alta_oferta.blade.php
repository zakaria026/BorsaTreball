@extends('web.layout.layout')

@section('title_web')
Formulari de Creació de Ofertes
@endsection

@section('content')
    @include('components.alta_oferta.alta_oferta')
@endsection

@section('script')
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
></script>
@endsection
