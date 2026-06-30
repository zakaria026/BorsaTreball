<h2 class="mt-3">Informació de l'Usuari</h2>
<div class="mt-4">
    <ul>
        <li>Correu: {{$usuari->email}}</li>
        <li>Contrasenya: **********</li>
    </ul>
</div>
<div class="mt-4">
    <a href="/editar-usuari/{{$usuari->id}}"><button class="btn btn-primary btn-inscribirse">Editar</button></a>
</div>