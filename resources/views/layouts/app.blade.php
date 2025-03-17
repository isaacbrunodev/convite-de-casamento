@php
    use Illuminate\Support\Facades\Storage;
@endphp
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosso Casamento - @yield('title')</title>
    
    <!-- Preload das fontes essenciais -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap">
    
    <!-- CSS essencial primeiro -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
    
    <!-- CSS não essencial depois -->
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" media="print" onload="this.media='all'">
    
    <style>
        :root {
            --olive: #BAB86C;
            --olive-dark: #9a9759;
            --terracotta: #e2725b;
            --terracotta-dark: #c85e47;
            --background: #faf9f6;
        }

        body {
            font-family: 'Playfair Display', serif;
            background-color: var(--background);
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(186, 184, 108, 0.2);
            padding: 0.8rem 0;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            position: relative;
        }

        .navbar-brand {
            font-size: 1.8rem;
            color: var(--terracotta);
            font-weight: 600;
            transition: color 0.3s ease;
            margin-left: 1rem;
            white-space: nowrap;
        }

        .navbar-collapse {
            flex-grow: 0;
        }

        .banner-section {
            width: 100%;
            height: 400px;
            overflow: hidden;
            position: relative;
            margin-bottom: 3rem;
        }

        .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .nav-link {
            font-size: 1.4rem;
            color: var(--olive) !important;
            transition: all 0.3s ease;
            margin: 0 0.8rem;
            padding: 0.5rem 1.2rem !important;
            border-radius: 4px;
        }

        .nav-link:hover {
            color: var(--olive-dark) !important;
            background-color: rgba(186, 184, 108, 0.1);
        }

        .nav-link.active {
            color: var(--terracotta) !important;
            font-weight: 600;
        }

        .container {
            padding: 2rem 1rem;
        }

        .page-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--terracotta);
            font-size: 2.5rem;
        }

        .footer {
            background-color: white;
            color: var(--olive);
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 8px rgba(186, 184, 108, 0.2);
        }

        .navbar-toggler {
            border-color: var(--olive);
            padding: 0.4rem 0.6rem;
            margin-right: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(186, 184, 108, 0.25);
        }

        .navbar-nav {
            margin-left: auto;
        }

        /* Tablets e dispositivos médios */
        @media (max-width: 991.98px) {
            .navbar {
                padding: 0.6rem 0;
            }

            .navbar-brand {
                font-size: 1.5rem;
                margin-left: 0.5rem;
            }

            .navbar-collapse {
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                background-color: white;
                padding: 1rem;
                border-radius: 0 0 8px 8px;
                box-shadow: 0 4px 6px rgba(186, 184, 108, 0.1);
                z-index: 1000;
            }

            .nav-link {
                font-size: 1.2rem;
                padding: 0.8rem 1rem !important;
                margin: 0.2rem 0;
                text-align: center;
            }

            .banner-section {
                height: 250px;
            }
        }

        /* Smartphones */
        @media (max-width: 575.98px) {
            .navbar {
                padding: 0.5rem 0;
            }

            .container {
                padding: 0.8rem;
            }

            .navbar-brand {
                font-size: 1.3rem;
                margin-left: 0.3rem;
            }

            .navbar-toggler {
                padding: 0.3rem 0.5rem;
            }

            .nav-link {
                font-size: 1.1rem;
                padding: 0.7rem !important;
                margin: 0.1rem 0;
            }

            .banner-section {
                height: 180px;
                margin-bottom: 1.5rem;
            }

            .page-title {
                font-size: 1.8rem;
                margin-bottom: 1.2rem;
            }

            .footer {
                position: relative;
                padding: 0.6rem 0;
                font-size: 0.9rem;
            }

            main.container {
                margin-bottom: 3rem !important;
            }
        }

        /* Ajustes específicos para Galaxy S8+ e dispositivos similares */
        @media (max-width: 740px) and (min-width: 360px) {
            .navbar-brand {
                font-size: 1.4rem;
            }

            .banner-section {
                height: 200px;
            }

            .nav-link {
                font-size: 1.15rem;
                padding: 0.75rem 1rem !important;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <livewire:nav-menu />

    <div class="banner-section">
        @php
            $imagePath = '/images/couple.jpg';
            error_log("URL da imagem: " . $imagePath);
        @endphp
        <img 
            src="{{ $imagePath }}"
            alt="Isaac & Mayzan" 
            class="banner-image"
            onerror="this.src='https://placehold.co/1920x500/BAB86C/ffffff?text=I%26M'; console.log('Erro ao carregar imagem: ' + this.src);"
        >
    </div>

    <main class="container mb-5">
        @yield('content')
    </main>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} - Nosso Casamento</p>
        </div>
    </footer>

    <!-- Scripts não essenciais com defer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    @livewireScripts
    @yield('scripts')
</body>
</html> 