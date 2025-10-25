<?php

require __DIR__ . '/../bootstrap.php';

$folders = ['helpers', 'db'];
foreach ($folders as $folder) {
    foreach (glob(__DIR__ . "/../$folder/*.php") as $file) {
        require $file;
    }
}

require __DIR__ . '/../router.php';
require __DIR__ . '/../vendor/autoload.php';

use App\Router;

$router = new Router();

$router->get('/', fn () => view('home', [], false));
$router->get('/projects', fn () => view('projects'));
$router->get('/cv', fn () => md('cv'));

// ======== Blog posts ===========
$blog_post_files = array_map('basename', glob('../md/blog/*.md'));
$blog_posts = array_map(function ($file) {
    return basename($file, '.md');
}, $blog_post_files);

$router->get('/blog', fn () => view('blog'));
foreach ($blog_posts as $blog) {
    $blog_name = basename($blog, '.md');
    $blog_path = str_replace(
        '_',
        '-',
        $blog_name
    );

    $router->get("/blog/$blog_path", fn () => md("/blog/$blog_name"));
}

$router->dispatch();
