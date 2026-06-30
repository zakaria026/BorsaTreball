<h2>Informació de l'Empresa</h2>
<div class="mt-4">
    <ul>
    <ul>
        <li>NIF: {{$empresa->nif}}</li>
        <li>Nom: {{$empresa->nom}}</li>
        <li>Persona Contacte: {{$empresa->persona_contacte}}</li>
        <li>Telefons: {{$empresa->primer_telefon_contacte}}{{$empresa->segon_telefon_contacte}}</li>
        <li>Adreça: {{$empresa->adreca}}</li>
        <li>Codi postal: {{$empresa->codi_postal}}</li>
        <li>Municipi: {{$empresa->municipi}}</li>
        <li>Provincia: {{$empresa->provincia}}</li>
        <li>Validada: {{$empresa->validada}}</li>
    </ul>
    </ul>
</div>
<div class="mt-4">
<a href="/editar-empresa/{{$empresa->empresa_id}}"><button class="btn btn-primary btn-inscribirse">Editar</button></a>
</div>