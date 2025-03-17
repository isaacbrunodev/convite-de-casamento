<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="header-container">
                <a class="navbar-brand" href="{{ url('/') }}">Nosso Casamento</a>
                <button class="navbar-toggler" type="button" wire:click="toggleMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse {{ $isOpen ? 'show' : 'collapse' }}" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" 
                               href="{{ url('/') }}"
                               wire:click="closeMenu">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('confirmar.presenca') ? 'active' : '' }}" 
                               href="{{ route('confirmar.presenca') }}"
                               wire:click="closeMenu">Confirmar Presença</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('orientacoes') ? 'active' : '' }}" 
                               href="{{ route('orientacoes') }}"
                               wire:click="closeMenu">Orientações</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
