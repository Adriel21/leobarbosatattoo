<!DOCTYPE html>
<html lang="pt-br">
<head>
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GZ8HEQ1ZV0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GZ8HEQ1ZV0');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$metaDesc?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="<?php echo URL; ?>public/img/icons/faviconn.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/reset.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/general.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
    
    <?php 
    if($title === "Publicação") {
     $postBackground = URL . 'public/img/blog/' . $onePost['cover_photo'];
    
    ?>

    <style>
        .post_background{
            background-image: url(<?php echo $postBackground?>);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <?php } ?>

    <title><?=$title?></title>
</head>
<!-- Google tag (gtag.js) -->

<body>


<section class="first_background">
    <div class="banner_overlay">
    <header>
        <h2><a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>public/img/logo/assinatura_recortada_editada_dois.png" alt="logo leobarbosatattoo" class="logo"></a></h2>
        <nav class="menu_nav">
            <div class="menu_hamburguer">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="ul_nav menu pt-3">
                <li><a href="<?php echo URL; ?>" title="Início" class="commonLink">Início</a></li>
                    <li><a href="<?php echo URL; ?>portfolio" title="Portfólio" class="commonLink ">Portfólio</a></li>
                    <li><a href="<?php echo URL; ?>blog" title="Blog" class="commonLink">Blog</a></li>
                    <li class="contactOptionMenu"><a href="https://wa.me/5511932312488" title="Contato WhatsApp" class="contactLink" target="_blank" rel="external">Contato</a></li>
            </ul>
        </nav>
    </header>

