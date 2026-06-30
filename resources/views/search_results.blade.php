<!-- Main Content -->
<main class="container-fluid pb-5 bg-body-tertiary">
    @include('components.titols.titol',['titolPag' => 'Resultados de la búsqueda'])
    @include('components.llistat_ofertes.header_llistat')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @forelse ($results as $oferta)
              @include('components.llistat_ofertes.oferta', [
                  'oferta' => $oferta
              ])
          @empty
              <div class="col-12">
                  <p>No se encontraron resultados para tu búsqueda.</p>
              </div>
          @endforelse
        </div>
    </div>
</main>
