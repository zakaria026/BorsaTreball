@extends('web.layout.layout')

@section('title_web')
Oferta
@endsection

@section('content')
    @include('components.oferta.oferta')    
@endsection

@section('script')
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>

  <script>
    setTimeout(function() {
        var alertElement = document.getElementById('myAlert');
        if (alertElement) {
            alertElement.remove();
        }
    }, 2000);
</script>
@endsection
