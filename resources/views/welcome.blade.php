@extends('layouts.app')

@section('title', 'Bem-vindos')

@section('styles')
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" as="style">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
<style>
    .welcome-section {
        text-align: center;
        padding: 4rem 2rem;
        background-color: var(--background);
        border-radius: 15px;
        margin: 2rem auto;
        max-width: 1200px;
        box-shadow: 0 4px 12px rgba(186, 184, 108, 0.15);
    }

    /* Carregamento lazy do background */
    @media (min-width: 768px) {
        .welcome-section {
            background: linear-gradient(rgba(255,255,255,.95), rgba(255,255,255,.95)), url('/images/background.jpg');
            background-size: cover;
            background-position: center;
        }
    }
    .names {
        font-family: 'Great Vibes', cursive;
        font-size: 5rem;
        color: var(--terracotta);
        margin-bottom: 1.5rem;
        font-weight: 400;
        text-shadow: 2px 2px 4px rgba(226, 114, 91, 0.1);
        letter-spacing: 2px;
        line-height: 1.2;
        position: relative;
        display: inline-block;
    }
    .names::after {
        content: '';
        display: block;
        width: 100px;
        height: 2px;
        background: var(--olive);
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0.6;
    }
    .names::before {
        content: '';
        display: block;
        width: 100px;
        height: 2px;
        background: var(--olive);
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0.6;
    }
    .date {
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        color: var(--olive);
        margin: 2.5rem 0;
        font-weight: 400;
        letter-spacing: 1px;
    }
    .welcome-text {
        font-size: 1.3rem;
        color: #495057;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.8;
    }
    .action-buttons {
        margin-top: 3rem;
    }
    .btn-custom {
        padding: 1rem 2.5rem;
        margin: 0.5rem;
        border-radius: 30px;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .btn-primary {
        background-color: var(--terracotta);
        border-color: var(--terracotta);
        color: white;
    }
    .btn-primary:hover {
        background-color: var(--terracotta-dark);
        border-color: var(--terracotta-dark);
        transform: translateY(-2px);
    }
    .btn-outline-dark {
        border-color: var(--olive);
        color: var(--olive);
    }
    .btn-outline-dark:hover {
        background-color: var(--olive);
        border-color: var(--olive);
        color: white;
        transform: translateY(-2px);
    }
    .address {
        font-size: 1.3rem;
        color: #495057;
        margin: 3rem auto;
        max-width: 800px;
        padding: 2rem;
        border-radius: 10px;
        background-color: rgba(186, 184, 108, 0.1);
    }
    .map-link {
        display: inline-block;
        margin-top: 1.5rem;
        color: var(--olive);
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        border: 2px solid var(--olive);
    }
    .map-link:hover {
        color: white;
        background-color: var(--olive);
    }
    .map-icon {
        font-size: 1.5rem;
        margin-right: 0.5rem;
        vertical-align: middle;
    }
</style>
<!-- Carregamento assíncrono dos ícones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" media="print" onload="this.media='all'">
@endsection

@section('content')
<div class="welcome-section">
    <div class="names">Isaac & Mayzan</div>
    <div class="date">26 de Abril de 2025 às 18:30</div>
    <div class="welcome-text">
        <p>Com muita alegria, convidamos você para celebrar conosco este sagrado momento, unindo nossas vidas diante de Deus.</p>
        <p>Sua presença tornará este dia ainda mais feliz e memorável.</p>
    </div>
    <div class="address">
        Paróquia São Pio X<br>
        Av. Visc. de Maracaju, 196<br>
        Bairro Dezoito do Forte - Aracaju - SE<br>
        <a href="https://g.co/kgs/QsR4z5L" target="_blank" class="map-link">
            <i class="fas fa-map-marker-alt map-icon"></i>
            Ver no Google Maps
        </a>
    </div>
    <div class="action-buttons">
        <a href="{{ route('confirmar.presenca') }}" class="btn btn-primary btn-custom">Confirmar Presença</a>
        <a href="{{ route('orientacoes') }}" class="btn btn-outline-dark btn-custom">Informações</a>
    </div>
</div>
@endsection
