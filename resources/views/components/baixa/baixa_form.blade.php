<main class="container-fluid pb-5 bg-body-tertiary" style="height: 720px">
    @include('components.titols.titol',['titolPag' => 'Donar-se de baixa'])
    <div class="container" style="text-align:center; width:400px;">
        <form class="form-signin" action="/usuaris" method="delete">
            <img class="mb-4" src="{{env('APP_URL')}}/assets/img/logo.png" alt="" width="90" height="72">
            
            @include('components.formulari.input-text', ['label' => '', 'name' => 'inputNif', 'placeholder' => 'Correu electrònic', 'required' => true])
            @include('components.formulari.input-date', ['label' => '', 'name' => 'inputDate', 'placeholder' => 'DataNaixement', 'required' => true])
            @include('components.baixa.button', ['label' => 'Dona de baixa'])
        </form>
        @include('components.baixa.modal_baixa')
    </div>
</main>