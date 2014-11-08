<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="my personnal web site">
    <meta name="author" content="thomas chafiol">
    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <title>Thomas Chafiol</title>
    <!-- Bootstrap core CSS -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
    <script type="text/javascript" <?php echo('src="' . $this->path("vendor/jquery/jquery.min.js") . '"') ?> ></script>

    <?php
      $this->css("font-awesome/css/font-awesome.min");
      $this->css("bootstrap/css/bootstrap.min");

      foreach ($this->getCss() as $css) {
        echo "<link href=\"" . $css . "\" rel=\"stylesheet\">";
      }
      $this->javascript("bootstrap/js/bootstrap.min");
    ?>
  </head>
  <body bgcolor=#ddd>
