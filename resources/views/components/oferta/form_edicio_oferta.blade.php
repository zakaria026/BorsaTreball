<main class="container-fluid pb-5 bg-body-tertiary">
    @include('components.titols.titol',['titolPag' => 'Edició Oferta'])
    
    <div class="container mt-5">
    
        @if(isset($alert))
            <x-alert type="{{ $alert['type'] }}" message="{{ $alert['message'] }}" />
        @endif
        
        <form action="{{ route('editar-oferta') }}" method="post">
            
            <input type="hidden" name="oferta_id" value="{{$oferta->oferta_id}}">
            <input type="hidden" name="empresa_id" value="{{$oferta->empresa_id}}">

            @include('components.formulari.input-text', ['label' => 'Horari*', 'name' => 'horari', 'value' => $oferta->horari, 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Incorporació*', 'name' => 'incorporacio', 'value' => $oferta->incorporacio, 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Sou*', 'name' => 'sou', 'value' => $oferta->sou, 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Edat*', 'name' => 'edat', 'value' => $oferta->edat, 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 1*', 'name' => 'idioma1', 'value' => $oferta->idioma1, 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 2', 'name' => 'idioma2', 'value' => $oferta->idioma2, 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 3', 'name' => 'idioma3', 'value' => $oferta->idioma3, 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 4', 'name' => 'idioma4', 'value' => $oferta->idioma4, 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Tipus de contracte*', 'name' => 'tipus_contracte', 'value' => $oferta->tipus_contracte, 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Caducitat de la oferta*', 'name' => 'caducitat_oferta', 'value' => $oferta->caducitat_oferta, 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Descripció*', 'name' => 'descripcio', 'value' => $oferta->descripcio, 'placeholder' => '', 'required' => true])
           
            @include('components.formulari.button', ['label' => 'Editar'])
            @include('components.formulari.button', ['label' => 'Cancel·lar', 'onclick' => 'window.history.back()', 'buttontype' => 'button'])
        </form>
    </div>
</main>
