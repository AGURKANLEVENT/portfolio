<?php

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$routes = [
    '/' => 'index.html',
    '/about' => 'about.html',
    '/projects' => 'projects.html',
    '/contact' => 'contact.html'
];

if (!file_exists(__DIR__.'/../public/static')) {
    mkdir(__DIR__.'/../public/static', 0755, true);
}

foreach ($routes as $route => $file) {
    $request = Illuminate\Http\Request::create($route);
    $response = $kernel->handle($request);
    $content = $response->getContent();
    
    file_put_contents(__DIR__.'/../public/static/'.$file, $content);
    echo "Generated: $file\n";
}

echo "Static files generated successfully!\n"; 