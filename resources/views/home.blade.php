@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content fade-in">
                <h1 class="display-4 fw-bold mb-4">Merhaba, Ben Abdullah Gürkan Levent</h1>
                <p class="lead mb-4">Junior Software Developer & Satış Takım Lideri</p>
                <p class="mb-5">Modern web teknolojileri ve kullanıcı deneyimi tasarımı konularında kendimi geliştiriyorum. Projelerimde en güncel teknolojileri kullanarak, kullanıcı dostu ve performanslı web uygulamaları geliştirmeyi hedefliyorum.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary">İletişime Geç</a>
                    <a href="{{ route('projects') }}" class="btn btn-outline-dark">Projelerimi Gör</a>
                </div>
            </div>
            <div class="col-lg-6 text-center fade-in">
                <div class="profile-image-wrapper">
                    <img src="{{ asset('images/resim.jpg') }}" 
                         alt="Abdullah Gürkan Levent" 
                         class="img-fluid rounded-circle shadow-lg profile-image"
                         style="width: 300px; height: 300px; object-fit: cover; object-position: center 0%; border: 5px solid white;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Yetenekler Section -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center section-header mb-5">Yeteneklerim</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 skill-card slide-up">
                    <div class="card-body text-center">
                        <i class="fab fa-php skill-icon"></i>
                        <h3 class="card-title h4">Backend Geliştirme</h3>
                        <p class="card-text">PHP, Laravel Framework ile API geliştirme, veritabanı yönetimi ve CRUD işlemleri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 skill-card slide-up" style="animation-delay: 0.2s">
                    <div class="card-body text-center">
                        <i class="fas fa-database skill-icon"></i>
                        <h3 class="card-title h4">Veritabanı Yönetimi</h3>
                        <p class="card-text">MySQL veritabanı tasarımı, ilişkisel veritabanı yönetimi ve optimizasyon.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 skill-card slide-up" style="animation-delay: 0.4s">
                    <div class="card-body text-center">
                        <i class="fas fa-code-branch skill-icon"></i>
                        <h3 class="card-title h4">API Geliştirme</h3>
                        <p class="card-text">RESTful API tasarımı, endpoint yönetimi ve API dokümantasyonu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 skill-card slide-up" style="animation-delay: 0.6s">
                    <div class="card-body text-center">
                        <i class="fab fa-golang skill-icon"></i>
                        <h3 class="card-title h4">Go Programlama</h3>
                        <p class="card-text">Go ile yüksek performanslı backend servisleri ve mikroservis mimarileri geliştirme.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Son Projeler Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-header mb-5">Son Projelerim</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card project-card fade-in">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&h=600&q=80" 
                         class="card-img-top" 
                         alt="Sipariş Yönetim Sistemi"
                         style="height: 300px; object-fit: cover;">
                    <div class="project-overlay">
                        <div class="project-content">
                            <h5 class="card-title">Sipariş Yönetim Sistemi</h5>
                            <p class="card-text">Laravel tabanlı bir Sipariş Yönetim Sistemi. Müşteri, ürün ve sipariş yönetimi için API uç noktaları sağlar.</p>
                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-2">Laravel</span>
                                <span class="badge bg-light text-dark me-2">MySQL</span>
                                <span class="badge bg-light text-dark">RESTful API</span>
                            </div>
                            <a href="https://github.com/AGURKANLEVENT/order-system" class="btn btn-light" target="_blank">
                                <i class="fab fa-github me-2"></i>Projeyi İncele
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card project-card fade-in" style="animation-delay: 0.2s">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&h=600&q=80" 
                         class="card-img-top" 
                         alt="Sipariş Sistemi Dashboard"
                         style="height: 300px; object-fit: cover;">
                    <div class="project-overlay">
                        <div class="project-content">
                            <h5 class="card-title">Order System Dashboard</h5>
                            <p class="card-text">Sipariş yönetim sisteminin yönetici paneli uygulaması. Modern ve kullanıcı dostu arayüz.</p>
                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-2">Laravel</span>
                                <span class="badge bg-light text-dark me-2">Bootstrap</span>
                                <span class="badge bg-light text-dark">MySQL</span>
                            </div>
                            <a href="https://github.com/AGURKANLEVENT/order-system_d" class="btn btn-light" target="_blank">
                                <i class="fab fa-github me-2"></i>Projeyi İncele
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center section-header mb-5">Son Yazılarım</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card blog-card slide-up">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&h=600&q=80" 
                         class="card-img-top" 
                         alt="Laravel API Geliştirme">
                    <div class="card-body">
                        <div class="blog-meta mb-2">
                            <i class="far fa-calendar me-2"></i>15 Mart 2024
                        </div>
                        <h5 class="card-title">Laravel ile RESTful API Geliştirme</h5>
                        <p class="card-text">Laravel framework kullanarak modern ve güvenli API'ler nasıl geliştirilir? Temel kavramlar ve best practice'ler.</p>
                        <a href="#" class="btn btn-outline-primary">Devamını Oku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-card slide-up" style="animation-delay: 0.2s">
                    <img src="https://images.unsplash.com/photo-1633412802994-5c058f151b66?auto=format&fit=crop&w=800&h=600&q=80" 
                         class="card-img-top" 
                         alt="Veritabanı Optimizasyonu">
                    <div class="card-body">
                        <div class="blog-meta mb-2">
                            <i class="far fa-calendar me-2"></i>10 Mart 2024
                        </div>
                        <h5 class="card-title">MySQL Veritabanı Optimizasyonu</h5>
                        <p class="card-text">Veritabanı performansını artırmak için kullanabileceğiniz yöntemler ve optimizasyon teknikleri.</p>
                        <a href="#" class="btn btn-outline-primary">Devamını Oku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-card slide-up" style="animation-delay: 0.4s">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&h=600&q=80" 
                         class="card-img-top" 
                         alt="API Güvenliği">
                    <div class="card-body">
                        <div class="blog-meta mb-2">
                            <i class="far fa-calendar me-2"></i>5 Mart 2024
                        </div>
                        <h5 class="card-title">API Güvenliği İpuçları</h5>
                        <p class="card-text">API'lerinizi güvende tutmak için uygulamanız gereken en iyi güvenlik pratikleri ve önlemleri.</p>
                        <a href="#" class="btn btn-outline-primary">Devamını Oku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- İletişim CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">Bir Projeniz mi Var?</h2>
        <p class="lead mb-4">Beraber çalışmak için benimle iletişime geçin.</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Hemen İletişime Geç</a>
    </div>
</section>
@endsection