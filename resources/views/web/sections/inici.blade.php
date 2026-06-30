@extends('web.layout.layout')

@section('title_web')
Inici
@endsection

@section('content')
    @include('components.banner.banner')

    @include('components.titols.titol',['titolPag' => 'Ofertes Destacades'])
    <div class="container" style="width:80%">
            @if(isset($alert))
                <x-alert type="{{ $alert['type'] }}" message="{{ $alert['message'] }}" />
            @endif
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($ofertes as $oferta)
                @if($oferta->destacada)
                   @include('components.llistat_ofertes.oferta', [
                    'oferta' => $oferta
                    ]) 
                @endif
                
            @endforeach         
        </div>
    </div>
@endsection

@section('script')
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
@endsection
