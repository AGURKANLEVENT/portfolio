<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Sipariş Yönetim Sistemi',
                'description' => 'Laravel tabanlı bir Sipariş Yönetim Sistemi. Müşteri, ürün ve sipariş yönetimi için API uç noktaları sağlar.',
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&h=600&q=80',
                'technologies' => ['Laravel', 'MySQL', 'RESTful API'],
                'link' => 'https://github.com/AGURKANLEVENT/order-system'
            ],
            [
                'title' => 'Order System Dashboard',
                'description' => 'Sipariş yönetim sisteminin yönetici paneli uygulaması. Modern ve kullanıcı dostu arayüz.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&h=600&q=80',
                'technologies' => ['Laravel', 'Bootstrap', 'MySQL'],
                'link' => 'https://github.com/AGURKANLEVENT/order-system_d'
            ],
        ];

        return view('projects', compact('projects'));
    }
} 