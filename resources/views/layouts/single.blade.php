<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->title ?? 'Artikel' }} | Blog Tecno</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        :root {
            --primary: #2563eb; --primary-dark: #1d4ed8; --accent: #0ea5e9;
            --glass-bg: rgba(255, 255, 255, 0.9); --glass-border: rgba(0, 0, 0, 0.08);
            --card-bg: #ffffff; --text-primary: #1e293b; --text-secondary: #64748b;
            --text-muted: #94a3b8; --success-bg: rgba(14, 165, 233, 0.1);
            --success-border: rgba(14, 165, 233, 0.3); --success-text: #0284c7;
            --bg-page: #f8fafc;
        }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg-page); color: var(--text-primary); line-height: 1.5;
        }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #e2e8f0; }
        ::-webkit-scrollbar-thumb { background: var(--accent); border-radius: 12px; }
        .navbar {
            background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border); position: fixed; width: 100%; top: 0;
            z-index: 1000; height: 72px; display: flex; align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .navbar-container { max-width: 1280px; margin: 0 auto; padding: 0 2rem; display: flex; justify-content: space-between; align-items: center; width: 100%; }
        .navbar-brand { font-size: 1.65rem; font-weight: 800; background: linear-gradient(135deg, #2563eb, #0ea5e9); background-clip: text; -webkit-background-clip: text; color: transparent; text-decoration: none; }
        .navbar-nav { display: flex; gap: 2rem; list-style: none; }
        .navbar-nav a { color: var(--text-secondary); text-decoration: none; font-weight: 500; font-size: 0.95rem; transition: 0.2s; }
        .navbar-nav a:hover { color: var(--accent); }
        .hero { margin-top: 72px; padding: 5rem 2rem 4rem; background: linear-gradient(180deg, #ffffff 0%, #f1f5f9 100%); text-align: center; }
        .hero-container { max-width: 1280px; margin: 0 auto; }
        .hero h1 { font-size: 2.2rem; font-weight: 800; color: var(--text-primary); margin-bottom: 0.75rem; }
        .hero p { color: var(--text-secondary); font-size: 1rem; max-width: 600px; margin: 0 auto; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 2rem; }
        .section { padding: 2rem 0 4rem; }
        .post { background: white; border-radius: 24px; padding: 2.5rem; border: 1px solid #e2e8f0; margin-top: 2rem; }
        .post h1 { font-size: 2.2rem; font-weight: 800; color: var(--text-primary); margin-bottom: 1rem; line-height: 1.3; }
        .post .meta { color: var(--accent); font-size: 0.85rem; font-weight: 500; margin-bottom: 2rem; display: flex; align-items: center; gap: 8px; justify-content: center; }
        .post-image { width: 100%; height: auto; border-radius: 12px; margin-bottom: 1.5rem; max-height: 450px; object-fit: cover; }
        .content { font-size: 1.05rem; line-height: 1.8; color: var(--text-secondary); }
        .alert { padding: 1rem 1.4rem; border-radius: 12px; margin-bottom: 2rem; font-weight: 500; }
        .alert-success { background: var(--success-bg); border-left: 4px solid var(--accent); color: var(--success-text); }
        .footer { background: white; border-top: 1px solid #e2e8f0; padding: 3rem 2rem; margin-top: 3rem; }
        .footer-container { max-width: 1280px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 2rem; }
        .footer h4 { font-weight: 700; margin-bottom: 1rem; color: var(--text-primary); }
        .footer p, .footer li { color: var(--text-secondary); font-size: 0.85rem; }
        .footer ul { list-style: none; }
        .footer ul li { margin-bottom: 0.5rem; }
        .footer a { color: var(--text-secondary); text-decoration: none; transition: 0.2s; }
        .footer a:hover { color: var(--accent); }
        @media (max-width: 768px) {
            .post { padding: 1.5rem; }
            .post h1 { font-size: 1.8rem; }
            .hero h1 { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="navbar-container">
        <a href="/posts" class="navbar-brand">Blog Tecno</a>
        <ul class="navbar-nav">
            <li><a href="/posts"><i class="fas fa-home" style="margin-right: 6px;"></i> Beranda</a></li>
            <li><a href="/posts"><i class="fas fa-newspaper"></i> Artikel</a></li>
            <li><a href="/dashboard"><i class="fas fa-chart-line"></i> Dashboard</a></li>
        </ul>
    </div>
</nav>

<section class="hero">
    <div class="hero-container">
        <h1>{{ $post->title }}</h1>
        <p>Baca artikel lengkap dari tim peneliti dan praktisi teknologi kami.</p>
    </div>
</section>

<main class="container">
    @yield('content')
</main>

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
    </div>
</footer>

<a href="https://wa.me/" class="floating-btn whatsapp-btn" title="Chat via WhatsApp" style="position: fixed; bottom: 2rem; right: 2rem; width: 52px; height: 52px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; box-shadow: 0 4px 16px rgba(0,0,0,0.15); z-index: 1000; text-decoration: none;">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>
