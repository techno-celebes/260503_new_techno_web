@extends('layouts.main')

@section('title', 'Blog Tecno | Inovasi Tanpa Batas')

@section('content')
<!-- Hero Section -->
<section class="hero" style="margin-left: -2rem; margin-right: -2rem;">
    <div class="hero-container">
        <div class="hero-content">
            <h1>Inovasi Tanpa Batas</h1>
            <p>Jelajahi wawasan teknologi mutakhir, AI, cloud, dan programming. Dari expert untuk para builder masa depan.</p>
            <a href="#posts" class="hero-btn">Jelajahi Artikel <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('photos/Web_Development.png') }}" alt="Web Development" style="max-width: 100%; height: auto; border-radius: 12px;">
        </div>
    </div>
</section>

<!-- Layanan Kami Section (teknologi) -->
<section class="section" id="services">
    <h2 class="section-title">Ekosistem Digital</h2>
    <p class="section-subtitle">Teknologi terkini yang kami hadirkan untuk mengakselerasi karyamu</p>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon"><i class="fab fa-android"></i><i class="fab fa-apple" style="margin-left: 6px;"></i></div>
            <h3>Mobile First</h3>
            <p>Flutter, React Native, SwiftUI — Bangun aplikasi cross-platform dengan performa tinggi.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-cloud-upload-alt"></i></div>
            <h3>Cloud & DevOps</h3>
            <p>Strategi deployment modern, CI/CD, dan arsitektur serverless untuk skalabilitas.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-chart-simple"></i></div>
            <h3>AI & Otomasi</h3>
            <p>Integrasi machine learning dan otomasi pintar untuk efisiensi tanpa batas.</p>
        </div>
    </div>
</section>

<!-- Postingan Terbaru (dynamic) -->
<section class="section" id="posts">
    <h2 class="section-title"><i class="fas fa-bolt" style="margin-right: 10px; color: var(--accent);"></i> Artikel Terbaru</h2>
    <p class="section-subtitle">Update terbaru dari tim peneliti dan praktisi teknologi</p>
    <div class="posts-grid">
        @forelse($posts as $post)
            <article class="post">
                @if($post->image)
                    <div style="background: #f8f9fa; border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="post-image">
                    </div>
                @endif
                <h3>{{ $post->title }}</h3>
                <div class="meta">
                    <i class="fas fa-user"></i> {{ $post->user->name ?? 'Admin' }}
                    <span>•</span>
                    <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d M Y, H:i') }}
                </div>
                <p class="content">{{ Str::limit($post->content, 160) }}</p>
                <div style="margin-top: 1.2rem;">
                    <a href="{{ route('posts.show', $post->id) }}" style="font-size: 0.85rem; color: var(--accent); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 4px; transition: all 0.2s;" onmouseover="this.style.transform='translateX(4px)'" onmouseout="this.style.transform='translateX(0)'">
                        baca selengkapnya <i class="fas fa-arrow-right" style="font-size: 0.7rem;"></i>
                    </a>
                </div>
            </article>
        @empty
            <div class="no-posts">
                <i class="fas fa-inbox" style="font-size: 2rem; margin-bottom: 1rem; display: inline-block; color: var(--text-muted);"></i>
                <p style="font-weight: 500;">Belum ada artikel.</p>
                <p style="font-size: 0.85rem;">Jadilah pelopor dengan berbagi wawasan teknologi!</p>
            </div>
        @endforelse
    </div>
</section>
@endsection
