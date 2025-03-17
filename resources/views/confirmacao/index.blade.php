@extends('layouts.app')

@section('title', 'Confirmar Presença')

@section('styles')
<style>
    :root {
        --cor-oliva: #BAB86C;
        --cor-oliva-escuro: #9b9859;
        --cor-terracota: #e2725b;
        --cor-terracota-escuro: #c85f4a;
    }

    .confirmation-section {
        text-align: center;
        padding: 4rem 0;
        max-width: 600px;
        margin: 2rem auto;
    }

    .section-title {
        color: var(--cor-terracota);
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 2rem;
        font-family: 'Playfair Display', serif;
    }

    .form-group {
        margin-bottom: 2rem;
    }

    .form-control {
        width: 100%;
        max-width: 400px;
        padding: 1rem;
        font-size: 1.1rem;
        border: 2px solid var(--cor-oliva);
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        margin: 0 auto;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--cor-terracota);
        box-shadow: 0 0 0 3px rgba(226, 114, 91, 0.2);
    }

    .question-text {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
        color: #333;
    }

    .btn-group {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-bottom: 2rem;
    }

    .btn-option {
        padding: 0.8rem 2rem;
        border: 2px solid var(--cor-oliva);
        border-radius: 25px;
        background: transparent;
        color: var(--cor-oliva);
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        min-width: 100px;
    }

    .btn-option.active {
        background: var(--cor-oliva);
        color: white;
    }

    .number-selector {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin: 1.5rem 0;
    }

    .number-option {
        width: 45px;
        height: 45px;
        border: 2px solid var(--cor-oliva);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 1.2rem;
        color: var(--cor-oliva);
        background: transparent;
        padding: 0;
    }

    .number-option.active {
        background: var(--cor-oliva);
        color: white;
    }

    .submit-btn {
        padding: 1rem 2.5rem;
        background: var(--cor-terracota);
        color: white;
        border: none;
        border-radius: 25px;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 2rem;
    }

    .submit-btn:hover {
        background: var(--cor-terracota-escuro);
        transform: translateY(-2px);
    }

    .steps {
        display: none;
    }

    .steps.active {
        display: block;
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert {
        padding: 1rem;
        margin: 2rem auto;
        max-width: 600px;
        text-align: center;
        color: var(--cor-oliva);
        font-size: 1.1rem;
        display: none;
    }

    .alert-success {
        color: var(--cor-oliva-escuro);
        background: none;
        border: none;
    }
</style>
@endsection

@section('content')
<div class="confirmation-section">
    <div id="step1" class="steps active">
        <h1 class="section-title">Confirmar Presença</h1>
        <p class="question-text">Digite seu nome para confirmar sua presença em nossa celebração.</p>
        
        <div class="form-group">
            <input type="text" 
                   id="nomeConvidado" 
                   name="nome" 
                   class="form-control" 
                   placeholder="Digite seu nome completo"
                   required>
        </div>
        
        <button type="button" class="submit-btn" id="avancarParaAcompanhantes">
            Continuar
        </button>
    </div>

    <div id="step2" class="steps">
        <h1 class="section-title">Acompanhantes</h1>
        
        <p class="question-text">Irá levar acompanhantes?</p>
        <div class="btn-group">
            <button type="button" class="btn-option btn-acompanhante" data-valor="sim">Sim</button>
            <button type="button" class="btn-option btn-acompanhante" data-valor="nao">Não</button>
        </div>

        <div class="quantidade-acompanhantes" id="quantidadeAcompanhantes" style="display: none;">
            <p class="question-text">Quantos acompanhantes?</p>
            <div class="number-selector">
                <button type="button" class="number-option btn-numero" data-valor="1">1</button>
                <button type="button" class="number-option btn-numero" data-valor="2">2</button>
                <button type="button" class="number-option btn-numero" data-valor="3">3</button>
            </div>
        </div>

        <button type="button" class="submit-btn" id="finalizarConfirmacao" style="display: none;">
            Finalizar
        </button>
    </div>

    <div id="successAlert" class="alert alert-success"></div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let nome = '';
    let acompanhantes = 0;

    $('#avancarParaAcompanhantes').click(function() {
        nome = $('#nomeConvidado').val().trim();
        
        if (nome === '') {
            alert('Por favor, digite seu nome.');
            return;
        }

        $('#step1').removeClass('active');
        $('#step2').addClass('active');
    });

    $('.btn-acompanhante').click(function() {
        $('.btn-acompanhante').removeClass('active');
        $(this).addClass('active');
        $('#finalizarConfirmacao').show();
        
        if ($(this).data('valor') === 'sim') {
            $('#quantidadeAcompanhantes').slideDown();
        } else {
            $('#quantidadeAcompanhantes').slideUp();
            acompanhantes = 0;
            $('.btn-numero').removeClass('active');
        }
    });

    $('.btn-numero').click(function() {
        $('.btn-numero').removeClass('active');
        $(this).addClass('active');
        acompanhantes = parseInt($(this).data('valor'));
    });

    $('#finalizarConfirmacao').click(function() {
        // Aqui você pode adicionar a lógica para salvar a confirmação
        let mensagem = 'Confirmação realizada com sucesso!';
        if (acompanhantes > 0) {
            mensagem += ' ' + nome + ' confirmou ' + acompanhantes + ' acompanhante(s).';
        } else {
            mensagem += ' ' + nome + ' confirmou presença sem acompanhantes.';
        }
        
        // Esconde todos os passos
        $('.steps').removeClass('active').hide();
        
        // Mostra apenas a mensagem de sucesso
        $('#successAlert')
            .text(mensagem)
            .slideDown()
            .css({
                'font-size': '1.3rem',
                'margin-top': '3rem',
                'line-height': '1.6'
            });
    });
});
</script>
@endsection 