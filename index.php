<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>dischi - index.php</title>
  </head>
  <body>

    <?php
      require_once __DIR__ . '/database/database.php';
    ?>

    <header>
        <div class="container">
            <img src="img/logo.png" alt="logo">
        </div>
    </header>

    <main>
      <div class="discs-container container">

        <?php
        foreach($discs as $disc) {
        ?>

          <div class="disc">
              <img src="<?php echo $disc['poster'] ?>" alt="">
              <h3><?php echo $disc['title'] ?></h3>
              <span class="author"><?php echo $disc['author'] ?></span>
              <span class="year"><?php echo $disc['year'] ?></span>
          </div>

        <?php
          }
        ?>

      </div>
    </main>

  </body>
</html>
