<!-- Main Content-->
<main class="container-fluid pb-5 bg-body-tertiary">
    @include('components.titols.titol',['titolPag' => 'Ofertes de treball'])
    @include('components.llistat_ofertes.header_llistat')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($ofertes as $oferta)
              @include('components.llistat_ofertes.oferta', [
                  'oferta' => $oferta
              ])
          @endforeach          
          <!--@include('components.llistat_ofertes.oferta')-->
        </div>
    </div>
</main>