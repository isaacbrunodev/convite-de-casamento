@extends('layouts.app')

@section('title', 'Orientações')

@section('styles')
<style>
    .info-section {
        max-width: 900px;
        margin: 0 auto;
        padding: 3rem;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(186, 184, 108, 0.15);
    }
    .info-title {
        text-align: center;
        margin-bottom: 3rem;
        color: var(--terracotta);
        font-size: 2.5rem;
        font-weight: 600;
    }
    .info-card {
        margin-bottom: 2.5rem;
        padding: 2rem;
        border-radius: 12px;
        background-color: rgba(186, 184, 108, 0.1);
        border: 1px solid rgba(186, 184, 108, 0.2);
        transition: all 0.3s ease;
    }
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(186, 184, 108, 0.15);
    }
    .info-card h3 {
        color: var(--olive);
        margin-bottom: 1.2rem;
        font-size: 1.8rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    .info-card p {
        color: #495057;
        line-height: 1.8;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }
    .info-card a {
        color: var(--terracotta);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .info-card a:hover {
        color: var(--terracotta-dark);
    }
    .info-icon {
        font-size: 1.5rem;
        color: var(--olive);
    }
    .contact-link {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        border: 2px solid var(--olive);
        color: var(--olive);
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
    }
    .contact-link:hover {
        background-color: var(--olive);
        color: white;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection

@section('content')
<div class="info-section">
    <h2 class="info-title">Informações Importantes</h2>

    <div class="info-card">
        <h3>
            <i class="fas fa-church info-icon"></i>
            Local da Cerimônia
        </h3>
        <p>A cerimônia será realizada na Paróquia São Pio X</p>
        <p>Av. Visc. de Maracaju, 196 - Bairro Dezoito do Forte - Aracaju - SE</p>
        <p>Horário: 18:30</p>
    </div>

    <div class="info-card">
        <h3>
            <i class="fas fa-cross info-icon"></i>
            Sobre a Missa
        </h3>
        <p>O casamento ocorrerá durante a missa, com entradas dos padrinhos e noivos, Homilia, Oração dos fiéis, Liturgia eucarística, Comunhão e Rito sacramental.</p>
        <p>Lembrando que para comungar, é necessário estar em Estado de Graça.</p>
    </div>

    <div class="info-card">
        <h3>
            <i class="fas fa-tshirt info-icon"></i>
            Dress Code
        </h3>
        <p>Modéstia na Igreja</p>
        <p>Não é sobre proibições, mas sobre respeito a um local sagrado.</p>
    </div>

    <div class="info-card">
        <h3>
            <i class="fas fa-gift info-icon"></i>
            Presentes
        </h3>
        <p>Para sua comodidade, disponibilizamos uma lista de presentes em nossa página:</p>
        <p><a href="{{ route('presentes') }}" class="contact-link">Lista de Presentes</a></p>
    </div>

    <div class="info-card">
        <h3>
            <i class="fas fa-phone info-icon"></i>
            Contato
        </h3>
        <p>Em caso de dúvidas, entre em contato conosco:</p>
        <p>
            <a href="https://wa.me/5579999999999" target="_blank" class="contact-link">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
        </p>
        <p>
            <a href="mailto:contato@casamentoisaacmayzan.com.br" class="contact-link">
                <i class="far fa-envelope"></i> Email
            </a>
        </p>
    </div>
</div>
@endsection