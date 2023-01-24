

  <!-- ========================= contact-section start ========================= -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="contact-item-wrapper">
            <div class="row">
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-phone"></i>
                  </div>
                  <div class="contact-content">
                    <h4><?php $sks = array_search('Contact',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></h4>
                    <p><?php $sks = array_search('contact_phone',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></p>
                    <p><?php $sks = array_search('contact_email',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="contact-content">
                    <h4><?php $sks = array_search('address_word',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></h4>
                   <?php $sks = array_search('address_text',$general,true); if ($sks !== false) {?>
   {!!$homedata[$sks]->valueoftext!!} <?php }?>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-alarm-clock"></i>
                  </div>
                  <div class="contact-content">
                    <h4><?php $sks = array_search('Schedule_word',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></h4>
                  <?php $sks = array_search('Schedule_text',$general,true); if ($sks !== false) {?>
   {!!$homedata[$sks]->valueoftext!!} <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="contact-form-wrapper">
            <div class="row">
              <div class="col-xl-10 col-lg-8 mx-auto">
                <div class="section-title text-center">
                  <span> <?php $sks = array_search('Get_toch',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?> </span>
                  <h2>
                    <?php $sks = array_search('readytostart',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>
                  </h2>
                  <p>
                   <?php $sks = array_search('readytostartdescription',$general,true); if ($sks !== false) {?>
   {!!$homedata[$sks]->valueoftext!!} <?php }?>
                  </p>
                </div>
              </div>
            </div>
            @include('new.admin.include.message')
            <form action="{{route('addcontactsdata')}}" method="POST" class="contact-form">
              @csrf


              <input type="hidden" name="ipandserver" 
              value="<?= json_encode($_SERVER)?>">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" value="{{old('name')}}" name="name" id="name" placeholder="<?php $sks = array_search('Name',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>" required />
                </div>
                <div class="col-md-6">
                  <input type="email" value="{{old('email')}}" name="email" id="email" placeholder="<?php $sks = array_search('email',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" value="{{old('phone')}}" name="phone" id="phone" placeholder="<?php $sks = array_search('Phone',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>" required />
                </div>
                <div class="col-md-6">
                  <input type="text" value="{{old('subject')}}" name="subject" id="subject" placeholder="<?php $sks = array_search('subject',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>" required />
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <textarea name="message" id="message" value="{{old('message')}}" placeholder="<?php $sks = array_search('message',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>" rows="5">{{old('message')}}</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="button text-center rounded-buttons">
                    <button type="submit" class="btn primary-btn rounded-full">
                      <?php $sks = array_search('sendmessage',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= contact-section end ========================= -->