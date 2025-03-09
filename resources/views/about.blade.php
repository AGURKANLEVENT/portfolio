@extends('layouts.app')

@section('title', 'Hakkımda')

@section('content')
<div class="about-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 mb-4">
                <div class="about-image-wrapper">
                    <img src="{{ asset('images/resim.jpg') }}" 
                         alt="Profil Fotoğrafı" 
                         class="img-fluid about-profile-image"
                         style="width: 300px; height: 300px; object-fit: cover; object-position: center 0%; border-radius: 50%; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);">
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="display-4 fw-bold text-gradient mb-3">Hakkımda</h1>
                <div class="typed-container mb-4">
                    <span class="lead fw-semibold">Junior Software Developer & Satış Takım Lideri</span>
                </div>
                <p class="about-text">Modern web teknolojileri ve kullanıcı deneyimi tasarımı konularında kendimi geliştiriyorum. Projelerimde en güncel teknolojileri kullanarak, kullanıcı dostu ve performanslı web uygulamaları geliştirmeyi hedefliyorum.</p>
                <div class="social-links mt-4">
                    <a href="https://github.com/AGURKANLEVENT" target="_blank" class="social-link">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/abdullah-gürkan-levent-" target="_blank" class="social-link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mb-5">
            <div class="section-title fade-up">
                <span class="subtitle">Eğitim Geçmişi</span>
                <h2 class="title">Eğitim</h2>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content fade-up">
                        <h5>Bilgisayar Programcılığı</h5>
                        <p class="text-muted">Erzurum Atatürk Üniversitesi</p>
                        <span class="timeline-date">2022 - Devam Ediyor</span>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content fade-up" style="animation-delay: 0.2s">
                        <h5>Dış Ticaret</h5>
                        <p class="text-muted">Eskişehir Anadolu Üniversitesi</p>
                        <span class="timeline-date">2020 - Mezun</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-5">
            <div class="section-title fade-up" style="animation-delay: 0.2s">
                <span class="subtitle">Teknoloji Yığınım</span>
                <h2 class="title">Teknolojiler</h2>
            </div>
            <div class="row g-4">
                <div class="col-6">
                    <div class="tech-card fade-up">
                        <i class="fab fa-php"></i>
                        <h4>PHP</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tech-card fade-up" style="animation-delay: 0.2s">
                        <i class="fab fa-laravel"></i>
                        <h4>Laravel</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tech-card fade-up" style="animation-delay: 0.3s">
                        <i class="fas fa-database"></i>
                        <h4>MySQL</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tech-card fade-up" style="animation-delay: 0.4s">
                        <i class="fas fa-code-branch"></i>
                        <h4>REST API</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tech-card fade-up" style="animation-delay: 0.5s">
                        <i class="fab fa-golang"></i>
                        <h4>Go</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="section-title fade-up">
                <span class="subtitle">Profesyonel Geçmiş</span>
                <h2 class="title">Deneyim</h2>
            </div>
            <div class="experience-timeline">
                <div class="experience-item fade-up">
                    <div class="experience-content">
                        <div class="experience-header">
                            <h4>Satış Takım Lideri</h4>
                            <span class="company">MediaMarkt - Bursa</span>
                            <span class="period">2023 - Devam Ediyor</span>
                        </div>
                        <ul class="experience-list">
                            <li>Satış hedeflerini belirleyip bu hedeflere ulaşmak için takımı yönlendirmek</li>
                            <li>Satış performansını izlemek, raporlamak ve düzeltici önlemler almak</li>
                            <li>Müşteri ilişkilerini güçlendirmek ve müşteri memnuniyetini sağlamak</li>
                            <li>Büyük müşterilere yönelik stratejiler oluşturmak ve uygulamak</li>
                            <li>Ürün veya hizmetlerle ilgili güncel bilgilere hakim olmak</li>
                        </ul>
                    </div>
                </div>

                <div class="experience-item fade-up">
                    <div class="experience-content">
                        <div class="experience-header">
                            <h4>Mağaza Sorumlusu</h4>
                            <span class="company">Teknosa - Bursa</span>
                            <span class="period">2019 - 2023</span>
                        </div>
                        <ul class="experience-list">
                            <li>Çalışanların performansını izlemek, geribildirim sağlamak ve gelişimlerini desteklemek</li>
                            <li>Mağaza içi operasyonları düzenlemek ve etkili bir şekilde yürütmek</li>
                            <li>Stok yönetimini sağlamak, ürün yerleşimi ve görsel düzenlemeyi optimize etmek</li>
                        </ul>
                    </div>
                </div>

                <div class="experience-item fade-up">
                    <div class="experience-content">
                        <div class="experience-header">
                            <h4>Mağaza Yöneticisi</h4>
                            <span class="company">Turkcell - Bursa</span>
                            <span class="period">2012 - 2018</span>
                        </div>
                        <ul class="experience-list">
                            <li>Satış hedeflerini belirlemek ve bu hedeflere ulaşmak için stratejiler geliştirmek</li>
                            <li>Mağaza içi operasyonların düzenli ve etkili bir şekilde yürütülmesini sağlamak</li>
                            <li>Stok yönetimi, ürün yerleşimi, görsel düzenleme gibi operasyonel süreçleri yönetmek</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ asset('documents/cv.pdf') }}" class="btn btn-primary btn-lg download-cv" target="_blank">
            <i class="fas fa-download me-2"></i> CV'mi İndir
            <span class="btn-hover-effect"></span>
        </a>
    </div>
</div>
@endsection 