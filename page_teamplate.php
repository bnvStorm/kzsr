<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
  <title>КазВторРесурс</title>
  <meta name="description" content="Лидер на рынке вторичного сырья в Казахстане.">
  <meta name="keywords" content="вторсырье, переработка, вторичное сырье">
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="https://kzsr.kz"/>
  <link rel="stylesheet" href="https://kzsr.kz/assets/css/site.addons.css"> 
<?php include 'head.php';?>
<div class="page__inner animsition">
  <main>
    <div class="main-slide main-slide-inside main-slide main-slide_size_large">
      <div class="parallax-image main-slide__image">
        <div class="parallax-image__image" data-rellax-percentage="0.5" data-rellax-speed="-3" style="background-image: url(<?php echo $urlimg; ?>)"></div>
      </div>
      <div class="main-slide__container container">
        <div class="main-slide__slide-inner">
          <div class="main-slide__title-wrapper">
            <div class="main-slide__title"><?php echo $h1; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="project-detail">
      <div class="container">
        <div class="project-detail__head-items">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="project-detail__head-item">
                <strong>Гост:</strong>
               <?php echo $gost; ?>
              </div>
              <div class="project-detail__head-item">
                <strong>Цена:</strong>
                <?php echo $price; ?>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="project-detail__head-item">
                <strong>Все:</strong>
                X <?php echo $ves; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="project-detail__title">Описание</div>
        <div class="project-detail__text"><? echo $content;?>
        </div>
        <div class="simple-slider">
          <button class="simple-slider__control simple-slider__control_prev icon-chevron-left" type="button">
            <span class="visually-hidden">prev</span>
          </button>
          <button class="simple-slider__control simple-slider__control_next icon-chevron-right" type="button">
            <span class="visually-hidden">next</span>
          </button>
          <div class="simple-slider__slider swiper-container">
            <div class="swiper-wrapper">
              <div class="simple-slider__slide swiper-slide">
                <img alt="" src="img/project-detail-slide-1.jpg"/>
              </div>
              <div class="simple-slider__slide swiper-slide">
                <img alt="" src="img/project-detail-slide-2.jpg"/>
              </div>
              <div class="simple-slider__slide swiper-slide">
                <img alt="" src="img/project-detail-slide-3.jpg"/>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <a class="project-detail__footer-link project-detail__footer-link_inverted" href="#">Лозунг,слоган,ссылка</a>
      </div>
    </div>
  </main>
<?php include 'foot.php';?>
</body>
</html>
