@extends('layouts.main')

@section('title', $post->title . ' | Blog Tecno')

@push('styles')
@endpush

@section('content')
<style>
    #post-detail .post-detail {
        max-width: 860px;
        margin: 0 auto;
        background: #fff;
        border-radius: 24px;
        padding: 2.5rem;
        border: 1px solid #e2e8f0;
    }
    #post-detail .post-hero-image {
        background: #f8f9fa;
        border-radius: 16px;
        padding: 1rem;
        margin-bottom: 1.8rem;
    }
    #post-detail .post-hero-image img {
        display: block;
        width: 100%;
        max-height: 420px;
        object-fit: contain;
        border-radius: 12px;
        border: 0;
    }
    #post-detail .post-title {
        font-size: 2.2rem;
        font-weight: 800;
        line-height: 1.25;
        color: var(--text-primary);
        margin-bottom: 1rem;
        letter-spacing: -0.5px;
    }
    #post-detail .post-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 1.2rem;
        margin-bottom: 1.8rem;
        padding-bottom: 1.2rem;
        border-bottom: 1px solid #e2e8f0;
    }
    #post-detail .meta-item {
        color: var(--text-secondary);
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    #post-detail .meta-item i { color: var(--accent); }
    #post-detail .post-content {
        color: var(--text-primary);
        font-size: 1.02rem;
        line-height: 1.75;
        margin-bottom: 2.5rem;
    }
    #post-detail .post-navigation {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        margin-bottom: 3rem;
    }
    #post-detail .nav-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 1rem 1.2rem;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        text-decoration: none;
        color: var(--text-primary);
        transition: 0.2s;
    }
    #post-detail .nav-link:hover {
        border-color: var(--accent);
        background: var(--success-bg);
    }
    #post-detail .nav-link.next {
        justify-content: flex-end;
        text-align: right;
        grid-column: 2;
    }
    #post-detail .nav-link .nav-label {
        display: block;
        font-size: 0.72rem;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 2px;
    }
    #post-detail .nav-link .nav-title {
        display: block;
        font-weight: 600;
        font-size: 0.92rem;
    }
    #post-detail .related-posts h3 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: var(--text-primary);
    }
    #post-detail .related-posts .post h4 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--text-primary);
    }
    #post-detail .read-more {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 0.8rem;
        color: var(--accent);
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
    }
    #post-detail .read-more:hover { transform: translateX(2px); }

    @media (max-width: 768px) {
        #post-detail .post-detail { padding: 1.5rem; }
        #post-detail .post-title { font-size: 1.6rem; }
        #post-detail .post-navigation { grid-template-columns: 1fr; }
        #post-detail .nav-link.next { grid-column: 1; justify-content: flex-start; text-align: left; }
    }
</style>

<!-- Single Post Detail Section -->
<section class="section" id="post-detail">
    <div class="post-detail">
        @if($post->image)
            <div class="post-hero-image">
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}">
            </div>
        @endif
            
            <h1 class="post-title">{{ $post->title }}</h1>
            
            <div class="post-meta">
                <div class="meta-item">
                    <i class="fas fa-user"></i> {{ $post->user->name ?? 'Admin' }}
                </div>
                <div class="meta-item">
                    <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d M Y, H:i') }}
                </div>
            </div>
            
            <div class="post-content">
                {!! nl2br(e($post->content)) !!}
            </div>
            
            <!-- Navigation -->
            <div class="post-navigation">
                @if($prevPost)
                    <a href="{{ route('posts.show', $prevPost->id) }}" class="nav-link prev">
                        <i class="fas fa-arrow-left"></i>
                        <div>
                            <span class="nav-label">Artikel Sebelumnya</span>
                            <span class="nav-title">{{ $prevPost->title }}</span>
                        </div>
                    </a>
                @endif
                
                @if($nextPost)
                    <a href="{{ route('posts.show', $nextPost->id) }}" class="nav-link next">
                        <div>
                            <span class="nav-label">Artikel Berikutnya</span>
                            <span class="nav-title">{{ $nextPost->title }}</span>
                        </div>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                @endif
            </div>
            
        <!-- Related Posts -->
        @if($relatedPosts->isNotEmpty())
            <div class="related-posts">
                <h3><i class="fas fa-bolt" style="margin-right: 8px; color: var(--accent);"></i>Artikel Terkait</h3>
                <div class="posts-grid">
                    @foreach($relatedPosts as $relatedPost)
                        <article class="post">
                            @if($relatedPost->image)
                                <div style="background: #f8f9fa; border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                                    <img src="{{ asset('storage/'.$relatedPost->image) }}" alt="{{ $relatedPost->title }}" class="post-image" style="background: transparent; padding: 0; margin-bottom: 0;">
                                </div>
                            @endif
                            <h4>{{ $relatedPost->title }}</h4>
                            <div class="meta">
                                <i class="far fa-calendar-alt"></i> {{ $relatedPost->created_at->format('d M Y') }}
                            </div>
                            <p class="content">{{ Str::limit($relatedPost->content, 100) }}</p>
                            <a href="{{ route('posts.show', $relatedPost->id) }}" class="read-more">
                                Baca selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
@endsection