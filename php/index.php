<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <?php include '../php/header.php';?>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="../img/slide_1.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../img/slide_2.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../img/slide_3.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../img/slide_1.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../img/slide_2.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../img/slide_3.jpg" alt=""></div>
    </div>
    <div class="swiper-button-next"><img src="../img/slide-btn-next.svg" alt="#"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <section class="catch_copy">
    <p>今年も始まる<span>夏祭り</span></p>
  </section>

  <section id="schedule" class="schedule">
    <h2>スケジュール</h2>
    <p></p>
    <ul class="schedule_flex">
      <li class="schedule_tab active_tab">9月1日</li>
      <li class="schedule_tab">9月2日</li>
      <li class="schedule_tab">9月3日</li>
    </ul>
    <p class="schedule_text active_text">9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
    <p class="schedule_text">9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
    <p class="schedule_text">9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
  </section>

  <section class="access" id="access">
    <h2>アクセス</h2>
    <p>〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9655.570428898729!2d134.51913885470327!3d34.104479357056434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1715743435861!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <section id="inquiry" class="inquiry">
    <h2>席予約</h2>
    <form class="form" method="post" action="./confirm.php">
      <div>
        <label name="name">お名前<span>*必須</span></label>
        <input type="text" name="name" placeholder="例)田中 太郎" required>
      </div>
      <div>
        <label name="prefectures">席の場所<span>*必須</span></label>        
        <select id="area_parent" name="prefectures" required>
          <option value="">---</option>
          <option>SS席</option>
          <option>S席</option>
          <option>A席</option>
          <option>B席</option>
          <option>C席</option>
        </select>
      </div>
      <div>
        <label name="email">メールアドレス<span>*必須</span></label>
        <input type="email" name="email" placeholder="例)abcd123@example.com" required>
      </div>
      <div>
        <label name="tel">電話番号<span class="any">*任意</span></label>
        <input type="tel" name="tel" pattern="\d{9,11}" placeholder="例)09012345678">
      </div>
      <!-- <input type="submit" name="submit"> -->
      <input type="submit" name="submit" class="submit_ng_button active_button" disabled>
      <input type="submit" name="submit" class="submit_ok_button">
    </form>
  </section>

  <?php include '../php/footer.php';?>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 10,
      loop: true,
      centeredSlides: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    </script>
    <script src="../js/index.js"></script>
</body>
</html>