@extends('layouts.app')

@section('title', 'Lista de Presentes')

@section('styles')
<style>
    .orientacoes-section {
        max-width: 900px;
        margin: 0 auto;
        padding: 2rem;
    }

    .section-title {
        color: var(--terracotta);
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 80px;
        height: 2px;
        background: var(--olive);
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0.6;
    }

    .presentes-intro {
        text-align: center;
        font-size: 1.2rem;
        color: #495057;
        margin-bottom: 3rem;
        line-height: 1.8;
    }

    .presentes-container {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 4px 12px rgba(186, 184, 108, 0.15);
        margin-bottom: 3rem;
    }

    .presente-item {
        display: flex;
        align-items: center;
        padding: 1.5rem;
        border-bottom: 1px solid rgba(186, 184, 108, 0.2);
        transition: all 0.3s ease;
    }

    .presente-item:last-child {
        border-bottom: none;
    }

    .presente-item:hover {
        background: rgba(186, 184, 108, 0.05);
        transform: translateX(5px);
    }

    .presente-icon {
        font-size: 1.8rem;
        color: var(--olive);
        margin-right: 1.5rem;
        min-width: 40px;
        text-align: center;
    }

    .presente-text {
        flex-grow: 1;
        font-size: 1.1rem;
        color: #495057;
    }

    .presente-description {
        font-size: 0.9rem;
        color: #6c757d;
        font-style: italic;
        margin-top: 0.3rem;
    }

    .pix-info {
        background: rgba(186, 184, 108, 0.1);
        padding: 1.5rem;
        border-radius: 10px;
        margin: 2rem 0;
        text-align: center;
    }

    .pix-key {
        font-family: monospace;
        font-size: 1.2rem;
        background: white;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        margin: 1rem 0;
        display: inline-block;
        border: 1px dashed var(--olive);
    }

    .copy-button {
        background: var(--olive);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        cursor: pointer;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .copy-button:hover {
        background: var(--olive-dark);
    }

    .aviso-pastoral {
        background: rgba(226, 114, 91, 0.1);
        padding: 1.5rem;
        border-radius: 10px;
        margin-top: 3rem;
        text-align: center;
        color: var(--terracotta);
        font-size: 1.1rem;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .orientacoes-section {
            padding: 1rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .presente-item {
            padding: 1rem;
        }

        .presente-icon {
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        .presente-text {
            font-size: 1rem;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection

@section('content')
<div class="orientacoes-section">
    <h1 class="section-title">Lista de Presentes</h1>
    
    <div class="presentes-intro">
        <p>Caso venha o desejo em seu coração de nos presentear, 
        preparamos uma lista especial com itens que ajudarão a construir nosso novo lar.</p>
    </div>

    <div class="presentes-container">
        <div class="pix-info">
            <div class="presente-text">PIX de qualquer valor</div>
            <div class="presente-text" style="font-size: 0.9rem; margin: 0.5rem 0;">Isaac Bruno Monte Santos - Banco Inter</div>
            <div class="pix-key" id="pix-key">073.087.065-08</div>
            <button class="copy-button" onclick="copyPix()">Copiar Chave PIX</button>
        </div>

        <div class="presente-item">
            <i class="fas fa-coffee presente-icon"></i>
            <div class="presente-text">
                Bule de café
                <div class="presente-description">Para começar nossos dias com um café especial</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-utensils presente-icon"></i>
            <div class="presente-text">
                Jogo de colheres e espátulas de silicone
                <div class="presente-description">Para nossas aventuras na cozinha</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-bath presente-icon"></i>
            <div class="presente-text">
                Toalhas de banho
                <div class="presente-description">Para deixar nosso lar mais aconchegante</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-wine-glass-alt presente-icon"></i>
            <div class="presente-text">
                Jogo de taças para vinho
                <div class="presente-description">Para celebrar momentos especiais</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-sink presente-icon"></i>
            <div class="presente-text">
                Escorredor de prato
                <div class="presente-description">Para organizar nossa cozinha</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-seedling presente-icon"></i>
            <div class="presente-text">
                Vasos para plantas
                <div class="presente-description">Para trazer mais vida ao nosso lar</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-concierge-bell presente-icon"></i>
            <div class="presente-text">
                Jogo de travessas
                <div class="presente-description">Para servir nossas refeições</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-cut presente-icon"></i>
            <div class="presente-text">
                Tábua de corte
                <div class="presente-description">O melhor tempero é o amor</div>
            </div>
        </div>

        <div class="presente-item">
            <i class="fas fa-heart presente-icon"></i>
            <div class="presente-text">
                O que vier do seu coração
                <div class="presente-description">Sua presença e carinho já são presentes incríveis!</div>
            </div>
        </div>
    </div>

    <div class="aviso-pastoral">
        <i class="fas fa-info-circle"></i>
        <p>Se optar por trazer presente físico, a Pastoral da Família estará recepcionando os convidados 
        e poderá receber seu presente.</p>
    </div>
</div>
@endsection

@section('scripts')
<script>
function copyPix() {
    const pixKey = document.getElementById('pix-key').innerText;
    navigator.clipboard.writeText(pixKey).then(() => {
        const button = document.querySelector('.copy-button');
        button.textContent = 'Copiado!';
        setTimeout(() => {
            button.textContent = 'Copiar Chave PIX';
        }, 2000);
    });
}
</script>
@endsection 