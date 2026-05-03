<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Blog Tecno</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        
        .section-title {
            text-align: center;
            font-size: 1.75rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1.5rem;
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
        
        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
         .btn-primary:hover {
             background: var(--primary-dark);
         }
         
         .btn {
             padding: 0.75rem 1.5rem;
             border-radius: 8px;
             font-size: 0.95rem;
             font-weight: 500;
             cursor: pointer;
             transition: all 0.3s;
             text-decoration: none;
             border: none;
             display: inline-flex;
             align-items: center;
             gap: 0.5rem;
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
             flex-wrap: wrap;
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
          
          .post-image {
              width: 100%;
              height: 200px;
              object-fit: contain;
              background: #f8f9fa;
              border-radius: 12px;
          }
         
         .alert-success {
             background: #d4edda;
             color: #155724;
             border: 1px solid #c3e6cb;
             padding: 1rem;
             border-radius: 8px;
             margin-bottom: 1rem;
         }
        
        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .post {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        
        .post:hover {
            transform: translateY(-3px);
        }
        
        .post h3 {
            color: #333;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .post .meta {
            color: #888;
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }
        
        .post .content {
            color: #555;
            line-height: 1.7;
        }
        
        .no-posts {
            text-align: center;
            color: #888;
            padding: 3rem;
            background: white;
            border-radius: 12px;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        
        .user-info {
            color: rgba(255,255,255,0.9);
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/">Blog Tecno</a>
            <ul class="navbar-nav">
                <li><a href="/posts">Artikel</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><span class="user-info">{{ Auth::check() ? Auth::user()->name : 'Admin' }}</span></li>
            </ul>
        </div>
    </nav>
    
    <section class="hero">
        <div class="hero-container">
            <h1>DashboardAdmin</h1>
        </div>
    </section>
    
    <main class="container">
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <section class="section">
            <h2 class="section-title">Buat Artikel Baru</h2>
            <div class="card">
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" style="margin-top: 1rem;">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul Artikel</label>
                        <input type="text" name="title" id="title" placeholder="Masukkan judul artikel" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Artikel</label>
                        <input type="file" name="image" id="image" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="content">Isi Artikel</label>
                        <textarea name="content" id="content" placeholder="Masukkan isi artikel" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary">Publikasikan</button>
                </form>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Artikel yang Sudah Diterbitkan</h2>
            <div class="posts-grid">
                @forelse($posts as $post)
                     <article class="post">
                      @if($post->image)
                          <div style="background: #f8f9fa; border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                              <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="post-image" style="background: transparent; padding: 0;">
                          </div>
                      @endif
                         <h3>{{ $post->title }}</h3>
                        <p class="meta">{{ $post->user->name ?? 'Admin' }} - {{ $post->created_at->format('d M Y, H:i') }}</p>
                         <p class="content">{{ $post->content }}</p>
                         <div class="btn-group" style="margin-top: 1rem;">
                             <a href="{{ route('posts.edit', $post) }}" class="btn" style="background: var(--primary); color: white; padding: 0.5rem 1rem; font-size: 0.9rem; border-radius: 6px; text-decoration: none;">
                                 <i class="fas fa-edit"></i> Edit
                             </a>
                             <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline;" onsubmit="return confirm('Hapus artikel ini?');">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn" style="background: var(--danger); color: white; padding: 0.5rem 1rem; font-size: 0.9rem; border-radius: 6px; border: none; cursor: pointer;">
                                     <i class="fas fa-trash"></i> Hapus
                                 </button>
                             </form>
                         </div>
                    </article>
                @empty
                    <div class="no-posts" style="grid-column: 1 / -1;">
                        <p>Belum ada artikel.</p>
                    </div>
                 @endforelse
            </div>
        </section>
    </main>
</body>
</html>