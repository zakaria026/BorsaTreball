@props(['id', 'titol'])

<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $titol }}</h5>
            </div>
            <div class="modal-body">
                <form action="/recovery-password" method="post">
                    <div class="form-group">
                        @include('components.formulari.input-email', ['label' => 'Correo electrónico', 'name' => 'email', 'placeholder' => 'Correo electrónico', 'required' => true])
                        @include('components.modal.close_button', ['label' => 'Cerrar'])

                        @include('components.formulari.button', ['label' => 'Enviar'])

                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Incluye la biblioteca de Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
    $(document).ready(function(){
        $('#openModalBtn').click(function(){
            $('#{{ $id }}').modal('show');
        });
    });

    $(document).ready(function(){
        $('#closeModal').click(function(){
            $('#{{ $id }}').modal('hide');
        });
    });

</script>