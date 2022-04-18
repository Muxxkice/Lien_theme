<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 問い合わせページでbootstrupを利用 -->
  <link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
  crossorigin="anonymous"/>
  <!-- style.cssを自動的に読み込む -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav class="gnav">
      <ul class=flex>
        <li><a href="<?php the_permalink(); ?>">Home</a></li>
        <li><a href="<?php the_permalink(88); ?>">About</a></li>
        <li><a href="<?php the_permalink(29); ?>">News</a></li>
        <li><a href="">Product</a></li>
        <li><a href="<?php the_permalink(10); ?>">Contact</a></li>
      </ul>
  </nav>
  </header>
