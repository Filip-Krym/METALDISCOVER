<?php

$physical_dir = $_SERVER['DOCUMENT_ROOT']."/METALDISCOVER/";
$root_dir = "http://localhost/METALDISCOVER";

  // automatically creates links from folders in /pages/ and prints them
function load_links($physical_dir) {
  $pages = (glob("$physical_dir/pages"."/*"));
  if (empty($pages) or $pages == false) {
    echo "[ERR] link array is zero length!";
  } else {
    foreach ($pages as $link) {
      $name = basename($link);
      echo "<a class='nav_link' href='$link' target='_self'>$name</a>";
    };
  };
};

function color_current_link() {
  $url = $_SERVER['DOCUMENT_ROOT'];
  var_dump($url);
};

$username = "admin";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="<?= $root_dir; ?>/data/common/styles.css">

  <title>
    Metal Discover.com
  </title>

</head>

<body style="background-image: url('<?= $root_dir; ?>/data/imgs/GradientBackground.png');">

  <img src="<?= $root_dir; ?>/data/imgs/MDLogoWhiteTextRedBG.png" class="logo">

  <header>
    <section class="account_status">
      Logged in as: <strong><?= $username; ?></strong>
    </section>
  </header>

  <main>
    <nav>
      <?php
        load_links($physical_dir);
        color_current_link();
      ?>
    </nav>  
    <section class="content">
      
    </section>
  </main>

  <footer>
    <section class="credits">
      <section class="license">
        © Copyright <br>
        Metal Discover 2025 <br>
        All rights reserved.
      </section>
      <img class="logo-foot" src="<?= $root_dir; ?>/data/imgs/MDLogoWhiteBG.png">
    </section>
  </footer>

</body>

</html>