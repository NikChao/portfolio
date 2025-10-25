<?php

/** @var string|null $title */
/** @var string|null $content */
/** @var bool|null $show_nav */
if (!isset($show_nav)) {
    $show_nav = true;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= $title ?? 'Nik C\'s site' ?></title>
  <link rel="stylesheet" href="/assets/css/app.css">
  <script type="importmap">
    {
      "imports": {
        "utils/": "/assets/js/utils/"
      }
    }  
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php if ($show_nav) : ?>
    <div class="nav">
      <a href="javascript:history.back()">Back</a>
      <div class="nav-end">
      <a href="/">Home</a>  
      <a href="/blog">Notes</a>  
      <a href="/projects">Projects</a>  
      <a href="/cv">CV</a>
      </div>
    </div>
  <?php endif; ?>
  <?= $content ?>
  <script type="module" src="/assets/js/app.js"></script>
</body>
</html>
