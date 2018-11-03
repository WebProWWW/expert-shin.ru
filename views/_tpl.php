<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <!-- fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic">
  <link rel="stylesheet" href="/assets/icomoon/style.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
  <!-- plugins -->
  <link rel="stylesheet" href="/assets/bxslider/dist/jquery.bxslider.min.css">
  <link rel="stylesheet" href="/assets/fancybox/dist/jquery.fancybox.min.css">
  <!-- style -->
  <link rel="stylesheet" href="/css/main.css?v=009">
  <!-- favicon -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= $this->baseUrl ?>/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $this->baseUrl ?>/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $this->baseUrl ?>/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $this->baseUrl ?>/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= $this->baseUrl ?>/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= $this->baseUrl ?>/apple-touch-icon-152x152.png">
  <link rel="icon" type="image/png" href="<?= $this->baseUrl ?>/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?= $this->baseUrl ?>/favicon-16x16.png" sizes="16x16">
  <meta name="application-name" content="Expert Shin">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="<?= $this->baseUrl ?>/mstile-144x144.png">
  <title>Експерт Шин - <?= $this->title ?></title>
</head>
<body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" > 
 (function (d, w, c) { 
    (w[c] = w[c] || []).push(function() { 
       try { 
          w.yaCounter50940317 = new Ya.Metrika2({ 
             id:50940317, 
             clickmap:true, 
             trackLinks:true, 
             accurateTrackBounce:true, 
             webvisor:true 
          }); 
       } catch(e) { } 
    }); 
    var n = d.getElementsByTagName("script")[0], 
        s = d.createElement("script"), 
        f = function () { n.parentNode.insertBefore(s, n); }; 
    s.type = "text/javascript"; 
    s.async = true; 
    s.src = "https://mc.yandex.ru/metrika/tag.js"; 
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); }
    else { f(); } 
 })(document, window, "yandex_metrika_callbacks2");
</script> 
<noscript><div><img src="https://mc.yandex.ru/watch/50940317" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
<!-- / Yandex.Metrika counter -->

<!-- VK Retargeting -->
<script type="text/javascript">
(function() {
  var t = document.createElement("script");
  t.type = "text/javascript";
  t.async = true;
  t.src = "https://vk.com/js/api/openapi.js?159";
  t.onload = function() {
    VK.Retargeting.Init("VK-RTRG-300151-ezlL5");
    VK.Retargeting.Hit();
  };
  document.head.appendChild(t);
})();
</script>
<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-300151-ezlL5" style="position:fixed; left:-999px;" alt=""/></noscript>
<!-- / VK Retargeting -->


<script>
  window.counterEvent = function(eventName) {
    eventName = String(eventName);
    if (yaCounter50940317 != null && typeof yaCounter50940317.reachGoal === 'function') {
      yaCounter50940317.reachGoal(eventName);
      console.log('Сработала: yaCounter50940317.reachGoal(\''+eventName+'\')');
    }
    return true;
  };
  window.formSendSuccess = function($form) {
    var eventName = $form.attr('event-name');
    if (eventName != null) {
      window.counterEvent(eventName);
    }
    return true;
  };
</script>

<header class="header">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-auto order-md-1">
        <a class="logo-ln" href="index.html">
          <img class="logo-img logo-header js-onscrl" width="170" height="69" src="img/logo.svg">
        </a>
      </div><!--/.col-->
      <div class="col-auto ml-auto order-md-3 text-right">
        <a class="phone-ln" onclick="window.counterEvent('phone');" href="tel:+74955072133"><i class="i-21"></i> +7 495 507-21-33</a>
        <p class="text d-none d-lg-block js-onscrl hide-lg-scrl">Работаем ежедневно с 9:00 до 23:00</p>
      </div><!--/.col-->
      <div class="col-auto d-md-none">
        <a class="nav-toggler js-collapse" href="#nav-menu">
          <i class="i-24"></i>
        </a>
      </div><!--/.col-->
      <div class="col-12 col-md-auto order-md-2">
        <h3 class="text fwgt-600 gray d-none d-lg-block js-onscrl hide-lg-scrl">Для тех, кто ценит свой автомобиль</h3>
        <div class="collapse nav-collapse" id="nav-menu">
          <nav class="nav">
            <a class="nav-ln" href="nashi-raboty.html">Наши работы</a>
            <a class="nav-ln js-scrollto" href="index.html#price">Стоимость</a>
            <a class="nav-ln" href="kontakty.html">Контакты</a>
          </nav>
        </div>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</header>

<?= $content ?>

<div class="divider m-0"></div>
<section class="section">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-md-2">
        <a class="logo-ln" href="">
          <img class="logo-img mx-auto" width="165" height="67" src="img/logo.svg">
        </a>
      </div><!--/.col-->
      <div class="col-12 col-md-auto ml-auto">
        <nav class="nav">
          <a class="nav-ln" href="nashi-raboty.html">Наши работы</a>
          <a class="nav-ln js-scrollto" href="index.html#price">Стоимость</a>
          <a class="nav-ln" href="kontakty.html">Контакты</a>
        </nav>
      </div><!--/.col-->
      <div class="col-12 col-md-auto">
        <a class="phone-ln em-13 text-center" onclick="window.counterEvent('phone');" href="tel:+74955072133">+7 495 507-21-33</a>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.section-->

<footer class="footer text-center">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-auto">
        <p class="text em-8 em-md-10">&copy; 2018 Все права защищены.</p>
      </div><!--/.col-->
      <div class="col-12 col-md-auto">
        <p class="text em-8 em-md-10">Разработка и продвижение сайта - <a class="ln-white fwgt-700" target="_blank" href="http://www.webgangstudio.ru/">Webgang</a></p>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</footer>

<div class="order collapse" id="order-fix">
  <div class="container">
    <div class="row align-items-center justify-content-around">
      <div class="col-12 col-sm-auto">
        <p class="text d-flex align-items-end">
          <span class="d-block fwgt-600 em-11">К оплате:</span>
          <span class="d-block spnwr text-right ml-15">
            <span class="fwgt-700 em-13"><span class="js-total-all"></span></span> <i class="i-20"></i>
          </span>
        </p>
      </div><!--/.col-->
      <div class="col-12 col-sm-auto">
        <a class="btn btn-blue p-10" data-fancybox href="#order-modal">Оформить заказ</a>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</div>

<div class="d-none">

<!-- ОФОРМИТЬ ЗАКАЗ (калькулятор) -->
<div class="modal-sm" id="order-modal">
  <p class="text text-center em-12 fwgt-600">Оформить заказ</p>
  <form class="js-form" event-name="order">
    <input type="hidden" name="type" value="Оформить заказ">
    <input class="input" type="text" name="name" placeholder="Имя" validate="text">
    <input class="input js-mask" mask="+7-999-999-99-99" type="text" name="phone" placeholder="Телефон" validate="text">
    <button class="btn btn-blue input-h js-form-progress">Отправить</button>
    <div id="js-orderform-inputs" class="hidden"></div>
  </form>
  <div class="divider"></div>
  <p class="text fwgt-700 em-12">
    Итого: <span class="js-total-all ml-15"></span> <i class="i-20 em-8"></i>
  </p>
  <div class="divider"></div>
  <p class="text text-center em-9">Точная стоимость ремонта и время проведения определяется мастером на месте.</p>
  <div id="js-orderm-ilist"></div>
</div><!--/.modal-->


<!-- ОСТАВИТЬ ЗАЯВКУ -->
<div class="modal-sm" id="callback-modal">
  <p class="text text-center em-12 fwgt-600">Оставить заявку</p>
  <form class="js-form" event-name="request">
    <input type="hidden" name="type" value="Обратный звонок">
    <input class="input" type="text" name="name" placeholder="Имя" validate="text">
    <input class="input js-mask" mask="+7-999-999-99-99" type="text" name="phone" placeholder="Телефон" validate="text">
    <button class="btn btn-blue input-h js-form-progress">Отправить</button>
  </form>
</div><!--/.modal-->


<!-- AJAX УСПЕШНО | ОШИБКА -->
<div id="js-form-success">
  <p class="text text-center">
    <span class="fwgt-700">Сообщение успешно доставлено.</span><br>
    Ближайшее время специалист позвонит Вам,<br>
    и ответит на вопросы<br>
    <span class="fwgt-700">Благодарим вас за обращение!</span>
  </p>
</div>
<div id="js-form-error">
  <p class="text text-center">
    <span class="fwgt-700 red">Произошла ошибка!</span><br><br>
    Пожалуйста, попробуйте повторить.<br>
    Если вы хотите ускорить процесс, позвоните<br>
    по телефону прямо сейчас:<br><br>
    <a class="phone-ln" onclick="window.counterEvent('phone');" href="tel:+74955072133"><i class="i-21"></i> +7 495 507-21-33</a>
    <span class="fwgt-700">Благодарим вас за обращение!</span>
  </p>
</div>

<!-- ПОЛИТИКА -->
<div class="" id="policy">
  <div class="container">
  <p>Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в отношении всей информации, которую Интернет-сайт расположенный на доменном имени www.expert-shin.ru, может получить о Пользователе во время использования сайта www.expert-shin.ru.</p>
  <h4>1. ОПРЕДЕЛЕНИЕ ТЕРМИНОВ</h4>
  <p>1.1 В настоящей Политике конфиденциальности используются следующие термины:</p>
  <p>1.1.1. «Администрация сайта www.expert-shin.ru (далее — Администрация сайта)», уполномоченные сотрудники, действующие от имени «Expert Shin», которые организуют и (или) осуществляют обработку персональных данных, а также определяют цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</p>
  <p>1.1.2. «Персональные данные» — любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных).</p>
  <p>1.1.3. «Обработка персональных данных» — любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p>
  <p>1.1.4. «Конфиденциальность персональных данных» — обязательное для соблюдения Администрацией сайта требование не допускать их распространения без согласия субъекта персональных данных или наличия иного законного основания.</p>
  <p>1.1.5. «Пользователь сайта www.expert-shin.ru (далее Пользователь)» — лицо, имеющее доступ к Сайту, посредством сети Интернет и использующее www.expert-shin.ru.</p>
  <p>1.1.6. «Cookies» — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя, который веб-клиент или веб-браузер каждый раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу соответствующего сайта.</p>
  <p>1.1.7. «IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, построенной по протоколу IP.</p>
  <h4>2. ОБЩИЕ ПОЛОЖЕНИЯ</h4>
  <p>2.1. Использование Пользователем сайта www.expert-shin.ru означает согласие с настоящей Политикой конфиденциальности и условиями обработки персональных данных Пользователя.</p>
  <p>2.2. В случае несогласия с условиями Политики конфиденциальности Пользователь должен прекратить использование сайта www.expert-shin.ru.</p>
  <p>2.3. Настоящая Политика конфиденциальности применяется только к сайту www.expert-shin.ru. Сайт www.expert-shin.ru не контролирует и не несет ответственность за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на сайте www.expert-shin.ru.</p>
  <p>2.4. Администрация сайта не проверяет достоверность персональных данных, предоставляемых Пользователем сайта www.expert-shin.ru.</p>
  <h4>3. ПРЕДМЕТ ПОЛИТИКИ КОНФИДЕНЦИАЛЬНОСТИ</h4>
  <p>3.1. Настоящая Политика конфиденциальности устанавливает обязательства Администрации сайта www.expert-shin.ru по неразглашению и обеспечению режима защиты конфиденциальности персональных данных, которые Пользователь предоставляет по запросу Администрации сайта при заполнении на сайте форм обратной связи, заявок, формирования отзывов о качестве услуг, а также общению через сервис online-чата.</p>
  <p>3.2. Персональные данные, разрешенные к обработке в рамках настоящей Политики конфиденциальности, предоставляются Пользователем путем заполнения форм на сайте www.expert-shin.ru, и включают в себя следующую информацию:</p>
  <p>3.2.1. фамилию, имя, отчество Пользователя;</p>
  <p>3.2.2. контактный телефон Пользователя;</p>
  <p>3.2.3. адрес электронной почты (e-mail);</p>
  <p>3.2.4. город и страну проживания;</p>
  <p>3.2.5. адрес сайта.</p>
  <p>3.3. Сайт www.expert-shin.ru защищает Данные, которые автоматически передаются в процессе просмотра рекламных блоков и при посещении страниц, на которых установлен статистический скрипт системы «Вконтакте», «Facebook», «Таргет Mail.ru», Яндекс Метрика, Google Analytics:</p>
  <p>IP адрес; информация из cookies; информация о браузере (или иной программе, которая осуществляет доступ к показу рекламы); время доступа; адрес страницы, на которой расположен рекламный блок; реферер (адрес предыдущей страницы).
  <p>3.4. Любая иная персональная информация, неоговоренная выше (история переходов по страницам сайта, используемые браузеры и операционные системы и т.д.), подлежит надежному хранению и нераспространению, за исключением случаев, предусмотренных в п.п. 5.2. и 5.3. настоящей Политики конфиденциальности.</p>
  <h4>4. ЦЕЛИ СБОРА ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ ПОЛЬЗОВАТЕЛЯ</h4>
  <p>4.1. Персональные данные Пользователя Администрация сайта www.expert-shin.ru могут использоваться в целях:</p>
  <p>4.1.1. Предоставления консультаций;</p>
  <p>4.1.2. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования сайта www.expert-shin.ru, оказания услуг, обработка запросов и заявок от Пользователя;</p>
  <p>4.1.3. Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества;</p>
  <p>4.1.4. Предоставления Пользователю эффективной клиентской и технической поддержки при возникновении проблем, связанных с использованием ранее разработанных сайтов;</p>
  <p>4.1.5. Предоставления Пользователю с его согласия, обновлений услуг, специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени www.expert-shin.ru или от имени партнеров www.expert-shin.ru;</p>
  <p>4.1.6. Осуществления рекламной деятельности с согласия Пользователя.</p>
  <h4>5. СПОСОБЫ И СРОКИ ОБРАБОТКИ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ</h4>
  <p>5.1. Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств.</p>
  <p>5.2. Пользователь соглашается с тем, что Администрация сайта вправе передавать персональные данные третьим лицам, исключительно в целях выполнения запроса Пользователя, оформленного на сайте www.expert-shin.ru.</p>
  <p>5.3. Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти Российской Федерации только по основаниям и в порядке, установленным законодательством Российской Федерации.</p>
  <p>5.4. При утрате или разглашении персональных данных Администрация сайта информирует Пользователя об утрате или разглашении персональных данных.</p>
  <p>5.5. Администрация сайта принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.</p>
  <p>5.6. Администрация сайта совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.</p>
  <h4>6. ОБЯЗАТЕЛЬСТВА СТОРОН</h4>
  <p>6.1. Пользователь обязан:</p>
  <p>6.1.1. Предоставить информацию о персональных данных, необходимую для пользования сайтом www.expert-shin.ru;</p>
  <p>6.1.2. Обновить, дополнить предоставленную информацию о персональных данных в случае изменения данной информации.</p>
  <p>6.2. Администрация сайта обязана:</p>
  <p>6.2.1. Использовать полученную информацию исключительно для целей, указанных в п. 4 настоящей Политики конфиденциальности.</p>
  <p>6.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением п.п. 5.2. и 5.3. настоящей Политики Конфиденциальности.</p>
  <p>6.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, обычно используемого для защиты такого рода информации в существующем деловом обороте.</p>
  <p>6.2.4. Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.</p>
  <h4>7. ОТВЕТСТВЕННОСТЬ СТОРОН</h4>
  <p>7.1. Администрация сайта, не исполнившая свои обязательства, несет ответственность в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации, за исключением случаев, предусмотренных п.п. 5.2., 5.3. и 7.2. настоящей Политики Конфиденциальности.</p>
  <p>7.2. В случае утраты или разглашения Конфиденциальной информации Администрация сайта не несет ответственность, если данная конфиденциальная информация:</p>
  <p>7.2.1. Стала публичным достоянием до ее утраты или разглашения;</p>
  <p>7.2.2. Была получена от третьей стороны до момента ее получения Администрацией сайта;</p>
  <p>7.2.3. Была разглашена с согласия Пользователя.</p>
  <h4>8. РАЗРЕШЕНИЕ СПОРОВ</h4>
  <p>8.1. До обращения в суд с иском по спорам, возникающим из отношений между Пользователем сайта www.expert-shin.ru и Администрацией сайта, обязательным является предъявление претензии (письменного предложения о добровольном урегулировании спора).</p>
  <p>8.2. Получатель претензии в течение 30 календарных дней со дня получения претензии письменно уведомляет заявителя претензии о результатах рассмотрения претензии.</p>
  <p>8.3. При не достижении общего соглашения спор будет передан на рассмотрение в судебный орган в соответствии с действующим законодательством Российской Федерации.</p>
  <p>8.4. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией сайта применяется действующее законодательство Российской Федерации.</p>
  <h4>9. ДОПОЛНИТЕЛЬНЫЕ УСЛОВИЯ</h4>
  <p>9.1. Администрация сайта вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.</p>
  <p>9.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на сайте www.expert-shin.ru, если иное не предусмотрено новой редакцией Политики конфиденциальности.</p>
  </div><!--/.container-->
</div><!--/.modal-->


</div><!--/.d-none-->


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- plugins -->
<script src="/assets/bxslider/dist/jquery.bxslider.min.js"></script>
<script src="/assets/Inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="/assets/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="/assets/modernizr/modernizr-mq.js"></script>

<!-- script -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script type="text/javascript">
window.mapConfig = {
  center: {
    coor: [55.89014789787956,37.628656967117294],
    zoom: 12
  },
  address: [
    {
      mapCenterCoor: [55.8991919850342,37.604063105740096],
      iconCoor: [55.8991919850342,37.604063105740096],
      hintContent: 'Expert Shin',
      balloonContent: 'Москва,<br>ул. Лескова, 9г<br>Телефон<br><strong>+7 495 507-21-33</strong><br>Работаем ежедневно<br><strong>с 9:00 до 23:00</strong>'
    },
    {
      mapCenterCoor: [55.87651641443169,37.66191767294684],
      iconCoor: [55.87651641443169,37.66191767294684],
      hintContent: 'Expert Shin',
      balloonContent: 'Москва,<br>ул. Олонецкий проезд, 14<br>Телефон<br><strong>+7 903 611-83-33</strong><br>Работаем ежедневно<br><strong>с 9:00 до 23:00</strong>'
    }
  ],
  placemark: {
    iconUrl: '/img/map.svg?v=001',
    iconSize: [32, 48],
    iconOffset: [-16, -48]
  }
};
</script>
<script src="/js/main.js?v=010"></script>

</body>
</html>