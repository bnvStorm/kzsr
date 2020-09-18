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
          <div class="row box">
            <div class="left">
              <div class="project-detail__head-item">
                <strong>Гост:</strong>
               <?php echo $gost; ?>
              </div>
              <div class="project-detail__head-item">
                <strong>Цена:</strong>
                <?php echo $price; ?>
              </div>              <div class="project-detail__head-item">
                  <strong>Вес:</strong>
                X <?php echo $ves; ?>              </div> 
                <div class="project-detail__head-item">
                  <strong>Описание:</strong>
                <?php echo $content; ?>              </div>
            </div>
            <div class="right" style="background: url('<?php echo $urlimg; ?>');background-size: contain;">
           <!--    <img src="<?php echo $urlimg; ?>" alt=""> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include 'foot.php';?>
</body>
</html>
