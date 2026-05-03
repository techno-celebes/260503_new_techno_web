<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Artikel - Blog Tecno</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        :root {
            --primary: #7165ed;
            --primary-light: #958cf9;
            --primary-dark: #5b4cdb;
            --bg-light: #f8f9fa;
            --danger: #dc3545;
            --danger-dark: #c82333;
        }
        
        body {
            font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--bg-light);
            color: #333;
            line-height: 1.6;
        }
        
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            height: 70px;
            display: flex;
            align-items: center;
        }
        
        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }
        
        .navbar-nav {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .navbar-nav a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .navbar-nav a:hover {
            color: var(--primary);
        }
        
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            padding: 120px 2rem 60px;
        }
        
        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .hero h1 {
            color: white;
            font-size: 2rem;
            font-weight: 700;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .section {
            padding: 2rem 0;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }
        
        .card h3 {
            color: #333;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .form-group {
            margin-bottom: 1rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #333;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
        }
        
         .form-group textarea {
             resize: vertical;
             min-height: 150px;
         }
         
         .post-image-container {
             background: #f8f9fa;
             border-radius: 12px;
             padding: 1rem;
             margin-top: 0.5rem;
             display: inline-block;
         }
         
         .post-image {
             max-width: 300px;
             max-height: 200px;
             object-fit: contain;
             border-radius: 8px;
             display: block;
         }
         
         .btn {
            padding: 1rem 2rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
        }
        
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        
        .current-image {
            margin-top: 0.5rem;
            color: #666;
            font-size: 0.9rem;
        }
        
        .current-image img {
            display: block;
            margin-top: 0.5rem;
            max-width: 200px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/posts" class="navbar-brand">Blog Tecno</a>
            <ul class="navbar-nav">
                <li><a href="/posts">Artikel</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><span class="user-info">Admin</span></li>
            </ul>
        </div>
    </nav>
    
    <section class="hero">
        <div class="hero-container">
            <h1>Edit Artikel</h1>
        </div>
    </section>
    
    <main class="container">
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <section class="section">
            <div class="card">
                <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Judul Artikel</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Artikel</label>
                        <input type="file" name="image" id="image" accept="image/*">
                         @if($post->image)
                             <div class="post-image-container">
                                 <p style="margin-bottom: 0.5rem; color: #666; font-size: 0.9rem;">Gambar saat ini:</p>
                                 <img src="{{ asset('storage/'.$post->image) }}" alt="Current image" class="post-image">
                             </div>
                         @endif
                    </div>
                    <div class="form-group">
                        <label for="content">Isi Artikel</label>
                        <textarea name="content" id="content" required>{{ old('content', $post->content) }}</textarea>
                    </div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
