<?php

$this->title = 'Наши работы';

?>

<?= $this->render('-slider') ?>

<section class="section">
  <div class="container">
    <h2 class="title text-center">Наши работы</h2>
    <div class="row justify-content-around">
      <div class="col-12 col-sm-6 col-lg-5">
        <p class="text text-center fwgt-700 em-15">До</p>
        <div class="js-gslider">
          <div class="js-gslider-slides">
            <a data-fancybox="gallery" href="img/work-4-1.jpg">
              <img class="gslide-img" width="640" height="640" src="img/work-md-4-1.jpg">
            </a>
            <a data-fancybox="gallery" href="img/work-5-1.jpg">
              <img class="gslide-img" width="640" height="640" src="img/work-md-5-1.jpg">
            </a>
            <a data-fancybox="gallery" href="img/work-6-1.jpg">
              <img class="gslide-img" width="640" height="640" src="img/work-md-6-1.jpg">
            </a>
          </div><!--/.js-gslider-slides-->
          <div class="gslide-thwrap">
            <div class="gslide-thwrap-col">
              <img class="gslide-thimg js-gslider-thumb" data-index="0" width="150" height="150" src="img/work-th-4-1.jpg">
            </div>
            <div class="gslide-thwrap-col">
              <img class="gslide-thimg js-gslider-thumb" data-index="1" width="150" height="150" src="img/work-th-5-1.jpg">
            </div>
            <div class="gslide-thwrap-col">
              <img class="gslide-thimg js-gslider-thumb" data-index="2" width="150" height="150" src="img/work-th-6-1.jpg">
            </div>
          </div><!--/.gslide-thwrap-->
        </div><!--/.gslide-->
      </div><!--/.col-->
      <div class="col-12 col-sm-6 col-lg-5">
        <p class="text text-center fwgt-700 em-15">После</p>
        <div class="js-gslider">
          <div class="js-gslider-slides">
            <a data-fancybox="gallery" href="img/work-4-2.jpg">
              <img class="gslide-img" width="640" height="640" src="img/work-md-4-2.jpg">
            </a>
            <a data-fancybox="gallery" href="img/work-5-2.jpg">
              <img class="gslide-img" width="640" height="640" src="img/work-md-5-2.jpg">
            </a>
            <a data-fancybox="gallery" href="img/work-6-2.jpg">
              <img class="gslide-img" width="640" height="640" src="img/work-md-6-2.jpg">
            </a>
          </div><!--/.js-gslider-slides-->
          <div class="gslide-thwrap">
            <div class="gslide-thwrap-col">
              <img class="gslide-thimg js-gslider-thumb" data-index="0" width="150" height="150" src="img/work-th-4-2.jpg">
            </div>
            <div class="gslide-thwrap-col">
              <img class="gslide-thimg js-gslider-thumb" data-index="1" width="150" height="150" src="img/work-th-5-2.jpg">
            </div>
            <div class="gslide-thwrap-col">
              <img class="gslide-thimg js-gslider-thumb" data-index="2" width="150" height="150" src="img/work-th-6-2.jpg">
            </div>
          </div><!--/.gslide-thwrap-->
        </div><!--/.gslide-->
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.section-->