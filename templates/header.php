<?php
include_once ("helpers/url.php");

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?php echo $BASE_URL?>/css/styles.css">
    <!--GOOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<header>
    <a href="<?php echo $BASE_URL?> " id="logo">
        <img src="<?php echo $BASE_URL?>/img/logo.svg" alt="Bloco Codar">
    </a>
    <nav>
        <ul id="navbar">
            <li><a href="<?php echo $BASE_URL?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categorias</a></li>
            <li><a href="#" class="nav-link">Sobre</a></li>
            <li><a href="<?php echo $BASE_URL?>/contact.php" class="nav-link">Contato</a></li>
        </ul>
    </nav>
</header>