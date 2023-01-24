@extends('new.admin.layouts.main') 
@section('title', 'Edit services')
@section('content')

  @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote-bs4.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/mohithg-switchery/dist/switchery.min.css') }}">

    @endpush
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Services')}}</h5>
                            <span>{{ __('Edit Services')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{ __('Servicess')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Services')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Services')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('editservicesdata',$servicedata->id) }}" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group" >
                                <label for="inputname">{{ __('Name')}}</label>
                                <input type="text"  id="inputname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $servicedata->name }}"placeholder="name" required autocomplete="name" autofocus>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group" >
                                <label for="isavisable">{{ __('Active')}}</label>
                                <input type="checkbox"  id="isavisable" class=" js-single  @error('isavisable') is-invalid @enderror" name="isavisable" <?php if(@$servicedata->isavisable == 1){echo"checked";} ?> /> 
                               
                            </div>
                            <div class="form-group ">
                                        <label for="selectlang">{{ __('Lang')}}</label>
                                        <select class="form-control @error('lang') is-invalid @enderror"  name="lang" value="{{$servicedata->lang }}" placeholder="lang" required autocomplete="lang"  id="selectlang">
                                            <option <?php if($servicedata->lang == 1){echo"selected";} ?> value="1">{{ __('English')}}</option>
                                            <option <?php if($servicedata->lang == 2){echo"selected";} ?> value="2">{{ __('العربية')}}</option>
                                        </select>
                                         @error('lang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                            
                            <div class="form-group">
                                <label for="inputTitle">{{ __('Title')}}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value="{{ $servicedata->title }}" placeholder="title"  autocomplete="title" id="inputTitle" >
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Descriptioninput">{{ __('Description')}}</label>
	<textarea class="form-control html-editor  @error('desc') is-invalid @enderror"  name="desc" value="" placeholder="desc"  autocomplete="desc"  id="Descriptioninput" rows="4">{{$servicedata->desc_service }}</textarea>
	    @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            
                      <div class="form-group">
    <label for="icon">{{ __('icon')}} <i class="lni {{$servicedata->icon }}"></i></label>

                             <select id="icon" name="icon" class="form-control" style='font-family: "LineIcons"!important; font-size: x-large;'>
                <option selected value="{{$servicedata->icon }}">not change</option>                
<option value='lni-500px'> &#xea03; lni-500px
</option> <option value='lni-add-files'> &#xea01; lni-add-files
</option> <option value='lni-adobe'> &#xea06; lni-adobe
</option> <option value='lni-agenda'> &#xea02; lni-agenda
</option> <option value='lni-airbnb'> &#xea07; lni-airbnb
</option> <option value='lni-alarm-clock'> &#xea08; lni-alarm-clock
</option> <option value='lni-alarm'> &#xea04; lni-alarm
</option> <option value='lni-amazon-original'> &#xea05; lni-amazon-original
</option> <option value='lni-amazon-pay'> &#xea09; lni-amazon-pay
</option> <option value='lni-amazon'> &#xea0a; lni-amazon
</option> <option value='lni-ambulance'> &#xea0b; lni-ambulance
</option> <option value='lni-amex'> &#xea0c; lni-amex
</option> <option value='lni-anchor'> &#xea0d; lni-anchor
</option> <option value='lni-android-original'> &#xea0e; lni-android-original
</option> <option value='lni-android'> &#xea0f; lni-android
</option> <option value='lni-angellist'> &#xea10; lni-angellist
</option> <option value='lni-angle-double-down'> &#xea11; lni-angle-double-down
</option> <option value='lni-angle-double-left'> &#xea12; lni-angle-double-left
</option> <option value='lni-angle-double-right'> &#xea13; lni-angle-double-right
</option> <option value='lni-angle-double-up'> &#xea14; lni-angle-double-up
</option> <option value='lni-angular'> &#xea15; lni-angular
</option> <option value='lni-apartment'> &#xea16; lni-apartment
</option> <option value='lni-app-store'> &#xea17; lni-app-store
</option> <option value='lni-apple-music'> &#xea18; lni-apple-music
</option> <option value='lni-apple-pay'> &#xea19; lni-apple-pay
</option> <option value='lni-apple'> &#xea1a; lni-apple
</option> <option value='lni-archive'> &#xea1f; lni-archive
</option> <option value='lni-arrow-down-circle'> &#xea1b; lni-arrow-down-circle
</option> <option value='lni-arrow-down'> &#xea1c; lni-arrow-down
</option> <option value='lni-arrow-left-circle'> &#xea1d; lni-arrow-left-circle
</option> <option value='lni-arrow-left'> &#xea1e; lni-arrow-left
</option> <option value='lni-arrow-right-circle'> &#xea20; lni-arrow-right-circle
</option> <option value='lni-arrow-right'> &#xea21; lni-arrow-right
</option> <option value='lni-arrow-top-left'> &#xea22; lni-arrow-top-left
</option> <option value='lni-arrow-top-right'> &#xea23; lni-arrow-top-right
</option> <option value='lni-arrow-up-circle'> &#xea24; lni-arrow-up-circle
</option> <option value='lni-arrow-up'> &#xea25; lni-arrow-up
</option> <option value='lni-arrows-horizontal'> &#xea26; lni-arrows-horizontal
</option> <option value='lni-arrows-vertical'> &#xea27; lni-arrows-vertical
</option> <option value='lni-atlassian'> &#xea28; lni-atlassian
</option> <option value='lni-aws'> &#xea29; lni-aws
</option> <option value='lni-azure'> &#xea2a; lni-azure
</option> <option value='lni-backward'> &#xea2b; lni-backward
</option> <option value='lni-baloon'> &#xea2c; lni-baloon
</option> <option value='lni-ban'> &#xea2d; lni-ban
</option> <option value='lni-bar-chart'> &#xea2e; lni-bar-chart
</option> <option value='lni-basketball'> &#xea2f; lni-basketball
</option> <option value='lni-behance-original'> &#xea30; lni-behance-original
</option> <option value='lni-behance'> &#xea31; lni-behance
</option> <option value='lni-bi-cycle'> &#xea32; lni-bi-cycle
</option> <option value='lni-bitbucket'> &#xea33; lni-bitbucket
</option> <option value='lni-bitcoin'> &#xea34; lni-bitcoin
</option> <option value='lni-blackboard'> &#xea35; lni-blackboard
</option> <option value='lni-blogger'> &#xea36; lni-blogger
</option> <option value='lni-bluetooth-original'> &#xea37; lni-bluetooth-original
</option> <option value='lni-bluetooth'> &#xea38; lni-bluetooth
</option> <option value='lni-bold'> &#xea39; lni-bold
</option> <option value='lni-bolt-alt'> &#xea3a; lni-bolt-alt
</option> <option value='lni-bolt'> &#xea40; lni-bolt
</option> <option value='lni-book'> &#xea3b; lni-book
</option> <option value='lni-bookmark-alt'> &#xea3c; lni-bookmark-alt
</option> <option value='lni-bookmark'> &#xea3d; lni-bookmark
</option> <option value='lni-bootstrap'> &#xea3e; lni-bootstrap
</option> <option value='lni-bricks'> &#xea3f; lni-bricks
</option> <option value='lni-bridge'> &#xea41; lni-bridge
</option> <option value='lni-briefcase'> &#xea42; lni-briefcase
</option> <option value='lni-brush-alt'> &#xea43; lni-brush-alt
</option> <option value='lni-brush'> &#xea44; lni-brush
</option> <option value='lni-btc'> &#xea45; lni-btc
</option> <option value='lni-bubble'> &#xea46; lni-bubble
</option> <option value='lni-bug'> &#xea47; lni-bug
</option> <option value='lni-bulb'> &#xea48; lni-bulb
</option> <option value='lni-bullhorn'> &#xea49; lni-bullhorn
</option> <option value='lni-burger'> &#xea4a; lni-burger
</option> <option value='lni-bus'> &#xea4b; lni-bus
</option> <option value='lni-cake'> &#xea4c; lni-cake
</option> <option value='lni-calculator'> &#xea4d; lni-calculator
</option> <option value='lni-calendar'> &#xea4e; lni-calendar
</option> <option value='lni-camera'> &#xea4f; lni-camera
</option> <option value='lni-candy-cane'> &#xea50; lni-candy-cane
</option> <option value='lni-candy'> &#xea51; lni-candy
</option> <option value='lni-capsule'> &#xea52; lni-capsule
</option> <option value='lni-car-alt'> &#xea53; lni-car-alt
</option> <option value='lni-car'> &#xea54; lni-car
</option> <option value='lni-caravan'> &#xea55; lni-caravan
</option> <option value='lni-cart-full'> &#xea56; lni-cart-full
</option> <option value='lni-cart'> &#xea57; lni-cart
</option> <option value='lni-certificate'> &#xea58; lni-certificate
</option> <option value='lni-check-box'> &#xea59; lni-check-box
</option> <option value='lni-checkmark-circle'> &#xea5a; lni-checkmark-circle
</option> <option value='lni-checkmark'> &#xea5b; lni-checkmark
</option> <option value='lni-chef-hat'> &#xea5c; lni-chef-hat
</option> <option value='lni-chevron-down-circle'> &#xea5d; lni-chevron-down-circle
</option> <option value='lni-chevron-down'> &#xea5e; lni-chevron-down
</option> <option value='lni-chevron-left-circle'> &#xea5f; lni-chevron-left-circle
</option> <option value='lni-chevron-left'> &#xea60; lni-chevron-left
</option> <option value='lni-chevron-right-circle'> &#xea61; lni-chevron-right-circle
</option> <option value='lni-chevron-right'> &#xea62; lni-chevron-right
</option> <option value='lni-chevron-up-circle'> &#xea63; lni-chevron-up-circle
</option> <option value='lni-chevron-up'> &#xea64; lni-chevron-up
</option> <option value='lni-chrome'> &#xea65; lni-chrome
</option> <option value='lni-chromecast'> &#xea66; lni-chromecast
</option> <option value='lni-circle-minus'> &#xea67; lni-circle-minus
</option> <option value='lni-circle-plus'> &#xea68; lni-circle-plus
</option> <option value='lni-clipboard'> &#xea69; lni-clipboard
</option> <option value='lni-close'> &#xea6a; lni-close
</option> <option value='lni-cloud-check'> &#xea6b; lni-cloud-check
</option> <option value='lni-cloud-download'> &#xea6c; lni-cloud-download
</option> <option value='lni-cloud-network'> &#xea6d; lni-cloud-network
</option> <option value='lni-cloud-sync'> &#xea6e; lni-cloud-sync
</option> <option value='lni-cloud-upload'> &#xea6f; lni-cloud-upload
</option> <option value='lni-cloud'> &#xea70; lni-cloud
</option> <option value='lni-cloudflare'> &#xea71; lni-cloudflare
</option> <option value='lni-cloudy-sun'> &#xea72; lni-cloudy-sun
</option> <option value='lni-code-alt'> &#xea73; lni-code-alt
</option> <option value='lni-code'> &#xea74; lni-code
</option> <option value='lni-codepen'> &#xea75; lni-codepen
</option> <option value='lni-coffee-cup'> &#xea76; lni-coffee-cup
</option> <option value='lni-cog'> &#xea77; lni-cog
</option> <option value='lni-cogs'> &#xea78; lni-cogs
</option> <option value='lni-coin'> &#xea79; lni-coin
</option> <option value='lni-comments-alt'> &#xea7a; lni-comments-alt
</option> <option value='lni-comments-reply'> &#xea7b; lni-comments-reply
</option> <option value='lni-comments'> &#xea7c; lni-comments
</option> <option value='lni-compass'> &#xea7d; lni-compass
</option> <option value='lni-connectdevelop'> &#xea7e; lni-connectdevelop
</option> <option value='lni-construction-hammer'> &#xea7f; lni-construction-hammer
</option> <option value='lni-construction'> &#xea80; lni-construction
</option> <option value='lni-consulting'> &#xea81; lni-consulting
</option> <option value='lni-control-panel'> &#xea82; lni-control-panel
</option> <option value='lni-cool'> &#xea83; lni-cool
</option> <option value='lni-cpanel'> &#xea84; lni-cpanel
</option> <option value='lni-creative-commons'> &#xea85; lni-creative-commons
</option> <option value='lni-credit-cards'> &#xea86; lni-credit-cards
</option> <option value='lni-crop'> &#xea87; lni-crop
</option> <option value='lni-cross-circle'> &#xea88; lni-cross-circle
</option> <option value='lni-crown'> &#xea89; lni-crown
</option> <option value='lni-css3'> &#xea8a; lni-css3
</option> <option value='lni-cup'> &#xea8b; lni-cup
</option> <option value='lni-customer'> &#xea8c; lni-customer
</option> <option value='lni-cut'> &#xea8d; lni-cut
</option> <option value='lni-dashboard'> &#xea8e; lni-dashboard
</option> <option value='lni-database'> &#xea8f; lni-database
</option> <option value='lni-delivery'> &#xea90; lni-delivery
</option> <option value='lni-dev'> &#xea91; lni-dev
</option> <option value='lni-diamond-alt'> &#xea92; lni-diamond-alt
</option> <option value='lni-diamond'> &#xea93; lni-diamond
</option> <option value='lni-digitalocean'> &#xea94; lni-digitalocean
</option> <option value='lni-diners-club'> &#xea95; lni-diners-club
</option> <option value='lni-dinner'> &#xea96; lni-dinner
</option> <option value='lni-direction-alt'> &#xea97; lni-direction-alt
</option> <option value='lni-direction-ltr'> &#xea98; lni-direction-ltr
</option> <option value='lni-direction-rtl'> &#xea99; lni-direction-rtl
</option> <option value='lni-direction'> &#xea9a; lni-direction
</option> <option value='lni-discord'> &#xea9b; lni-discord
</option> <option value='lni-discover'> &#xea9c; lni-discover
</option> <option value='lni-display-alt'> &#xea9d; lni-display-alt
</option> <option value='lni-display'> &#xea9e; lni-display
</option> <option value='lni-docker'> &#xea9f; lni-docker
</option> <option value='lni-dollar'> &#xeaa0; lni-dollar
</option> <option value='lni-domain'> &#xeaa1; lni-domain
</option> <option value='lni-download'> &#xeaa2; lni-download
</option> <option value='lni-dribbble'> &#xeaa3; lni-dribbble
</option> <option value='lni-drop'> &#xeaa4; lni-drop
</option> <option value='lni-dropbox-original'> &#xeaa5; lni-dropbox-original
</option> <option value='lni-dropbox'> &#xeaa6; lni-dropbox
</option> <option value='lni-drupal-original'> &#xeaa7; lni-drupal-original
</option> <option value='lni-drupal'> &#xeaa8; lni-drupal
</option> <option value='lni-dumbbell'> &#xeaa9; lni-dumbbell
</option> <option value='lni-edge'> &#xeaaa; lni-edge
</option> <option value='lni-empty-file'> &#xeaab; lni-empty-file
</option> <option value='lni-enter'> &#xeaac; lni-enter
</option> <option value='lni-envato'> &#xeaad; lni-envato
</option> <option value='lni-envelope'> &#xeaae; lni-envelope
</option> <option value='lni-eraser'> &#xeaaf; lni-eraser
</option> <option value='lni-euro'> &#xeab0; lni-euro
</option> <option value='lni-exit-down'> &#xeab1; lni-exit-down
</option> <option value='lni-exit-up'> &#xeab2; lni-exit-up
</option> <option value='lni-exit'> &#xeab3; lni-exit
</option> <option value='lni-eye'> &#xeab4; lni-eye
</option> <option value='lni-facebook-filled'> &#xeab5; lni-facebook-filled
</option> <option value='lni-facebook-messenger'> &#xeab6; lni-facebook-messenger
</option> <option value='lni-facebook-original'> &#xeab7; lni-facebook-original
</option> <option value='lni-facebook-oval'> &#xeab8; lni-facebook-oval
</option> <option value='lni-facebook'> &#xeab9; lni-facebook
</option> <option value='lni-figma'> &#xeaba; lni-figma
</option> <option value='lni-files'> &#xeabb; lni-files
</option> <option value='lni-firefox-original'> &#xeabc; lni-firefox-original
</option> <option value='lni-firefox'> &#xeabd; lni-firefox
</option> <option value='lni-fireworks'> &#xeabe; lni-fireworks
</option> <option value='lni-first-aid'> &#xeabf; lni-first-aid
</option> <option value='lni-flag-alt'> &#xeac0; lni-flag-alt
</option> <option value='lni-flag'> &#xeac1; lni-flag
</option> <option value='lni-flags'> &#xeac2; lni-flags
</option> <option value='lni-flickr'> &#xeac3; lni-flickr
</option> <option value='lni-flower'> &#xeac4; lni-flower
</option> <option value='lni-folder'> &#xeac5; lni-folder
</option> <option value='lni-forward'> &#xeac6; lni-forward
</option> <option value='lni-frame-expand'> &#xeac7; lni-frame-expand
</option> <option value='lni-fresh-juice'> &#xeac8; lni-fresh-juice
</option> <option value='lni-friendly'> &#xeac9; lni-friendly
</option> <option value='lni-full-screen'> &#xeaca; lni-full-screen
</option> <option value='lni-funnel'> &#xeacb; lni-funnel
</option> <option value='lni-gallery'> &#xeacc; lni-gallery
</option> <option value='lni-game'> &#xeacd; lni-game
</option> <option value='lni-gatsby'> &#xeace; lni-gatsby
</option> <option value='lni-gift'> &#xeacf; lni-gift
</option> <option value='lni-git'> &#xead0; lni-git
</option> <option value='lni-github-original'> &#xead1; lni-github-original
</option> <option value='lni-github'> &#xead2; lni-github
</option> <option value='lni-goodreads'> &#xead3; lni-goodreads
</option> <option value='lni-google-drive'> &#xead4; lni-google-drive
</option> <option value='lni-google-pay'> &#xead5; lni-google-pay
</option> <option value='lni-google-wallet'> &#xead6; lni-google-wallet
</option> <option value='lni-google'> &#xead7; lni-google
</option> <option value='lni-graduation'> &#xead8; lni-graduation
</option> <option value='lni-graph'> &#xead9; lni-graph
</option> <option value='lni-grid-alt'> &#xeada; lni-grid-alt
</option> <option value='lni-grid'> &#xeadb; lni-grid
</option> <option value='lni-grow'> &#xeadc; lni-grow
</option> <option value='lni-hacker-news'> &#xeadd; lni-hacker-news
</option> <option value='lni-hammer'> &#xeade; lni-hammer
</option> <option value='lni-hand'> &#xeadf; lni-hand
</option> <option value='lni-handshake'> &#xeae0; lni-handshake
</option> <option value='lni-happy'> &#xeae1; lni-happy
</option> <option value='lni-harddrive'> &#xeae2; lni-harddrive
</option> <option value='lni-headphone-alt'> &#xeae3; lni-headphone-alt
</option> <option value='lni-headphone'> &#xeae4; lni-headphone
</option> <option value='lni-heart-filled'> &#xeae5; lni-heart-filled
</option> <option value='lni-heart-monitor'> &#xeae6; lni-heart-monitor
</option> <option value='lni-heart'> &#xeae7; lni-heart
</option> <option value='lni-helicopter'> &#xeae8; lni-helicopter
</option> <option value='lni-helmet'> &#xeae9; lni-helmet
</option> <option value='lni-help'> &#xeaea; lni-help
</option> <option value='lni-highlight-alt'> &#xeaeb; lni-highlight-alt
</option> <option value='lni-highlight'> &#xeaec; lni-highlight
</option> <option value='lni-home'> &#xeaed; lni-home
</option> <option value='lni-hospital'> &#xeaee; lni-hospital
</option> <option value='lni-hourglass'> &#xeaef; lni-hourglass
</option> <option value='lni-html5'> &#xeaf0; lni-html5
</option> <option value='lni-image'> &#xeaf1; lni-image
</option> <option value='lni-imdb'> &#xeaf2; lni-imdb
</option> <option value='lni-inbox'> &#xeaf3; lni-inbox
</option> <option value='lni-indent-decrease'> &#xeaf4; lni-indent-decrease
</option> <option value='lni-indent-increase'> &#xeaf5; lni-indent-increase
</option> <option value='lni-infinite'> &#xeaf6; lni-infinite
</option> <option value='lni-information'> &#xeaf7; lni-information
</option> <option value='lni-instagram-filled'> &#xeaf8; lni-instagram-filled
</option> <option value='lni-instagram-original'> &#xeaf9; lni-instagram-original
</option> <option value='lni-instagram'> &#xeafa; lni-instagram
</option> <option value='lni-invention'> &#xeafb; lni-invention
</option> <option value='lni-invest-monitor'> &#xeafc; lni-invest-monitor
</option> <option value='lni-investment'> &#xeafd; lni-investment
</option> <option value='lni-island'> &#xeafe; lni-island
</option> <option value='lni-italic'> &#xeaff; lni-italic
</option> <option value='lni-java'> &#xeb00; lni-java
</option> <option value='lni-javascript'> &#xeb01; lni-javascript
</option> <option value='lni-jcb'> &#xeb02; lni-jcb
</option> <option value='lni-joomla-original'> &#xeb03; lni-joomla-original
</option> <option value='lni-joomla'> &#xeb04; lni-joomla
</option> <option value='lni-jsfiddle'> &#xeb05; lni-jsfiddle
</option> <option value='lni-juice'> &#xeb06; lni-juice
</option> <option value='lni-key'> &#xeb07; lni-key
</option> <option value='lni-keyboard'> &#xeb08; lni-keyboard
</option> <option value='lni-keyword-research'> &#xeb09; lni-keyword-research
</option> <option value='lni-laptop-phone'> &#xeb0a; lni-laptop-phone
</option> <option value='lni-laptop'> &#xeb0b; lni-laptop
</option> <option value='lni-laravel'> &#xeb0c; lni-laravel
</option> <option value='lni-layers'> &#xeb0d; lni-layers
</option> <option value='lni-layout'> &#xeb0e; lni-layout
</option> <option value='lni-leaf'> &#xeb0f; lni-leaf
</option> <option value='lni-library'> &#xeb10; lni-library
</option> <option value='lni-license'> &#xeb11; lni-license
</option> <option value='lni-lifering'> &#xeb12; lni-lifering
</option> <option value='lni-line-dashed'> &#xeb13; lni-line-dashed
</option> <option value='lni-line-dotted'> &#xeb14; lni-line-dotted
</option> <option value='lni-line-double'> &#xeb15; lni-line-double
</option> <option value='lni-line-spacing'> &#xeb16; lni-line-spacing
</option> <option value='lni-line'> &#xeb17; lni-line
</option> <option value='lni-lineicons-alt'> &#xeb18; lni-lineicons-alt
</option> <option value='lni-lineicons'> &#xeb19; lni-lineicons
</option> <option value='lni-link'> &#xeb1a; lni-link
</option> <option value='lni-linkedin-original'> &#xeb1b; lni-linkedin-original
</option> <option value='lni-linkedin'> &#xeb1c; lni-linkedin
</option> <option value='lni-list'> &#xeb1d; lni-list
</option> <option value='lni-lock-alt'> &#xeb1e; lni-lock-alt
</option> <option value='lni-lock'> &#xeb1f; lni-lock
</option> <option value='lni-magento'> &#xeb20; lni-magento
</option> <option value='lni-magnet'> &#xeb21; lni-magnet
</option> <option value='lni-magnifier'> &#xeb22; lni-magnifier
</option> <option value='lni-mailchimp'> &#xeb23; lni-mailchimp
</option> <option value='lni-map-marker'> &#xeb24; lni-map-marker
</option> <option value='lni-map'> &#xeb25; lni-map
</option> <option value='lni-markdown'> &#xeb26; lni-markdown
</option> <option value='lni-mashroom'> &#xeb27; lni-mashroom
</option> <option value='lni-mastercard'> &#xeb28; lni-mastercard
</option> <option value='lni-medium'> &#xeb29; lni-medium
</option> <option value='lni-menu'> &#xeb2a; lni-menu
</option> <option value='lni-mic'> &#xeb2b; lni-mic
</option> <option value='lni-microphone'> &#xeb2c; lni-microphone
</option> <option value='lni-microscope'> &#xeb2d; lni-microscope
</option> <option value='lni-microsoft-edge'> &#xeb2e; lni-microsoft-edge
</option> <option value='lni-microsoft'> &#xeb2f; lni-microsoft
</option> <option value='lni-minus'> &#xeb30; lni-minus
</option> <option value='lni-mobile'> &#xeb31; lni-mobile
</option> <option value='lni-money-location'> &#xeb32; lni-money-location
</option> <option value='lni-money-protection'> &#xeb33; lni-money-protection
</option> <option value='lni-more-alt'> &#xeb34; lni-more-alt
</option> <option value='lni-more'> &#xeb35; lni-more
</option> <option value='lni-mouse'> &#xeb36; lni-mouse
</option> <option value='lni-move'> &#xeb37; lni-move
</option> <option value='lni-music'> &#xeb38; lni-music
</option> <option value='lni-netlify'> &#xeb39; lni-netlify
</option> <option value='lni-network'> &#xeb3a; lni-network
</option> <option value='lni-night'> &#xeb3b; lni-night
</option> <option value='lni-nodejs-alt'> &#xeb3c; lni-nodejs-alt
</option> <option value='lni-nodejs'> &#xeb3d; lni-nodejs
</option> <option value='lni-notepad'> &#xeb3e; lni-notepad
</option> <option value='lni-npm'> &#xeb3f; lni-npm
</option> <option value='lni-offer'> &#xeb40; lni-offer
</option> <option value='lni-opera'> &#xeb41; lni-opera
</option> <option value='lni-package'> &#xeb42; lni-package
</option> <option value='lni-page-break'> &#xeb43; lni-page-break
</option> <option value='lni-pagination'> &#xeb44; lni-pagination
</option> <option value='lni-paint-bucket'> &#xeb45; lni-paint-bucket
</option> <option value='lni-paint-roller'> &#xeb46; lni-paint-roller
</option> <option value='lni-pallet'> &#xeb47; lni-pallet
</option> <option value='lni-paperclip'> &#xeb48; lni-paperclip
</option> <option value='lni-patreon'> &#xeb49; lni-patreon
</option> <option value='lni-pause'> &#xeb4a; lni-pause
</option> <option value='lni-paypal-original'> &#xeb4b; lni-paypal-original
</option> <option value='lni-paypal'> &#xeb4c; lni-paypal
</option> <option value='lni-pencil-alt'> &#xeb4d; lni-pencil-alt
</option> <option value='lni-pencil'> &#xeb4e; lni-pencil
</option> <option value='lni-phone-set'> &#xeb4f; lni-phone-set
</option> <option value='lni-phone'> &#xeb50; lni-phone
</option> <option value='lni-php'> &#xeb51; lni-php
</option> <option value='lni-pie-chart'> &#xeb52; lni-pie-chart
</option> <option value='lni-pilcrow'> &#xeb53; lni-pilcrow
</option> <option value='lni-pin'> &#xeb54; lni-pin
</option> <option value='lni-pinterest'> &#xeb55; lni-pinterest
</option> <option value='lni-pizza'> &#xeb56; lni-pizza
</option> <option value='lni-plane'> &#xeb57; lni-plane
</option> <option value='lni-play-store'> &#xeb58; lni-play-store
</option> <option value='lni-play'> &#xeb59; lni-play
</option> <option value='lni-playstation'> &#xeb5a; lni-playstation
</option> <option value='lni-plug'> &#xeb5b; lni-plug
</option> <option value='lni-plus'> &#xeb5c; lni-plus
</option> <option value='lni-pointer-down'> &#xeb5d; lni-pointer-down
</option> <option value='lni-pointer-left'> &#xeb5e; lni-pointer-left
</option> <option value='lni-pointer-right'> &#xeb5f; lni-pointer-right
</option> <option value='lni-pointer-top'> &#xeb60; lni-pointer-top
</option> <option value='lni-pointer'> &#xeb61; lni-pointer
</option> <option value='lni-popup'> &#xeb62; lni-popup
</option> <option value='lni-postcard'> &#xeb63; lni-postcard
</option> <option value='lni-pound'> &#xeb64; lni-pound
</option> <option value='lni-power-switch'> &#xeb65; lni-power-switch
</option> <option value='lni-printer'> &#xeb66; lni-printer
</option> <option value='lni-producthunt'> &#xeb67; lni-producthunt
</option> <option value='lni-protection'> &#xeb68; lni-protection
</option> <option value='lni-pulse'> &#xeb69; lni-pulse
</option> <option value='lni-pyramids'> &#xeb6a; lni-pyramids
</option> <option value='lni-python'> &#xeb6b; lni-python
</option> <option value='lni-question-circle'> &#xeb6c; lni-question-circle
</option> <option value='lni-quora'> &#xeb6d; lni-quora
</option> <option value='lni-quotation'> &#xeb6e; lni-quotation
</option> <option value='lni-radio-button'> &#xeb6f; lni-radio-button
</option> <option value='lni-rain'> &#xeb70; lni-rain
</option> <option value='lni-react'> &#xeb73; lni-react
</option> <option value='lni-reddit'> &#xeb71; lni-reddit
</option> <option value='lni-reload'> &#xeb72; lni-reload
</option> <option value='lni-remove-file'> &#xeb74; lni-remove-file
</option> <option value='lni-reply'> &#xeb75; lni-reply
</option> <option value='lni-restaurant'> &#xeb76; lni-restaurant
</option> <option value='lni-revenue'> &#xeb77; lni-revenue
</option> <option value='lni-road'> &#xeb78; lni-road
</option> <option value='lni-rocket'> &#xeb79; lni-rocket
</option> <option value='lni-rss-feed'> &#xeb7a; lni-rss-feed
</option> <option value='lni-ruler-alt'> &#xeb7b; lni-ruler-alt
</option> <option value='lni-ruler-pencil'> &#xeb7c; lni-ruler-pencil
</option> <option value='lni-ruler'> &#xeb7d; lni-ruler
</option> <option value='lni-rupee'> &#xeb7e; lni-rupee
</option> <option value='lni-sad'> &#xeb7f; lni-sad
</option> <option value='lni-save'> &#xeb80; lni-save
</option> <option value='lni-school-bench-alt'> &#xeb81; lni-school-bench-alt
</option> <option value='lni-school-bench'> &#xeb82; lni-school-bench
</option> <option value='lni-scooter'> &#xeb83; lni-scooter
</option> <option value='lni-scroll-down'> &#xeb84; lni-scroll-down
</option> <option value='lni-search-alt'> &#xeb85; lni-search-alt
</option> <option value='lni-search'> &#xeb86; lni-search
</option> <option value='lni-select'> &#xeb87; lni-select
</option> <option value='lni-seo'> &#xeb88; lni-seo
</option> <option value='lni-service'> &#xeb89; lni-service
</option> <option value='lni-share-alt-1'> &#xeb8a; lni-share-alt-1
</option> <option value='lni-share-alt'> &#xeb8b; lni-share-alt
</option> <option value='lni-share'> &#xeb8c; lni-share
</option> <option value='lni-shield'> &#xeb8d; lni-shield
</option> <option value='lni-shift-left'> &#xeb8e; lni-shift-left
</option> <option value='lni-shift-right'> &#xeb8f; lni-shift-right
</option> <option value='lni-ship'> &#xeb90; lni-ship
</option> <option value='lni-shopify'> &#xeb91; lni-shopify
</option> <option value='lni-shopping-basket'> &#xeb92; lni-shopping-basket
</option> <option value='lni-shortcode'> &#xeb93; lni-shortcode
</option> <option value='lni-shovel'> &#xeb94; lni-shovel
</option> <option value='lni-shuffle'> &#xeb95; lni-shuffle
</option> <option value='lni-signal'> &#xeb96; lni-signal
</option> <option value='lni-sketch'> &#xeb97; lni-sketch
</option> <option value='lni-skipping-rope'> &#xeb98; lni-skipping-rope
</option> <option value='lni-skype'> &#xeb99; lni-skype
</option> <option value='lni-slack-line'> &#xeb9a; lni-slack-line
</option> <option value='lni-slack'> &#xeb9b; lni-slack
</option> <option value='lni-slice'> &#xeb9c; lni-slice
</option> <option value='lni-slideshare'> &#xeb9d; lni-slideshare
</option> <option value='lni-slim'> &#xeb9e; lni-slim
</option> <option value='lni-smile'> &#xeb9f; lni-smile
</option> <option value='lni-snapchat'> &#xeba0; lni-snapchat
</option> <option value='lni-sort-alpha-asc'> &#xeba1; lni-sort-alpha-asc
</option> <option value='lni-sort-amount-asc'> &#xeba2; lni-sort-amount-asc
</option> <option value='lni-sort-amount-dsc'> &#xeba3; lni-sort-amount-dsc
</option> <option value='lni-soundcloud-original'> &#xeba4; lni-soundcloud-original
</option> <option value='lni-soundcloud'> &#xeba5; lni-soundcloud
</option> <option value='lni-speechless'> &#xeba6; lni-speechless
</option> <option value='lni-spellcheck'> &#xeba7; lni-spellcheck
</option> <option value='lni-spinner-arrow'> &#xeba8; lni-spinner-arrow
</option> <option value='lni-spinner-solid'> &#xeba9; lni-spinner-solid
</option> <option value='lni-spinner'> &#xebaa; lni-spinner
</option> <option value='lni-spotify-original'> &#xebab; lni-spotify-original
</option> <option value='lni-spotify'> &#xebac; lni-spotify
</option> <option value='lni-spray'> &#xebad; lni-spray
</option> <option value='lni-sprout'> &#xebae; lni-sprout
</option> <option value='lni-squarespace'> &#xebaf; lni-squarespace
</option> <option value='lni-stackoverflow'> &#xebb0; lni-stackoverflow
</option> <option value='lni-stamp'> &#xebb1; lni-stamp
</option> <option value='lni-star-empty'> &#xebb2; lni-star-empty
</option> <option value='lni-star-filled'> &#xebb3; lni-star-filled
</option> <option value='lni-star-half'> &#xebb4; lni-star-half
</option> <option value='lni-star'> &#xebb5; lni-star
</option> <option value='lni-stats-down'> &#xebb6; lni-stats-down
</option> <option value='lni-stats-up'> &#xebb7; lni-stats-up
</option> <option value='lni-steam'> &#xebb8; lni-steam
</option> <option value='lni-sthethoscope'> &#xebb9; lni-sthethoscope
</option> <option value='lni-stop'> &#xebba; lni-stop
</option> <option value='lni-strikethrough'> &#xebbb; lni-strikethrough
</option> <option value='lni-stripe'> &#xebbc; lni-stripe
</option> <option value='lni-stumbleupon'> &#xebbd; lni-stumbleupon
</option> <option value='lni-sun'> &#xebbe; lni-sun
</option> <option value='lni-support'> &#xebbf; lni-support
</option> <option value='lni-surf-board'> &#xebc0; lni-surf-board
</option> <option value='lni-suspect'> &#xebc1; lni-suspect
</option> <option value='lni-swift'> &#xebc2; lni-swift
</option> <option value='lni-syringe'> &#xebc3; lni-syringe
</option> <option value='lni-tab'> &#xebc4; lni-tab
</option> <option value='lni-tag'> &#xebc5; lni-tag
</option> <option value='lni-target-customer'> &#xebc6; lni-target-customer
</option> <option value='lni-target-revenue'> &#xebc7; lni-target-revenue
</option> <option value='lni-target'> &#xebc8; lni-target
</option> <option value='lni-taxi'> &#xebc9; lni-taxi
</option> <option value='lni-teabag'> &#xebca; lni-teabag
</option> <option value='lni-telegram-original'> &#xebcb; lni-telegram-original
</option> <option value='lni-telegram'> &#xebcc; lni-telegram
</option> <option value='lni-text-align-center'> &#xebcd; lni-text-align-center
</option> <option value='lni-text-align-justify'> &#xebce; lni-text-align-justify
</option> <option value='lni-text-align-left'> &#xebcf; lni-text-align-left
</option> <option value='lni-text-align-right'> &#xebd0; lni-text-align-right
</option> <option value='lni-text-format-remove'> &#xebd4; lni-text-format-remove
</option> <option value='lni-text-format'> &#xebd1; lni-text-format
</option> <option value='lni-thought'> &#xebd2; lni-thought
</option> <option value='lni-thumbs-down'> &#xebd3; lni-thumbs-down
</option> <option value='lni-thumbs-up'> &#xebd5; lni-thumbs-up
</option> <option value='lni-thunder-alt'> &#xebd6; lni-thunder-alt
</option> <option value='lni-thunder'> &#xebd7; lni-thunder
</option> <option value='lni-ticket-alt'> &#xebd8; lni-ticket-alt
</option> <option value='lni-ticket'> &#xebd9; lni-ticket
</option> <option value='lni-tiktok'> &#xebda; lni-tiktok
</option> <option value='lni-timer'> &#xebdb; lni-timer
</option> <option value='lni-tounge'> &#xebdc; lni-tounge
</option> <option value='lni-train-alt'> &#xebdd; lni-train-alt
</option> <option value='lni-train'> &#xebde; lni-train
</option> <option value='lni-trash-can'> &#xebdf; lni-trash-can
</option> <option value='lni-travel'> &#xebe0; lni-travel
</option> <option value='lni-tree'> &#xebe1; lni-tree
</option> <option value='lni-trees'> &#xebe2; lni-trees
</option> <option value='lni-trello'> &#xebe3; lni-trello
</option> <option value='lni-trowel'> &#xebe4; lni-trowel
</option> <option value='lni-tshirt'> &#xebe5; lni-tshirt
</option> <option value='lni-tumblr'> &#xebe6; lni-tumblr
</option> <option value='lni-twitch'> &#xebe7; lni-twitch
</option> <option value='lni-twitter-filled'> &#xebe8; lni-twitter-filled
</option> <option value='lni-twitter-original'> &#xebe9; lni-twitter-original
</option> <option value='lni-twitter'> &#xebea; lni-twitter
</option> <option value='lni-ubuntu'> &#xebeb; lni-ubuntu
</option> <option value='lni-underline'> &#xebec; lni-underline
</option> <option value='lni-unlink'> &#xebed; lni-unlink
</option> <option value='lni-unlock'> &#xebee; lni-unlock
</option> <option value='lni-unsplash'> &#xebef; lni-unsplash
</option> <option value='lni-upload'> &#xebf0; lni-upload
</option> <option value='lni-user'> &#xebf1; lni-user
</option> <option value='lni-users'> &#xebf6; lni-users
</option> <option value='lni-ux'> &#xebf2; lni-ux
</option> <option value='lni-vector'> &#xebf3; lni-vector
</option> <option value='lni-video'> &#xebf4; lni-video
</option> <option value='lni-vimeo'> &#xebf5; lni-vimeo
</option> <option value='lni-visa'> &#xebf7; lni-visa
</option> <option value='lni-vk'> &#xebf8; lni-vk
</option> <option value='lni-volume-high'> &#xebf9; lni-volume-high
</option> <option value='lni-volume-low'> &#xebfa; lni-volume-low
</option> <option value='lni-volume-medium'> &#xebfb; lni-volume-medium
</option> <option value='lni-volume-mute'> &#xebfc; lni-volume-mute
</option> <option value='lni-volume'> &#xebfd; lni-volume
</option> <option value='lni-wallet'> &#xebfe; lni-wallet
</option> <option value='lni-warning'> &#xebff; lni-warning
</option> <option value='lni-website-alt'> &#xec00; lni-website-alt
</option> <option value='lni-website'> &#xec01; lni-website
</option> <option value='lni-wechat'> &#xec02; lni-wechat
</option> <option value='lni-weight'> &#xec03; lni-weight
</option> <option value='lni-whatsapp'> &#xec04; lni-whatsapp
</option> <option value='lni-wheelbarrow'> &#xec05; lni-wheelbarrow
</option> <option value='lni-wheelchair'> &#xec06; lni-wheelchair
</option> <option value='lni-windows'> &#xec07; lni-windows
</option> <option value='lni-wordpress-filled'> &#xec08; lni-wordpress-filled
</option> <option value='lni-wordpress'> &#xec09; lni-wordpress
</option> <option value='lni-world-alt'> &#xec0a; lni-world-alt
</option> <option value='lni-world'> &#xec0c; lni-world
</option> <option value='lni-write'> &#xec0b; lni-write
</option> <option value='lni-xbox'> &#xec0d; lni-xbox
</option> <option value='lni-yahoo'> &#xec0e; lni-yahoo
</option> <option value='lni-ycombinator'> &#xec0f; lni-ycombinator
</option> <option value='lni-yen'> &#xec10; lni-yen
</option> <option value='lni-youtube'> &#xec13; lni-youtube
</option> <option value='lni-zip'> &#xec11; lni-zip
</option> <option value='lni-zoom-in'> &#xec12; lni-zoom-in
</option> <option value='lni-zoom-out'> &#xec14; lni-zoom-out
</option>
</select>                            

                            </div>


                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <a href="/admin/services" class="btn btn-light">{{ __('Cancel')}}</a>
                          </form>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="row"></div>

        
    </div>
    
    <!-- push external js -->
    @push('script')
     <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery.repeater/jquery.repeater.min.js') }}"></script>
        <script src="{{ asset('plugins/mohithg-switchery/dist/switchery.min.js') }}"></script>
               <script src="{{ asset('js/form-components.js') }}"></script>
               <script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>

		<script src="{{ asset('js/form-advanced.js') }}"></script>
        <script type="text/javascript">
            (function($) {
    'use strict';
    $(function() {
    $('.file-upload-browse').on('click', function() {
        var file = $(this).parent().parent().parent().find('.file-upload-default');
        file.trigger('click');
      });
      $('.file-upload-default').on('change', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      });
    });
  
})(jQuery);
        </script>

    @endpush





@endsection
