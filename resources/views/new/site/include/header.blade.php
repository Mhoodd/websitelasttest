 <!--====== NAVBAR NINE PART START ======-->

  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
              @if($Logo && $Logo->fileupload)
              <img src="{{ asset('img/logo/'.$Logo->fileupload) }}" alt="Logo" />
              @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="#hero-area"><?php $sks = array_search('Home',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#services"><?php $sks = array_search('Services',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></a>
                </li>

                <li class="nav-item">
                  <a class="page-scroll" href="#blog"><?php $sks = array_search('Blog',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#contact"><?php $sks = array_search('Contact',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!--====== NAVBAR NINE PART ENDS ======-->
