

  <!-- Start Latest News Area -->
  <div id="blog" class="latest-news-area section" style="background-color: #e1e1e1;">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
  <h6><?php $sks = array_search('Blog',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></h6>
              <h2 class="fw-bold"><?php 
              $sks = array_search('lastnew_title',$general,true);  if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?></h2>
              <p>
                <?php $sks = array_search('lastnew_text',$general,true); if ($sks !== false) {
 echo   $homedata[$sks]->valueoftext ;}?>
              </p>

            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>

    @if($newsblog)
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
@foreach($newsblog as $is => $news)
      <div class="col-lg-4 col-md-6 col-12">
          <!-- Single News -->
          <div class="single-news">
            <div class="image">
              <a href="javascript:void(0)"><img class="thumb" src="{{ asset('site/images/blog/'.$news->img_news)}}" alt="{{$news->name}}" /></a>
             @if($news->byname) 
             <div class="meta-details">
                <img class="thumb" src="{{ asset('site/images/blog/'.$news->img_news)}}" alt="Author {{$news->byname}}" />
                <span>{{$news->byname}}</span>
              </div>
            </div>
            @endif
            <div class="content-body">
              <h4 class="title">
                <a href="javascript:void(0)"> {{$news->title}} </a>
              </h4>
              <p>
                {{$news->desc_news}}
              </p>
            </div>
          </div>
          <!-- End Single News -->
        </div>
@endforeach

      </div>
    </div>
    @endif
  </div>
  <!-- End Latest News Area -->