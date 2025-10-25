<?php
$blog_post_files = array_map('basename', glob('../md/blog/*.md'));
$blog_posts = array_map(function ($file) {
    return basename($file, '.md');
}, $blog_post_files);

function blog_href($blog)
{
    return str_replace('_', '-', $blog);
}

function blog_date($blog)
{
    $lines = file(__DIR__ . "/../md/blog/$blog.md");
    $date = $lines[1];
    return $date;
}
?>

<link rel="stylesheet" href="/assets/css/pages/blogs.css">
<div class="page">
  <h1>Notes</h1>

  <ul class="project-list">
    <?php foreach ($blog_posts as $blog) : ?>
    <li>
      <a href="/blog/<?= blog_href($blog) ?>"><?= $blog ?></a>
      <span class="blog-date"><?= blog_date($blog) ?></span>
    </li> 
    <?php endforeach; ?>
  </ul>
</div>
