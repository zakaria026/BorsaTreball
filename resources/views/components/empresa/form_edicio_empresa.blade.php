<!-- Main Content-->
<main class="container-fluid pb-5 bg-body-tertiary">
    @include('components.titols.titol',['titolPag' => 'Edició Empresa'])
    
    <div class="container">
    <form action="{{ route('editar-empresa') }}" method="post">

        <input type="hidden" name="empresa_id" value="{{$empresa->empresa_id}}">
        <input type="hidden" name="usuari_id" value="{{$empresa->usuari_id}}">
        <input type="hidden" name="validada" value="{{$empresa->validada}}">

        @include('components.titols.subtitol',['titolPag' => 'Dades Personals'])
       

        @include('components.formulari.input-text', ['label' => 'NIF*', 'name' => 'nif', 'value' => $empresa->nif, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Nom*', 'name' => 'nom', 'value' => $empresa->nom, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Persona de contacte*', 'name' => 'persona_contacte', 'value' => $empresa->persona_contacte, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Primer telèfon de contacte*', 'name' => 'primer_telefon_contacte', 'value' => $empresa->primer_telefon_contacte, 'placeholder' => ''])
        @include('components.formulari.input-text', ['label' => 'Segon telèfono de contacte', 'name' => 'segon_telefon_contacte', 'value' => $empresa->segon_telefon_contacte, 'placeholder' => ''])
        @include('components.formulari.input-text', ['label' => 'Adreça*', 'name' => 'adreca', 'value' => $empresa->adreca, 'placeholder' => ''])
        @include('components.formulari.input-text', ['label' => 'Codi postal*', 'name' => 'codi_postal', 'value' => $empresa->codi_postal, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Municipi*', 'name' => 'municipi', 'value' => $empresa->municipi, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Provincia*', 'name' => 'provincia', 'value' => $empresa->provincia, 'placeholder' => '', 'required' => true])


        @include('components.formulari.button', ['label' => 'Editar'])
        @include('components.formulari.button', ['label' => 'Cancel', 'onclick' => 'window.history.back()', 'buttontype' => 'button'])
    </form>

</div>



</main>