
  <!-- ===== service-area start ===== -->
  <section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6><?php $sks = array_search('Services',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></h6>
              <h2 class="fw-bold"><?php 
              $sks = array_search('OurBestServices',$general,true);  if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></h2>
              <p>
                <?php $sks = array_search('our_servicestext',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->

    @if($services)
    <div class="container">
      <div class="row">

        @foreach($services as $itm=>$service)
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni {{$service->icon}}"></i>
            </div>
            <div class="service-content">
              <h4>{{$service->title}}</h4>
              <p>
                {{$service->desc_service}}
              </p>
            </div>
          </div>
        </div>
       @endforeach
      </div>
    </div>
    @endif
  </section>
  <!-- ===== service-area end ===== -->
