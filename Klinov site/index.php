<!DOCTYPE html>
<html>

<head>
  <title>
    <?php
    require_once './include/database.php';
    require_once './include/functions.php';
    $namesite = get_nameSite();
    echo $namesite[0]['text_1'];
    ?>
  </title>
</head>
<?php
require 'header.php';
?>

<body>

  <div class="container">
    <div class="sec1">
      <div class="sec1-left">
        <h3 class="sec1-title">САДОВЫЙ ЦЕНТР ГРИНСТРАНА</h3>
        <p class="sec1-t1">В наше стремительное время больших скоростей, высоких технологий, объемных
          информационных потоков мы все чаще
          ценим чистое, неподкупное, простое. Мы пытаемся вернуться к истокам – к природе.
          В суете дней мы стараемся
          вырвать хоть малые мгновения времени, чтобы прикоснуться к живому.
        </p>
        <p class="sec1-t1">Свой сад – что может быть лучше? Наша команда опытных специалистов в
          области
          озеленения, благоустройства и
          садового дизайна готова помочь в реализации Ваших «зеленых проектов»!
        </p>
        <a class="sec1-btn" href="#">
          <p>ПОДРОБНЕЕ</p>
          <p style="font-size: 30px; margin-left: 10px;">&#10230;</p>
        </a>
      </div>
      <div class="sec1-right">
        <div class="img-sec1-right"></div>
        <!-- <img class="img-sec1-right" src="./image/company.png"> -->
      </div>
    </div>


  </div>
  <div class="sovets">
    <div class="container">
      <div class="con-sovets">
        <div class="sovet">
          <div class="sovet-img">
            <img src="./image/features-1.png">
          </div>
          <div class="sovet-title">Высокое качество</div>
          <div class="sovet-text">Мы длительное время работаем с постоянными, проверенными поставщиками.
            На торговой площадке садового центра ведется строгий контроль за состоянием растений.
            Все это позволяет нам гарантировать высокое качество посадочного материала.
          </div>
        </div>

        <div class="sovet">
          <div class="sovet-img">
            <img src="./image/features-2.png">
          </div>
          <div class="sovet-title">Быстрая доставка</div>
          <div class="sovet-text">
            Мы владеем собственным автопарком. У нас в наличии легковой и грузовой транспорт.
            Мы стараемся планировать доставки так, чтобы
            Вы могли получить выбранные Вами растения не позднее двух дней с момента оформления заказа.
          </div>
        </div>

        <div class="sovet">
          <div class="sovet-img">
            <img src="./image/features-3.png">
          </div>
          <div class="sovet-title">Гарантия на растения</div>
          <div class="sovet-text">
            Мы тщательно следим за исполнением гарантийных обязательств.
            Посадка проводится под руководством квалифицированного агронома.
            Наши специалисты осуществляют регулярный контроль за состоянием гарантийных растений.
          </div>
        </div>

        <div class="sovet">
          <div class="sovet-img">
            <img src="./image/features-4.png">
          </div>
          <div class="sovet-title">Собственное торговое место</div>
          <div class="sovet-text">
            В нашем распоряжении собственное торговое место.
            На площадке в один гектар представлен широкий ассортимент
            посадочного материала, включая высаженные в грунт крупномеры.
          </div>
        </div>
      </div>

    </div>

  </div>


  <?php
  require 'footer.php';
  ?>
</body>

</html>