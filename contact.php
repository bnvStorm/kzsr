<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
  <main>
      <div class="contact-block">
      <!-- <div class="contact-block__map map" data-lat="-37.816248" data-lng="144.965981" id="map"></div> -->
      <iframe class="contact-block__map map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A1db0a9f0e64dc90c19bbe9dfcc00824213e89d727bd3fed91870770ddb6dcd9f&amp;source=constructor" width="100%" height="479" frameborder="0"></iframe>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="heading-smallest heading-smallest heading-smallest_has-offset heading-smallest heading-smallest_size_small">Адрес</div>
            <div class="contact-block__place">Казахстан
              <span class="contact-block__place-marker">Караганда</span>
            </div>
            <div class="contact-block__text">
              <p>ул. Механическая, 1/1
        
              </p>
              <p>
                <a href="tel:+77051112233">+7 705 1112233</a>
              </p>
              <p>
                <a href="mailto:infor@arquito.com">in@kzsr.kz</a>
              </p>
            </div>
      <!--       <a class="contact-block__link" href="#">Map Direction
              <span class="contact-block__link-icon icon-chevron-right"></span>
            </a> -->
          </div>
          <div class="col-12 col-lg-7">
            <div class="heading-smallest heading-smallest heading-smallest_has-offset heading-smallest heading-smallest_size_small">Напишите нам</div>
            <form class="contact-block__form">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <input class="contact-block__input-text" placeholder="Имя" type="text"/>
                </div>
                <div class="col-12 col-sm-6">
                  <input class="contact-block__input-text" placeholder="Компания" type="text"/>
                </div>
                <div class="col-12">
                  <textarea class="contact-block__input-textarea" placeholder="Напишите тут ваше сообщение"></textarea>
                  <button class="contact-block__submit">Отправить
                    <span class="contact-block__submit-icon icofont-caret-right"></span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include 'foot.php';?>
</body>

</html>
