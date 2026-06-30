<div class="col">
    <div class="card shadow-sm mb-3">
        
        <img class="w-50" src="{{env('APP_URL')}}/assets/img/logo.png" alt="logo">
        <div class="card-body">
            <h4>{{$oferta->empresa->nom}}</h4>
            <p class="card-text">{{$oferta->descripcio}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="oferta/{{$oferta->oferta_id}}" class="btn btn-sm btn-outline-secondary">Més informació...</a>
                </div>
                <p>{{$oferta->alumnes()->count()}}
                <i class="fa fa-users" aria-hidden="true"></i></p>

            </div>
        </div>
    </div>
</div>