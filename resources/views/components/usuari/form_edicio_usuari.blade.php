<!-- Main Content-->
<main class="container-fluid pb-5 bg-body-tertiary" style="height: 720px">
    @include('components.titols.titol',['titolPag' => 'Edició Usuari'])
    
    <div class="container" style="width:500px;">
    <form action="/editar-usuari" method="post">
        
        <input type="hidden" name="id" value="{{$usuari->id}}">
        <input type="hidden" name="remember_token" value="{{$usuari->remember_token}}">
        <input type="hidden" name="rol" value="{{$usuari->rol}}">

        @include('components.formulari.input-text', ['label' => 'Correu*', 'name' => 'email', 'value' => $usuari->email, 'placeholder' => '', 'required' => true])
        @include('components.formulari.input-text', ['label' => 'Contrasenya*', 'name' => 'password', 'value' => '', 'placeholder' => '', 'required' => true])
       
        @include('components.formulari.button', ['label' => 'Editar'])
        @include('components.formulari.button', ['label' => 'Cancel', 'onclick' => 'window.history.back()', 'buttontype' => 'button'])
    </form>

</div>



</main>