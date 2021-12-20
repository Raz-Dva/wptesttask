<?php ?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <title><?php echo wp_get_document_title() ?></title>
  <meta name="description" content="My Page Description">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php wp_head() ?>
</head>

<body>

  <header>
    <div class="header-container">
      <div class="logo">
        <a href="/">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt="">
        </a>
      </div>
      <nav class="head_nav">
        <ul class="topnav"  id="myTopnav">
        <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a></li>

          <li><span class="num_item_list">01</span><a href="/">Start</a></li>
          <li><span class="num_item_list">02</span><a href="#who">Kim jesteśmy</a></li>
          <li><span class="num_item_list">03</span><a href="#realization">Realizacje</a></li>
          <li><span class="num_item_list">04</span><a href="#contacts">Kontakt</a></li>
          <li><span class="num_item_list">05</span><a href="">Blog</a></li>

        </ul>
      </nav>
      <div class="call">

        <a href="/" class="btn_call">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/call.svg" alt="">
        </a>
        <div class="popup_call">
          Oddzwonimy w 19 sekund
        </div>
      </div>
    </div>
  </header>