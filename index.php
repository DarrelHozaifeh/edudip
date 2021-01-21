<?php require('includes/config.php') ?>
<!DOCTYPE html>
<html lang="<?php echo $settings[langshort]; ?>">
  <head>
    <title><?php echo $settings[title]; ?></title>
    <meta charset="<?php echo $settings[charset]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $settings[charset]; ?>">
    <meta name="keywords" content="<?php echo $settings[keywords]; ?>">
    <meta name="description" content="<?php echo $settings[description]; ?>">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="<?php echo $settings[toolkitcolor]; ?>">
    <meta name="msapplication-navbutton-color" content="<?php echo $settings[toolkitcolor]; ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $settings[toolkitcolor]; ?>">
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="<?php echo $settings[faviconsize]; ?>">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <?php
    if(isset($_SESSION['id'])){
        if(!isset($_GET['p']))
        $seite = $settings[userstartseite];
        else $seite = $_GET['p'];
            if(!file_exists("includes/pages/$seite.php")){
            include("includes/pages/404.php");
            }
            else{
            include("includes/pages/$seite.php");
            if(!filesize("includes/pages/$seite.php")) {
            echo 'Es wird folgende leere Datei aufgerufen: <b>'.$seite.'.php</b>';
            }
            }
        } else {
            if($_GET[p] != "") {$seite = $_GET[p];} else {$seite = $settings[gaststartseite];}
            if(!file_exists("includes/pages/$seite.php")){
            include("includes/pages/404.php");
            }
            else{
            include('includes/elements/header.php');
            include('includes/elements/navbar.php');
            include("includes/pages/$seite.php");
            }
            }
            //include('includes/elements/footer.php');
      ?>
      <script src="./js/bootstrap.bundle.min.js"></script>
      <script>feather.replace()</script>
  </body>
</html>
