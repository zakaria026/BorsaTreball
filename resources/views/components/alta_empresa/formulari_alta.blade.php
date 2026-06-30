<main class="container-fluid pb-5 bg-body-tertiary">

@include('components.titols.titol',['titolPag' => 'Alta Empresa'])

    <div class="container mt-5">
    @if(isset($alert))
                <x-alert type="{{ $alert['type'] }}" message="{{ $alert['message'] }}" />
            @endif
        <form action="/empreses" method="post">
            @include('components.formulari.input-text', ['label' => 'NIF*', 'name' => 'nif', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Nom*', 'name' => 'nom', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Persona de contacte*', 'name' => 'persona_contacte', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Primer telèfon de contacte*', 'name' => 'primer_telefon_contacte', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Segon telèfono de contacte', 'name' => 'segon_telefon_contacte', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Adreça*', 'name' => 'adreca', 'placeholder' => ''])
            @include('components.formulari.input-text', ['label' => 'Codi postal*', 'name' => 'codi_postal', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Municipi*', 'name' => 'municipi', 'placeholder' => '', 'required' => true])
            @include('components.formulari.input-text', ['label' => 'Provincia*', 'name' => 'provincia', 'placeholder' => '', 'required' => true])

            @include('components.formulari.button', ['label' => 'Enviar'])
        </form>
    </div>
</main>
