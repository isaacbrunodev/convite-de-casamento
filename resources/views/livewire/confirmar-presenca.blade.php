<?php
$numeroAcompanhantes = 0;
?>

<div>
    <style>
        .section-title {
            color: var(--terracotta);
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
            font-family: 'Playfair Display', serif;
        }

        .form-container {
            text-align: center;
        }

        .question-text {
            font-size: 1.2rem;
            margin-bottom: 1rem;
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
            border: 2px solid var(--olive);
            border-radius: 25px;
            background: transparent;
            color: var(--olive);
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 100px;
        }

        .btn-option.selected {
            background: var(--olive);
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
            border: 1px solid var(--olive);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.2rem;
            color: var(--olive);
            background: transparent;
        }

        .number-option.selected {
            background: var(--olive);
            color: white;
        }

        .submit-btn {
            padding: 1rem 2.5rem;
            background: var(--terracotta);
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 2rem;
        }

        .submit-btn:hover {
            background: var(--terracotta-dark);
            transform: translateY(-2px);
        }
    </style>

    <h1 class="section-title">Acompanhantes</h1>

    <div class="form-container">
        <p class="question-text">Irá levar acompanhantes?</p>
        <div class="btn-group">
            <button type="button" class="btn-option {{ $temAcompanhantes ? 'selected' : '' }}" wire:click="setAcompanhantes(true)">Sim</button>
            <button type="button" class="btn-option {{ !$temAcompanhantes ? 'selected' : '' }}" wire:click="setAcompanhantes(false)">Não</button>
        </div>

        @if($temAcompanhantes)
        <p class="question-text">Quantos acompanhantes?</p>
        <div class="number-selector">
            @for($i = 1; $i <= 3; $i++)
                <button type="button" 
                    class="number-option {{ $numeroAcompanhantes === $i ? 'selected' : '' }}"
                    wire:click="setNumeroAcompanhantes({{ $i }})">
                    {{ $i }}
                </button>
            @endfor
        </div>
        @endif

        <button type="button" class="submit-btn" wire:click="confirmar">Finalizar</button>
    </div>
</div> 