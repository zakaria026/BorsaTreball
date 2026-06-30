<!-- resources/views/formulari_alata.blade.php -->
<main class="container-fluid pb-5 bg-body-tertiary">
@include('components.titols.titol',['titolPag' => 'Alta Usuaris'])
<div class="container">
    <form action="/alumnes" method="post">
        @include('components.titols.subtitol',['titolPag' => 'Dades Personals'])

        @include('components.formulari.input-text', ['label' => 'Nom*', 'name' => 'nom', 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Primer cognom*', 'name' => 'primer_cognom', 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Segon cognom', 'name' => 'segon_cognom', 'placeholder' => ''])

        @include('components.formulari.input-text', ['label' => 'DNI/NIE*', 'name' => 'dni', 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Adreça*', 'name' => 'adreca', 'placeholder' => '', 'required' => true])

        @include('components.formulari.input-text', ['label' => 'Codi postal*', 'name' => 'codi_postal', 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Municipi*', 'name' => 'municipi	', 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Provincia*', 'name' => 'provincia', 'placeholder' => '', 'required' => true])

        @include('components.formulari.input-text', ['label' => 'Data de naixement*', 'name' => 'data_naixement', 'placeholder' => '', 'required' => true])

        @include('components.titols.subtitol',['titolPag' => 'Contacte'])

        <div class="form-row">
            <div class="col">
                @include('components.formulari.input-text', ['label' => 'Primer telèfon', 'name' => 'primer_telefon', 'placeholder' => ''])
            </div>
            <div class="col">
                @include('components.formulari.input-text', ['label' => 'Segundo telèfon', 'name' => 'segon_telefon', 'placeholder' => ''])
            </div>
        </div>

        @include('components.titols.subtitol',['titolPag' => 'Altres'])

        @include('components.formulari.input-text', ['label' => 'Carnet de conduir', 'name' => 'carnet_conduir', 'placeholder' => ''])

        @include('components.formulari.select', ['label' => 'Idioma 1', 'name' => 'idioma1', 'options' => ['', 'Catala', 'Español', 'English']])
        @include('components.formulari.select', ['label' => 'Idioma 2', 'name' => 'idioma2', 'options' => ['', 'Catala', 'Español', 'English']])
        @include('components.formulari.select', ['label' => 'Idioma 3', 'name' => 'idioma3', 'options' => ['', 'Catala', 'Español', 'English']])
        @include('components.formulari.select', ['label' => 'Idioma 4', 'name' => 'idioma4', 'options' => ['', 'Catala', 'Español', 'English']])

        @include('components.formulari.textarea', ['label' => 'Observacions', 'name' => 'observacions', 'placeholder' => ''])


        @include('components.formulari.button', ['label' => 'Enviar'])
    </form>

</div>
</main>