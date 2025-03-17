@extends('layouts.app')

@section('title', 'Confirmar Presença')

@section('styles')
<style>
    .form-section {
        max-width: 600px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,.1);
    }
    .form-title {
        text-align: center;
        margin-bottom: 2rem;
        color: #343a40;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-label {
        font-weight: 500;
        color: #495057;
    }
    .form-control {
        border-radius: 5px;
        padding: 0.8rem;
        border: 1px solid #ced4da;
    }
    .form-control:focus {
        border-color: #343a40;
        box-shadow: 0 0 0 0.2rem rgba(52,58,64,.25);
    }
    .btn-submit {
        width: 100%;
        padding: 1rem;
        font-size: 1.1rem;
        background-color: #343a40;
        border-color: #343a40;
    }
    .btn-submit:hover {
        background-color: #212529;
        border-color: #212529;
    }
    .alert {
        margin-bottom: 1.5rem;
    }
</style>
@endsection

@section('content')
<div class="form-section">
    <h2 class="form-title">Confirme sua Presença</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('confirmar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome" class="form-label">Seu Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="quantidade_acompanhantes" class="form-label">Quantidade de Acompanhantes</label>
            <input type="number" class="form-control" id="quantidade_acompanhantes" name="quantidade_acompanhantes" min="0" value="0" required>
        </div>

        <div class="form-group">
            <label for="mensagem" class="form-label">Mensagem (opcional)</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-submit">Confirmar Presença</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $("#nome").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "{{ route('buscar.nomes') }}",
                dataType: "json",
                data: {
                    termo: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        minLength: 2
    });
});
</script>
@endsection 