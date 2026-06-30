<main class="container-fluid pb-5 bg-body-tertiary" style="height: 720px">
    @include('components.titols.titol',['titolPag' => 'Login'])
    <div class="container" style="text-align:center; width:400px;">
        
        <form class="form-signin" action="/auth" method="post">
            @csrf
            <img class="mb-4" src="{{env('APP_URL')}}/assets/img/logo.png" alt="" width="90" height="72">

            @if(isset($alert))
                <x-alert type="{{ $alert['type'] }}" message="{{ $alert['message'] }}" />
            @endif
            
            @include('components.formulari.input-text', ['label' => '', 'name' => 'email', 'placeholder' => 'Correu electrònic', 'required' => true])
            @include('components.formulari.input-password', ['label' => '', 'name' => 'password', 'placeholder' => 'Contrasenya', 'required' => true])

            @include('components.formulari.button', ['label' => 'Iniciar Sessió'])

            @include('components.login.reset_password')
        </form>
        @include('components.login.modal_login')
    </div>
    
    
</main>
