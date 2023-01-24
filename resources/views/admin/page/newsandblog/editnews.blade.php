@extends('new.admin.layouts.main') 
@section('title', 'Edit news')
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
                            <h5>{{ __('News')}}</h5>
                            <span>{{ __('Edit News')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{ __('Newss')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit News')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit News')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('editnewsdata',$newsdata->id) }}" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group" >
                                <label for="inputTitle">{{ __('Title')}}</label>
                                <input type="text"  id="inputTitle" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $newsdata->title }}"placeholder="title" required autocomplete="title" autofocus>
                                 @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group" >
                                <label for="active">{{ __('Active')}}</label>
                                <input type="checkbox"  id="active" class=" js-single  @error('active') is-invalid @enderror" name="active" <?php if(@$newsdata->active == 1){echo"checked";} ?> /> 
                               
                            </div>
                            <div class="form-group" >
                                <label for="inputbyname">{{ __('By')}}</label>
                                <input type="text"  id="inputbyname" class="form-control @error('byname') is-invalid @enderror" name="byname" value="{{ $newsdata->byname }}" placeholder="byname" required autocomplete="byname" autofocus>
                                 @error('byname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                        <label for="selectlang">{{ __('Lang')}}</label>
                                        <select class="form-control @error('lang') is-invalid @enderror"  name="lang" value="{{$newsdata->lang }}" placeholder="lang" required autocomplete="lang"  id="selectlang">
                                            <option <?php if($newsdata->lang == 1){echo"selected";} ?> value="1">{{ __('English')}}</option>
                                            <option <?php if($newsdata->lang == 2){echo"selected";} ?> value="2">{{ __('العربية')}}</option>
                                        </select>
                                         @error('lang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                            
                            <div class="form-group">
                                <label for="desc_news">{{ __('Description')}}</label>
                                <input type="text" class="form-control @error('desc_news') is-invalid @enderror"  name="desc_news" value="{{ $newsdata->desc_news }}" placeholder="desc_news"  autocomplete="desc_news" id="desc_news" >
                                    @error('desc_news')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Descriptioninput">{{ __('Details')}}</label>
	<textarea class="form-control html-editor  @error('details_news') is-invalid @enderror"  name="details_news" value="" placeholder="details_news"  autocomplete="details_news"  id="Descriptioninput" rows="4">{{$newsdata->details_news }}</textarea>
	    @error('details_news')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            
                            <div class="form-group">
                                <label>{{ __('File upload')}}</label>
                                <input type="file" name="img_news"  class="file-upload-default @error('img_news') is-invalid @enderror"  name="img_news" value="{{ old('img_news') }}" placeholder="img_news"  autocomplete="img_news" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="<?=$newsdata->img_news?>">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload')}}</button>
                                    </span>
                                </div>
                                    @error('img_news')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <a href="/admin/newsandblog" class="btn btn-light">{{ __('Cancel')}}</a>
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
