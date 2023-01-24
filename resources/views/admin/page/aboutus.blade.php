@extends('new.admin.layouts.main') 
@section('title', 'Aboutus')
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
                            <h5>{{ __('About Us')}}</h5>
                            <span>{{ __('Edit')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/aboutus/2">العربية</a>
                            </li>
                             <li class="breadcrumb-item">
                                <a href="/admin/aboutus/1">English</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Aboutus')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('editaboutus',$datasis->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" >
                                <label for="aboutus_word">{{ __('aboutus_word')}}</label>
                                <input type="text"  id="aboutus_word" class="form-control @error('aboutus_word') is-invalid @enderror" name="aboutus_word" value="{{ $datasis->aboutus_word }}"placeholder="aboutus_word" required autocomplete="aboutus_word" autofocus>
                                 @error('aboutus_word')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                         
                            
                         
                            <div class="form-group">
                                <label for="aboutus_text">{{ __('aboutus_text')}}</label>
    <textarea class="form-control html-editor  @error('aboutus_text') is-invalid @enderror"  name="aboutus_text" value="" placeholder="aboutus_text"  autocomplete="aboutus_text"  id="aboutus_text" rows="4">{{$datasis->aboutus_text }}</textarea>
        @error('aboutus_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                             <img src="<?= asset('site/images/about/'.$datasis->img_about)?>" style="max-height: 200px;">
                            <div class="form-group">
                                <label>{{ __('File upload')}}</label>
                                <input type="file" name="img_about"  class="file-upload-default @error('img_about') is-invalid @enderror"  name="img_about" value="{{ old('img_about') }}" placeholder="img_about"  autocomplete="img_about" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="<?=$datasis->img_about?>">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload')}}</button>
                                    </span>    
                                   

                                </div>
                                    @error('img_about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr>
                                <div class="card-header"><h3>{{ __('Edit Who We are')}}</h3></div>

                                   <div class="form-group" >
                                <label for="whoweare_word">{{ __('whoweare_word')}}</label>
                                <input type="text"  id="whoweare_word" class="form-control @error('whoweare_word') is-invalid @enderror" name="whoweare_word" value="{{ $datasis->whoweare_word }}"placeholder="whoweare_word" required autocomplete="whoweare_word" autofocus>
                                 @error('whoweare_word')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                         
                            
                         
                            <div class="form-group">
                                <label for="whoweare_text">{{ __('whoweare_text')}}</label>
    <textarea class="form-control html-editor  @error('whoweare_text') is-invalid @enderror"  name="whoweare_text" value="" placeholder="whoweare_text"  autocomplete="whoweare_text"  id="whoweare_text" rows="4">{{$datasis->whoweare_text }}</textarea>
        @error('whoweare_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                                <hr>
<div class="card-header"><h3>{{ __('Edit Our Vision')}}</h3></div>

                                   <div class="form-group" >
                                <label for="ourvision_word">{{ __('ourvision_word')}}</label>
                                <input type="text"  id="ourvision_word" class="form-control @error('ourvision_word') is-invalid @enderror" name="ourvision_word" value="{{ $datasis->ourvision_word }}"placeholder="ourvision_word" required autocomplete="ourvision_word" autofocus>
                                 @error('ourvision_word')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                         
                            
                         
                            <div class="form-group">
                                <label for="ourvision_text">{{ __('ourvision_text')}}</label>
    <textarea class="form-control html-editor  @error('ourvision_text') is-invalid @enderror"  name="ourvision_text" value="" placeholder="ourvision_text"  autocomplete="ourvision_text"  id="ourvision_text" rows="4">{{$datasis->ourvision_text }}</textarea>
        @error('ourvision_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                                <hr>
    <div class="card-header"><h3>{{ __('Edit Our History')}}</h3></div>

                                   <div class="form-group" >
                                <label for="ourhistory_word">{{ __('ourhistory_word')}}</label>
                                <input type="text"  id="ourhistory_word" class="form-control @error('ourhistory_word') is-invalid @enderror" name="ourhistory_word" value="{{ $datasis->ourhistory_word }}"placeholder="ourhistory_word" required autocomplete="ourhistory_word" autofocus>
                                 @error('ourhistory_word')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                         
                            
                         
                            <div class="form-group">
                                <label for="ourhistory_text">{{ __('ourhistory_text')}}</label>
    <textarea class="form-control html-editor  @error('ourhistory_text') is-invalid @enderror"  name="ourhistory_text" value="" placeholder="ourhistory_text"  autocomplete="ourhistory_text"  id="ourhistory_text" rows="4">{{$datasis->ourhistory_text }}</textarea>
        @error('ourhistory_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>



                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
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
