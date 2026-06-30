<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ms-auto py-4 py-lg-0">
        
        <!--@include('components.menu.menu_item',['refItemMenu' => '/actualitzarAlumne','itemMenu' => 'Actualitzar dades'])-->
        @include('components.menu.menu_item',['refItemMenu' => '/llistat-ofertes','itemMenu' => 'Consultar ofertes'])
        <!--@include('components.menu.menu_item',['refItemMenu' => '/baixa','itemMenu' => 'Donar-se de baixa'])-->
        <!--@include('components.menu.menu_item',['refItemMenu' => '/altaAlumne','itemMenu' => 'Donar-se d\'alta alumne'])-->
        @include('components.menu.menu_item',['refItemMenu' => '/altaEmpresa','itemMenu' => 'Donar-se d\'alta empresa'])
        @if(Auth::check() && Auth::user()->rol == "Alumnes")

        @include('components.menu.menu_item',['refItemMenu' => '/panell-alumne','itemMenu' => 'Perfil'])

        @endif

        @if(Auth::check() && Auth::user()->rol == "Empreses")

        @include('components.menu.menu_item',['refItemMenu' => '/panell-empresa','itemMenu' => 'Perfil'])

        @endif

        @if(!Auth::check())
        @include('components.menu.menu_item',['refItemMenu' => '/login','itemMenu' => 'Login'])
        @endif
        @if(Auth::check())
        @include('components.menu.menu_item',['refItemMenu' => '/logout','itemMenu' => 'Logout'])
        @endif
    </ul>
</div>