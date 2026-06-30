<!-- Main Content-->
<main class="container-fluid pb-5 bg-body-tertiary">
    @include('components.titols.titol',['titolPag' => 'Edició Alumne'])
    
    <div class="container">
    <form action="/editar-alumne" method="post">
        
        <input type="hidden" name="alumne_id" value="{{$alumne->alumne_id}}">
        <input type="hidden" name="usuari_id" value="{{$alumne->usuari_id}}">

        @include('components.titols.subtitol',['titolPag' => 'Dades Personals'])

        @include('components.formulari.input-text', ['label' => 'Nom*', 'name' => 'nom', 'value' => $alumne->nom, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Primer cognom*', 'name' => 'primer_cognom', 'value' => $alumne->primer_cognom, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Segon cognom', 'name' => 'segon_cognom', 'value' => $alumne->segon_cognom, 'placeholder' => ''])

        @include('components.formulari.input-text', ['label' => 'DNI/NIE*', 'name' => 'dni', 'value' => $alumne->dni, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Adreça*', 'name' => 'adreca', 'value' => $alumne->adreca, 'placeholder' => '', 'required' => true])

        @include('components.formulari.input-text', ['label' => 'Codi postal*', 'name' => 'codi_postal', 'value' => $alumne->codi_postal, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Municipi*', 'name' => 'municipi', 'value' => $alumne->municipi, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Provincia*', 'name' => 'provincia', 'value' => $alumne->adreca, 'placeholder' => '', 'required' => true])

        @include('components.formulari.input-text', ['label' => 'Data de naixement*', 'name' => 'data_naixement', 'value' => $alumne->data_naixement, 'placeholder' => '', 'required' => true])

        @include('components.titols.subtitol',['titolPag' => 'Contacte'])

        <div class="form-row">
            <div class="col">
                @include('components.formulari.input-text', ['label' => 'Primer telèfon', 'name' => 'primer_telefon', 'value' => $alumne->primer_telefon, 'placeholder' => ''])
            </div>
            <div class="col">
                @include('components.formulari.input-text', ['label' => 'Segon telèfon', 'name' => 'segon_telefon', 'value' => $alumne->segon_telefon, 'placeholder' => ''])
            </div>
        </div>

        @include('components.titols.subtitol',['titolPag' => 'Altres'])

        @include('components.formulari.input-text', ['label' => 'Carnet de conduir', 'name' => 'carnet_conduir', 'value' => $alumne->carnet_conduir, 'placeholder' => ''])



        @include('components.formulari.select', ['label' => 'Idioma 1', 'name' => 'idioma1', 'options' => [$alumne->idioma1 => $alumne->idioma1, 'Catala' => 'Catala', 'Español' => 'Español', 'English' => 'English', ' ' => ' ']])
        @include('components.formulari.select', ['label' => 'Idioma 2', 'name' => 'idioma2', 'options' => [$alumne->idioma2 => $alumne->idioma2, 'Catala' => 'Catala', 'Español' => 'Español', 'English' => 'English', ' ' => ' ']])
        @include('components.formulari.select', ['label' => 'Idioma 3', 'name' => 'idioma3', 'options' => [$alumne->idioma3 => $alumne->idioma3, 'Catala' => 'Catala', 'Español' => 'Español', 'English' => 'English', ' ' => ' ']])
        @include('components.formulari.select', ['label' => 'Idioma 4', 'name' => 'idioma4', 'options' => [$alumne->idioma4 => $alumne->idioma4, 'Catala' => 'Catala', 'Español' => 'Español', 'English' => 'English', ' ' => ' ']])


        @include('components.formulari.textarea', ['label' => 'Observacions', 'name' => 'observacions', 'value' => $alumne->observacions, 'placeholder' => ''])


        @include('components.formulari.button', ['label' => 'Editar'])
        @include('components.formulari.button', ['label' => 'Cancel', 'onclick' => 'window.history.back()', 'buttontype' => 'button'])
    </form>

</div>



</main>