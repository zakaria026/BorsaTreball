<div class="container">
            <h2>Ofertes Inscrites</h2>
            @foreach ($alumne->ofertes as $oferta)
              @include('components.llistat_ofertes.oferta', [
                  'oferta' => $oferta
              ])
            @endforeach
          </div>