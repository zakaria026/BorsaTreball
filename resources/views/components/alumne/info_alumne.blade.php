<h2>Informació de l'Alumne</h2>
<div class="mt-4">
    <ul>
        <li>Nom: {{$alumne->nom}}</li>
        <li>Cognoms: {{$alumne->primer_cognom}} {{$alumne->segon_cognom}}</li>
        <li>Dni: {{$alumne->dni}}</li>
        <li>Adreça: {{$alumne->adreca}}</li>
        <li>Codi postal: {{$alumne->codi_postal}}</li>
        <li>Municipi: {{$alumne->municipi}}</li>
        <li>Provincia: {{$alumne->provincia}}</li>
        <li>Data de naixement: {{$alumne->data_naixement}}</li>
        <li>Primer Telefon: {{$alumne->primer_telefon}}</li>
        <li>Segon Telefon: {{$alumne->segon_telefon}}</li>
        <li>Carnet de conduir: {{$alumne->carnet_conduir}}</li>
        <li>Idiomes: {{$alumne->idioma1}} {{$alumne->idioma2}} {{$alumne->idioma3}} {{$alumne->idioma4}}</li>
        <li>Observacions: {{$alumne->observacions}}</li>
    </ul>
</div>
<div class="mt-4">
    <a href="/editar-alumne/{{$alumne->alumne_id}}"><button class="btn btn-primary btn-inscribirse">Editar</button></a>
</div>