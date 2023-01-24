<?php if($slider ){?>
  <!-- Start header Area -->
  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>{{$slider->title}}</h1>
            <p>
             {!!$slider->desc_slide!!}
            </p>
            @if($slider->urlvideo)
            <div class="button">
              <a href="{{$slider->urlvideo}}"
                class="glightbox video-button">
                <span class="btn icon-btn rounded-full">
                  <i class="lni lni-play"></i>
                </span>
                <span class="text"><?php $sks = array_search('Watch_Intro',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></span>
              </a>
            </div>
            @endif
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="<?= asset('site/images/'.$slider->img)?>" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
  <!-- End header Area -->