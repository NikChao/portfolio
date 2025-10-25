<?php

$projects = [
  [
    "name" => "Get lunch",
    "url" => "https://getlunch.food",
    "description" => "an app for finding somewhere to eat or something to cook",
    "image_url" => "/assets/images/getlunch.png"
  ],
  [
    "name" => "Task tote",
    "url" => "https://tasktote.com",
    "description" => "A simple, shared grocery list experience",
    "image_url" => "/assets/images/tasktote.png"
  ],
  [
    "name" => "Ping line",
    "url" => "https://pingln.com",
    "description" => "An evergreen documentation platform. One click docs.",
    "image_url" => "/assets/images/pingln.png"
  ]
]
?>

<link rel="stylesheet" href="/assets/css/pages/projects.css">
<div class="page">
  <h1>Projects</h1>
  <ul class="project-list">
    <?php foreach ($projects as $project) : ?>
      <li>
        <div>
          <a target="_blank" href="<?= $project["url"] ?>">
            <?= $project["name"] ?>
          </a>
        </div>
        <div class="description">
          <?= $project["description"] ?>     
        </div>
        <img src="<?= $project["image_url"] ?>" height="320px; width: auto;">
      </li>
    <?php endforeach; ?> 
  </ul>
</div>
