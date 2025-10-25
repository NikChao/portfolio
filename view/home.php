<?php

$graphics = ['cheese-burger', 'rocket'];

$i = rand(0, 10);
$i = $i < 5 ? 0 : 1;

$graphic = $graphics[$i];
?>

<link rel="stylesheet" href="/assets/css/pages/home.css">
<script type="module" src="/assets/js/pages/home.js"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<link rel="preload" href="/assets/3d/<?= $graphic ?>.glb" as="fetch" type="model/gltf-binary" crossorigin>

<div class="page home-page">
  <div></div>
  <div style="position: relative; z-index: 1;">
    <div style="position: absolute; z-index: -1;">
      <model-viewer
        class="<?= $graphic ?>"
        src="/assets/3d/<?= $graphic ?>.glb"
        alt="A 3D model"
        auto-rotate
        auto-rotate-delay="0"
        rotation-per-second="40deg"
        loading="eager"
        reveal="auto"
        shadow-intensity="1"
      ></model-viewer>
    </div>
    <div class="heading">
      <h1>Nik's site</h1>
      <h3 class="subheading">choose an adventure</h3>
    </div>

    <ul class="menu">
      <li><a href="/projects">Projects</a></li>
      <li><a href="/blog"">Notes</a></li>
      <li><a href="/cv">CV</a></li>
    </ul>
  </div>
  <div class="contact-container">
    <span class="contact">
      Contact me @ <a class="email" href="mailto:nik.chaourov@gmail.com">nik.chaourov@gmail.com</a>
    </span>
  </div>
</div>
