<?php

use League\CommonMark\CommonMarkConverter;

function view($name, $data = [], $show_nav = true)
{
    extract($data);
    ob_start();

    $path = __DIR__ . "/view/{$name}";

    if (file_exists("{$path}.php")) {
        include "{$path}.php";
    } elseif (file_exists("{$path}.html")) {
        include "{$path}.html";
    }

    $content = ob_get_clean();
    include __DIR__ . "/view/layout.php";
}

function md($name, $data = [])
{
    $md_path = __DIR__ . "/md/$name.md";
    $contents = file_get_contents($md_path);
    $converter = new CommonMarkConverter();

    $md_content = $converter->convert($contents)->getContent();

    ob_start();
    include __DIR__ . "/view/partials/blog_layout.php";
    $content = ob_get_clean();

    include __DIR__ . "/view/layout.php";
}
