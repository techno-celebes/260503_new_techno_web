@extends('layouts.main')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        <i class="fas fa-check-circle" style="margin-right: 10px;"></i> {{ session('success') }}
    </div>
@endif

<!-- Artikel Only Section -->
<section class="section" id="articles">
    <h2 class="section-title"><i class="fas fa-bolt" style="margin-right: 10px; color: var(--accent);"></i> Artikel Terbaru</h2>
    <p class="section-subtitle">Update terbaru dari tim peneliti dan praktisi teknologi</p>
    <div class="posts-grid">
        @forelse($posts as $post)
            <article class="post">
                @if($post->image)
                    <div style="background: #f8f9fa; border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="post-image" style="background: transparent; padding: 0;">
                    </div>
                @endif
                <h3>{{ $post->title }}</h3>
                <div class="meta">
                    <i class="fas fa-user"></i> {{ $post->user->name ?? 'Admin' }} 
                    <span>•</span> 
                    <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d M Y, H:i') }}
                </div>
                <p class="content">{{ $post->content }}</p>
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