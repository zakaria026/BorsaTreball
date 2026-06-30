<main class="container-fluid py-5" style="background-color: #f8f9fa; height: 720px;">
    <div class="container mx-auto">
        <div class="row">
            @if(isset($alert))
                <x-alert type="{{ $alert['type'] }}" message="{{ $alert['message'] }}" />
            @endif
            <div class="col-md-3 text-center mb-4">
                <img src="{{env('APP_URL')}}/assets/img/logo.png" alt="Logo de l'empresa" style="max-width: 100%; height: auto;">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold mb-3">Descripció</h2>
                        <p>{{ $oferta->descripcio }}</p>
                    </div>
                    <div class="col-md-6">
                        <h2 class="font-weight-bold mb-3">Detalls de l'Oferta</h2>
                        <div class="mb-2">
                            <span class="font-weight-bold">Data de Caducitat:</span>
                            <span>{{ $oferta->caducitat_oferta }}</span>
                        </div>
                        <div class="mb-2">
                            <span class="font-weight-bold">Tipus de Contracte:</span>
                            <span>{{ $oferta->tipus_contracte }}</span>
                        </div>
                        <div class="mb-2">
                            <span class="font-weight-bold">Horari:</span>
                            <span>{{ $oferta->horari }}</span>
                        </div>
                        <div class="mb-2">
                            <span class="font-weight-bold">Data d'Incorporació:</span>
                            <span>{{ $oferta->incorporacio }}</span>
                        </div>
                        <div class="mb-2">
                            <span class="font-weight-bold">Salari:</span>
                            <span>{{ $oferta->sou }} €</span>
                        </div>
                        <div class="mb-2">
                            <span class="font-weight-bold">Rang d'Edat:</span>
                            <span>{{ $oferta->edat }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="font-weight-bold mb-3">Idiomes Requerits</h2>
                        <ul class="list-unstyled">
                            <li>{{ $oferta->idioma1 }}</li>
                            <li>{{ $oferta->idioma2 }}</li>
                            <li>{{ $oferta->idioma3 }}</li>
                            <li>{{ $oferta->idioma4 }}</li>
                        </ul>
                    </div>
                </div>

                @if(Auth::check() && Auth::user()->rol == "Empreses")
                <a href="/editar-oferta/{{$oferta->oferta_id}}" class="btn btn-primary mb-3">Editar Oferta</a>
                <a href="/eliminar-oferta/{{$oferta->oferta_id}}" class="btn btn-danger mb-3">Eliminar Oferta</a>
                @endif

            
                <div class="mt-4">
                @if(Auth::check() && Auth::user()->rol == "Alumnes" && Auth::user()->alumne->ofertes->contains('oferta_id', $oferta->oferta_id))
                    @php
                    $alumne_id = Auth::user()->alumne->alumne_id;
                    @endphp
                    <form action="{{ route('oferta.desinscribirse', ['id_oferta' => $oferta->oferta_id, 'id_alumne' => $alumne_id]) }}" method="POST">
                        <button type="submit" class="btn btn-primary btn-lg">Desinscriu-te</button>
                    </form>@endif

                @if(Auth::check() && Auth::user()->rol == "Alumnes" && !Auth::user()->alumne->ofertes->contains('oferta_id', $oferta->oferta_id))
                    <form action="{{ route('oferta.inscribirse', ['id' => $oferta->oferta_id]) }}" method="POST">
                        <button type="submit" class="btn btn-primary btn-lg">Inscriu-te</button>
                    </form>@endif
                </div>
            </div>
        </div>
    </div> 
</main>
