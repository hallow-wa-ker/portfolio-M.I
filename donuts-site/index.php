<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="common/css/style.css">
  <link rel="stylesheet" href="common/css/common.css">
  <!-- タイトルここ -->
  <title>C.C.Donuts</title>
</head>

<body>
  <?php
  session_start();

  ?>


  <?php
  require 'loading.php';
  ?>

  <?php
  require 'includes/header.php';
  ?>

  <p id="page_top"><a href="#"><img src="common/images/top_page_icon.svg" alt=""></a></p>

  <?php
  if (isset($_SESSION['customer'])) {
    echo '<p class="welcome_message">ようこそ', ' ', $_SESSION['customer']['name'], '様</p>';
  } else {
    echo '<p class="welcome_message">ようこそ、ゲスト様</p>';
  }
  ?>
  <section id="hero_section">
    <div class="hero_container">
      <img src="common/images/top_hero.jpg" alt="">
    </div>
  </section>


  <section id="topic_section">
    <div class="topic_container">
      <div class="new_product fadeUpTrigger2">
        <img src="common/images/product_5.jpg" alt="">
        <p class="new_item"><img src="common/images/new_item.svg" alt=""></p>
        <p class="summer_citrus">サマーシトラス</p>
      </div>
      <div class="product_promotion fadeUpTrigger2">
        <img src="common/images/life_with_donuts.jpg" alt="">
        <p>ドーナツのある生活</p>
      </div>
    </div>
    <div class="item_list fadeUpTrigger2">
      <div>
        <a href="product.php"><img src="common/images/ist_product.jpg" alt=""></a>
        <p>商品一覧</p>
      </div>
    </div>

  </section>


  <section id="introduce_section">
    <div class="introduce_container randomScroll">
      <h2 class="box">philosophy</h2>
      <h3 class="box">私たちの信念</h3>
      <p class="philosophy_title box">"Creating Connections"</p>
      <p class="philosophy_explain box">ドーナツでつながる</p>
    </div>
  </section>

  <section id="ranking_section">
    <h2 class="fadeUpTrigger">人気ランキング</h2>

    <div class="items_container">
      <div class="item fadeUpTrigger">
        <div class="first_icon"><span>1</span></div>
        <?php
        // 1位
        require 'includes/database.php';

        foreach ($pdo->query('select * from product where id = 1') as $row) {
          $formattedPrice = number_format($row['price']);

          echo '<a href="detail-', $row['category'], '.php?id=', $row['id'], '">', '<img src="common/images/product_', $row['id'], '.jpg" alt="', $row['name'], '画像"></a>';
          echo '<p class="product_name">', $row['name'], '</p>';
          echo '<div class="price_container">';
          echo '<p class="product_price">税込 &yen;', $formattedPrice, '</p>
          <div id="switch_btn"></div>';
          echo '</div>';

          echo '<form action="cart-input.php">';
          echo '<a href="cart-show.php"><div class="button_area"><input type="submit" method="post" value="カートに入れる" 
          class="button"></div></a>';
          echo '<input type="hidden" name="name" value="', $row['name'], '">';
          echo '<input type="hidden" name="price" value="', $row['price'], '">';
          echo '<input type="hidden" name="id" value="', $row['id'], '">';
          echo '<input type="hidden" name="count" value="1">';
          echo '</form>';
        }
        ?>
      </div>

      <div class="item fadeUpTrigger">
        <div class="rank_icon"><span>2</span></div>
        <?php
        // 2位
        require 'includes/database.php';

        foreach ($pdo->query('select * from product where id = 7') as $row) {
          $formattedPrice = number_format($row['price']);
          echo '<a href="detail-', $row['category'], '.php?id=', $row['id'], '">', '<img src="common/images/product_', $row['id'], '.jpg" alt="', $row['name'], '画像"></a>';
          echo '<p class="product_name">', $row['name'], '</p>';
          echo '<div class="price_container">';
          echo '<p class="product_price">税込 &yen;', $formattedPrice, '</p>
         <div id="switch_btn2"></div>';
          echo '</div>';
          echo '<form action="cart-input.php">';
          echo '<div class="button_area"><input type="submit" method="post" value="カートに入れる" 
          class="button"></div>';
          echo '<input type="hidden" name="name" value="', $row['name'], '">';
          echo '<input type="hidden" name="price" value="', $row['price'], '">';
          echo '<input type="hidden" name="id" value="', $row['id'], '">';
          echo '<input type="hidden" name="count" value="1">';
          echo '</form>';
        }
        ?>
      </div>

      <div class="item fadeUpTrigger">
        <div class="rank_icon"><span>3</span></div>
        <?php
        // 3位
        require 'includes/database.php';

        foreach ($pdo->query('select * from product where id = 8') as $row) {
          $formattedPrice = number_format($row['price']);

          echo '<a href="detail-', $row['category'], '.php?id=', $row['id'], '">', '<img src="common/images/product_', $row['id'], '.jpg" alt="', $row['name'], '画像"></a>';
          echo '<p class="product_name">', $row['name'], '</p>';
          echo '<div class="price_container">';
          echo '<p class="product_price">税込 &yen;', $formattedPrice, '</p>
          <div id="switch_btn3"></div>';
          echo '</div>';

          echo '<form action="cart-input.php">';
          echo '<div class="button_area"><input type="submit" method="post" value="カートに入れる" 
          class="button"></div>';
          echo '<input type="hidden" name="name" value="', $row['name'], '">';
          echo '<input type="hidden" name="price" value="', $row['price'], '">';
          echo '<input type="hidden" name="id" value="', $row['id'], '">';
          echo '<input type="hidden" name="count" value="1">';
          echo '</form>';
        }
        ?>
      </div>

      <div class="item fadeUpTrigger">
        <div class="rank_icon"><span>4</span></div>
        <?php
        // 4位
        require 'includes/database.php';

        foreach ($pdo->query('select * from product where id = 2') as $row) {
          $formattedPrice = number_format($row['price']);

          echo '<a href="detail-', $row['category'], '.php?id=', $row['id'], '">', '<img src="common/images/product_', $row['id'], '.jpg" alt="', $row['name'], '画像"></a>';
          echo '<p class="product_name">', $row['name'], '</p>';
          echo '<div class="price_container">';
          echo '<p class="product_price">税込 &yen;', $formattedPrice, '</p>
          <div id="switch_btn4"></div>';
          echo '</div>';

          echo '<form action="cart-input.php">';
          echo '<div class="button_area"><input type="submit" method="post" value="カートに入れる" 
          class="button"></div>';
          echo '<input type="hidden" name="name" value="', $row['name'], '">';
          echo '<input type="hidden" name="price" value="', $row['price'], '">';
          echo '<input type="hidden" name="id" value="', $row['id'], '">';
          echo '<input type="hidden" name="count" value="1">';
          echo '</form>';
        }
        ?>
      </div>

      <div class="item fadeUpTrigger">
        <div class="rank_icon"><span>5</span></div>
        <?php
        // 5位
        require 'includes/database.php';

        foreach ($pdo->query('select * from product where id = 9') as $row) {
          $formattedPrice = number_format($row['price']);

          echo '<a href="detail-', $row['category'], '.php?id=', $row['id'], '">', '<img src="common/images/product_', $row['id'], '.jpg" alt="', $row['name'], '画像"></a>';
          echo '<p class="product_name">', $row['name'], '</p>';
          echo '<div class="price_container">';
          echo '<p class="product_price">税込 &yen;', $formattedPrice, '</p>
          <div id="switch_btn5"></div>';
          echo '</div>';

          echo '<form action="cart-input.php">';
          echo '<div class="button_area"><input type="submit" method="post" value="カートに入れる" 
          class="button"></div>';
          echo '<input type="hidden" name="name" value="', $row['name'], '">';
          echo '<input type="hidden" name="price" value="', $row['price'], '">';
          echo '<input type="hidden" name="id" value="', $row['id'], '">';
          echo '<input type="hidden" name="count" value="1">';
          echo '</form>';
        }
        ?>
      </div>

      <div class="item fadeUpTrigger">
        <div class="rank_icon"><span>6</span></div>
        <?php
        // 6位
        require 'includes/database.php';

        foreach ($pdo->query('select * from product where id = 6') as $row) {
          $formattedPrice = number_format($row['price']);

          echo '<a href="detail-', $row['category'], '.php?id=', $row['id'], '">', '<img src="common/images/product_', $row['id'], '.jpg" alt="', $row['name'], '画像"></a>';
          echo '<p class="product_name">', $row['name'], '</p>';
          echo '<div class="price_container">';
          echo '<p class="product_price">税込 &yen;', $formattedPrice, '</p>
          <div id="switch_btn6"></div>';
          echo '</div>';

          echo '<form action="cart-input.php">';
          echo '<div class="button_area"><input type="submit" method="post" value="カートに入れる" 
          class="button"></div>';
          echo '<input type="hidden" name="name" value="', $row['name'], '">';
          echo '<input type="hidden" name="price" value="', $row['price'], '">';
          echo '<input type="hidden" name="id" value="', $row['id'], '">';
          echo '<input type="hidden" name="count" value="1">';
          echo '</form>';
        }
        ?>
      </div>
    </div>

  </section>


  <?php require 'includes/footer.php'; ?>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="common/js/animation.js"></script>
  <script src="common/js/favorite.js"></script>
</body>

</html>