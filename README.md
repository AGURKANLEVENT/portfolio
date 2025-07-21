# 💼 Kişisel Portfolyo Web Sitesi

Bu proje, **Laravel** framework kullanılarak geliştirilmiş bir kişisel portfolyo web sitesidir. Amacı, yazılım becerilerimi ve projelerimi sergileyebileceğim modern ve mobil uyumlu bir platform oluşturmaktır.

## 🚀 Özellikler

- Ana sayfa, hakkımda, projeler ve iletişim olmak üzere çok sayfalı yapı
- Laravel blade template yapısı
- Dinamik proje listeleme (veritabanı kullanımı)
- Bootstrap ile responsive (mobil uyumlu) tasarım
- İletişim formu ile e-posta gönderimi

## 🛠️ Kullanılan Teknolojiler

- Laravel 10
- PHP 8.x
- MySQL / SQLite
- HTML5 / CSS3
- Bootstrap 5
- Blade Template Engine

## ⚙️ Kurulum Talimatları

```bash
git clone https://github.com/AGURKANLEVENT/portfolio.git
cd portfolio
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

