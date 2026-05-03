<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Blog Tecno | Inovasi Tanpa Batas')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://unpkg.com/alpinejs@3.x.x" defer></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --accent: #0ea5e9;
            --glass-bg: rgba(255, 255, 255, 0.9);
            --glass-border: rgba(0, 0, 0, 0.08);
            --card-bg: #ffffff;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --success-bg: rgba(14, 165, 233, 0.1);
            --success-border: rgba(14, 165, 233, 0.3);
            --success-text: #0284c7;
            --bg-page: #f8fafc;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg-page);
            color: var(--text-primary);
            line-height: 1.5;
            scroll-behavior: smooth;
        }

        /* custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #e2e8f0;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--accent);
            border-radius: 12px;
        }

        /* navbar white */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            height: 72px;
            display: flex;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .navbar-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar-brand {
            font-size: 1.65rem;
            font-weight: 800;
            background: linear-gradient(135deg, #2563eb, #0ea5e9);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: -0.3px;
            text-decoration: none;
            transition: opacity 0.2s;
        }
        .navbar-brand:hover {
            opacity: 0.85;
        }

        .navbar-nav {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .navbar-nav a {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: 0.2s;
            letter-spacing: -0.2px;
        }

        .navbar-nav a:hover {
            color: var(--accent);
        }

        /* Dropdown modern */
        .dropdown {
            position: relative;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 2rem;
            left: -1rem;
            background: #ffffff;
            border-radius: 16px;
            padding: 0.6rem 0;
            min-width: 190px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            z-index: 102;
        }
        .dropdown-menu li {
            list-style: none;
        }
        .dropdown-menu li a {
            display: block;
            padding: 0.6rem 1.4rem;
            color: var(--text-secondary);
            font-weight: 500;
            transition: 0.2s;
        }
        .dropdown-menu li a:hover {
            background: var(--success-bg);
            color: var(--accent);
            padding-left: 1.8rem;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Hero Section */
        .hero {
            margin-top: 72px;
            padding: 5rem 2rem 6rem;
            background: linear-gradient(180deg, #ffffff 0%, #f1f5f9 100%);
        }
        .hero-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 0.9fr;
            gap: 3rem;
            align-items: center;
        }
        .hero-content h1 {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.2;
            color: var(--text-primary);
            margin-bottom: 1.2rem;
        }
        .hero-content p {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 90%;
        }
        .hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #2563eb, #0ea5e9);
            padding: 0.9rem 2rem;
            border-radius: 40px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: 0.25s;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
        }
        .hero-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
        }
        .hero-image {
            background: white;
            border-radius: 24px;
            padding: 1.5rem;
            border: 1px solid var(--glass-border);
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        /* container umum */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        .section {
            padding: 5rem 0 4rem;
        }
        .section-title {
            text-align: center;
            font-size: 2.3rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }
        .section-subtitle {
            text-align: center;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 3rem auto;
            font-size: 1rem;
        }

        /* feature cards */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 2rem;
        }
        .feature-card {
            background: white;
            border-radius: 24px;
            padding: 2rem 1.8rem;
            text-align: center;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            border-color: var(--accent);
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(37, 99, 235, 0.1);
        }
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(145deg, rgba(37, 99, 235, 0.1), rgba(14, 165, 233, 0.1));
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.6rem;
            font-size: 2rem;
            color: var(--accent);
        }
        .feature-card h3 {
            font-weight: 700;
            margin-bottom: 0.75rem;
            font-size: 1.4rem;
            color: var(--text-primary);
        }
        .feature-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* posts grid */
        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 2rem;
        }
        .post {
            background: white;
            border-radius: 24px;
            padding: 1.8rem;
            border: 1px solid #e2e8f0;
            transition: 0.25s;
        }
        .post:hover {
            border-color: var(--accent);
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.1);
        }
        .post h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.6rem;
            color: var(--text-primary);
        }
        .post .meta {
            color: var(--accent);
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.3px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .post-image {
            width: 100%;
            height: 200px;
            object-fit: contain;
            background: #f8f9fa;
            border-radius: 12px;
            margin-bottom: 1rem;
            padding: 1rem;
        }
        .no-posts {
            text-align: center;
            padding: 3rem;
            background: var(--card-bg);
            border-radius: 32px;
            border: 1px dashed var(--accent);
            color: var(--text-secondary);
        }

        .alert {
            padding: 1rem 1.4rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            font-weight: 500;
        }
        .alert-success {
            background: var(--success-bg);
            border-left: 4px solid var(--accent);
            color: var(--success-text);
        }

        /* footer */
        .footer {
            background: white;
            border-top: 1px solid #e2e8f0;
            padding: 3rem 2rem;
            margin-top: 3rem;
        }
        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 2rem;
        }
        .footer h4 {
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }
        .footer p, .footer li {
            color: var(--text-secondary);
            font-size: 0.85rem;
        }
        .footer ul {
            list-style: none;
        }
        .footer ul li {
            margin-bottom: 0.5rem;
        }
        .footer a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: 0.2s;
        }
        .footer a:hover {
            color: var(--accent);
        }

        /* floating buttons */
        .floating-btn {
            position: fixed;
            bottom: 2rem;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
            z-index: 1000;
            transition: 0.25s;
            text-decoration: none;
        }
        .floating-btn:hover {
            transform: scale(1.07);
        }
        .whatsapp-btn {
            right: 2rem;
            background: #25D366;
        }
        .phone-btn {
            right: 5.2rem;
            background: var(--primary);
        }
        @media (max-width: 768px) {
            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .hero-content p {
                max-width: 100%;
            }
            .navbar-nav {
                display: none;
            }
            .posts-grid {
                grid-template-columns: 1fr;
            }
            .floating-btn {
                width: 44px;
                height: 44px;
            }
            .whatsapp-btn { left: 1rem; }
            .phone-btn { left: 4rem; }
            .section-title {
                font-size: 1.8rem;
            }
        }

        /* Efek grid & teknologi */
        .bg-tech-grid {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(0,240,255,0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,240,255,0.02) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: -1;
        }
        .glow-text {
            text-shadow: 0 0 8px rgba(0,240,255,0.3);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="navbar-container">
        <a href="/posts" class="navbar-brand">Blog Tecno</a>
<ul class="navbar-nav">
    <li><a href="/posts"><i class="fas fa-home" style="margin-right: 6px;"></i> Beranda</a></li>
    <li><a href="/articles"><i class="fas fa-newspaper"></i> Artikel</a></li>
    <li class="dropdown">
        <a href="/posts"><i class="fas fa-layer-group"></i> produk
        </a>
        <ul class="dropdown-menu">
            <li><a href="/posts/web"><i class="fas fa-code"></i> Web Design</a></li>
            <li><a href="/posts/mobile"><i class="fas fa-mobile-alt"></i> Mobile App</a></li>
            <li><a href="/posts/desktop"><i class="fas fa-desktop"></i> Desktop</a></li>
        </ul>
    </li>
    @auth
        <li><a href="/dashboard"><i class="fas fa-chart-line"></i> Dashboard</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; cursor: pointer; color: var(--text-secondary); font-weight: 500; font-size: 0.95rem; font-family: inherit; letter-spacing: -0.2px; padding: 0; transition: 0.2s;"
                    onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='var(--text-secondary)'">
                    <i class="fas fa-sign-out-alt" style="margin-right: 4px;"></i> Logout ({{ Auth::user()->name }})
                </button>
            </form>
        </li>
    @else
        <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
    @endauth
</ul>
    </div>
</nav>

<main class="container" style="margin-top: 72px;">
    @if(session('success'))
        <div class="alert alert-success" style="margin-top: 1.5rem;">
            <i class="fas fa-check-circle" style="margin-right: 10px;"></i> {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <div>
            <h4>Blog Tecno</h4>
            <p>Mendorong literasi digital dan inovasi teknologi untuk Indonesia 4.0.</p>
            <p style="margin-top: 12px;">&copy; 2025 TecnoLabs</p>
        </div>
        <div>
            <h4>Jelajahi</h4>
            <ul>
                <li><a href="/posts">Beranda</a></li>
                <li><a href="/posts">Artikel</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/posts/web">Proyek Web</a></li>
            </ul>
        </div>
        <div>
            <h4>Hubungi Kami</h4>
            <ul>
                <li><i class="fas fa-envelope"></i> hello@blogtecno.tech</li>
                <li><i class="fab fa-whatsapp"></i> +62 812 3456 7890</li>
                <li><i class="fab fa-github"></i> /tecno-labs</li>
            </ul>
        </div>
        <div>
            <h4>Resource</h4>
            <ul>
                <li><a href="#">Dokumentasi API</a></li>
                <li><a href="#">Status Sistem</a></li>
                <li><a href="#">Karier</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Floating buttons -->
<a href="https://wa.me/6281234567890" class="floating-btn whatsapp-btn" title="Chat via WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>
<a href="tel:+6281234567890" class="floating-btn phone-btn" title="Call Center">
    <i class="fas fa-phone-alt"></i>
</a>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if(target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if(window.scrollY > 20) {
            navbar.style.boxShadow = '0 4px 12px rgba(0,0,0,0.08)';
        } else {
            navbar.style.boxShadow = '0 1px 3px rgba(0,0,0,0.05)';
        }
    });
</script>
</body>
</html>