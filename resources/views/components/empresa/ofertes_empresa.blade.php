<div class="container">
            <h2>Ofertes De l'empresa</h2>
            <a href="{{ route('ruta.alta_oferta') }}" class="btn btn-primary mb-3">Crear Nova Oferta</a>
            @foreach ($ofertes as $oferta)
              @include('components.llistat_ofertes.oferta', [
                  'oferta' => $oferta
              ])
            @endforeach
          </div>