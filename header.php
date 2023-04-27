<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no,email=no,address=no">

<!-- Title & Description -->
<title>タイトルが入ります</title>
<meta name="description" content="ページの内容を表す文章" />

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">

<!-- jQuery --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
  <header id="header" class="header">
    <div class="header__container">
      <h1 class="header__logo"><a href="<?php echo home_url() ?>">Logo</a></h1>
      <nav class="global-nav">
        <ul class="global-nav__list">
          <li>
            <a href="<?php echo home_url() ?>">TOP</a>
          </li>
          <li>
            <a href="#">VISION</a>
          </li>
          <li>
            <a href="#" class="global-nav__link">SERVICE</a>
          </li>
          <li class="global-nav__item">
            <a href="#" class="global-nav__link">PROFILE</a>
          </li>
          <li class="global-nav__item">
            <a href="#" class="global-nav__link">CONTACT</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
