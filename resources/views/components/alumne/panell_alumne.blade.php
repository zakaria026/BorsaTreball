<!-- Main Content-->
<main class="container-fluid pb-5 bg-body-tertiary">
    @include('components.titols.titol',['titolPag' => 'Panell Alumne'])
    
    <div class="container">
    @if(isset($alert))
        <x-alert id="myAlert" type="{{ $alert['type'] }}" message="{{ $alert['message'] }}" />
    @endif
    <div class="row">
        <div class="col">
        @include('components.alumne.info_alumne')
        @include('components.usuari.info_usuari')
        </div>
        <div class="col-md-2">
          <p></p>
        </div>
        <div class="col">
          @include('components.alumne.ofertes_alumne')
      </div>
    </div>
</div>



</main>