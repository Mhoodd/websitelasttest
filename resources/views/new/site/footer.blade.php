
  <!-- Start Footer Area -->
  <footer class="footer-area footer-eleven call-action">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-about">
                <div class="logo">
                  <a href="index.html">
                    @if($Logo_footer && $Logo_footer->fileupload)
              <img src="{{ asset('img/logo/'.$Logo_footer->fileupload) }}" alt="Logo" />
              @endif
                  </a>
                </div>
                <p class=" text-white">
                 <?php $sks = array_search('footer_text',$general,true); if ($sks !== false) {?>
   {!!$homedata[$sks]->valueoftext!!} <?php }?>
                </p>
                <p class="copyright-text text-white">
                  <span><?php $sks = array_search('footer_copyright',$general,true); if ($sks !== false) {?>
   {!!$homedata[$sks]->valueoftext!!} <?php }?></span>
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
  </footer>
  <!--/ End Footer Area -->