@extends('layouts.app')

@section('title', 'Projeler')

@section('content')
<div class="container py-5">
    <div class="section-title text-center">
        <span class="subtitle">Portfolio</span>
        <h2 class="title">Projelerim</h2>
    </div>

    <div class="row g-4">
        @foreach($projects as $project)
        <div class="col-md-6">
            <div class="card project-card fade-in h-100">
                <img src="{{ $project['image'] }}" 
                     class="card-img-top" 
                     alt="{{ $project['title'] }}"
                     style="height: 300px; object-fit: cover;">
                <div class="project-overlay">
                    <div class="project-content">
                        <h5 class="card-title mb-3">{{ $project['title'] }}</h5>
                        <p class="card-text mb-4">{{ $project['description'] }}</p>
                        
                        <div class="tech-badges mb-4">
                            <h6 class="text-light mb-3">Kullanılan Teknolojiler:</h6>
                            @foreach($project['technologies'] as $tech)
                            <span class="badge bg-light text-dark me-2 mb-2">{{ $tech }}</span>
                            @endforeach
                        </div>
                        
                        <div class="project-button">
                            <a href="{{ $project['link'] }}" class="btn btn-light" target="_blank">
                                <i class="fab fa-github me-2"></i>Projeyi İncele
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-5 pt-4">
        <div class="section-title">
            <span class="subtitle">Daha Fazlası</span>
            <h3 class="title h4 mb-4">GitHub'da Tüm Projelerimi İnceleyin</h3>
        </div>
        <a href="https://github.com/AGURKANLEVENT" class="btn btn-primary btn-lg" target="_blank">
            <i class="fab fa-github me-2"></i>GitHub Profilim
            <span class="btn-hover-effect"></span>
        </a>
    </div>
</div>
@endsection