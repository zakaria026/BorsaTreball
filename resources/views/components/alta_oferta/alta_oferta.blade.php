<main class="container-fluid pb-5 bg-body-tertiary">

@include('components.titols.titol',['titolPag' => 'Alta Oferta'])

    <div class="container mt-5">
    
    @if(isset($alert))
                <x-alert type="{{ $alert['type'] }}" message="{{ $alert['message'] }}" />
            @endif
        <form action="/ofertes" method="post">
        <input type="hidden" name="empresa_id" value="{{$empresa->empresa_id}}">
            @include('components.formulari.input-text', ['label' => 'Horari*', 'name' => 'horari', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Incorporació*', 'name' => 'incorporacio', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Sou*', 'name' => 'sou', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Edat*', 'name' => 'edat', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 1*', 'name' => 'idioma1', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 2', 'name' => 'idioma2', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 3', 'name' => 'idioma3', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Idioma 4', 'name' => 'idioma4', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Tipus de contracte*', 'name' => 'tipus_contracte', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Caducitat de la oferta*', 'name' => 'caducitat_oferta', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Descripció*', 'name' => 'descripcio', 'placeholder' => '', 'required' => true])
           
            

            @include('components.formulari.button', ['label' => 'Enviar'])
        </form>
    </div>
</main>
