@extends('new.admin.layouts.main') 
@section('title', 'Add New News')
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
                            <span>{{ __('Add News')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{ __('News')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Add News')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Add New News')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('addnewsdata') }}" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group" >
                                <label for="inputTitle">{{ __('Title')}}</label>
                                <input type="text"  id="inputTitle" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"placeholder="title" required autocomplete="title" autofocus>
                                 @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           <div class="form-group" >
                                <label for="active">{{ __('Active')}}</label>
                                <input type="checkbox" autocomplete="active" id="active" class="js-single  @error('active') is-invalid @enderror" name="active" placeholder="active"  <?php if(@old('active') == 1){echo"checked";} ?> /> 
                               
                            </div>
                            <div class="form-group" >
                                <label for="inputbyname">{{ __('By')}}</label>
                                <input type="text"  id="inputbyname" class="form-control @error('byname') is-invalid @enderror" name="byname" value="{{ old('byname') }}" placeholder="byname" required autocomplete="byname" autofocus>
                                 @error('byname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             
                            <div class="form-group ">
                                        <label for="selectlang">{{ __('Lang')}}</label>
                                        <select class="form-control @error('lang') is-invalid @enderror"  name="lang" value="{{ old('lang') }}" placeholder="lang" required autocomplete="lang"  id="selectlang">
                                            <option value="1">{{ __('English')}}</option>
                                            <option value="2">{{ __('العربية')}}</option>
                                        </select>
                                         @error('lang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                            
                            <div class="form-group">
                                <label for="inputdesc">{{ __('Description')}}</label>
                                <input type="text" class="form-control @error('desc_news') is-invalid @enderror"  name="desc_news" value="{{ old('desc_news') }}" placeholder="desc_news"  autocomplete="desc_news" id="inputdesc" >
                                    @error('desc_news')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Descriptioninput">{{ __('Details')}}</label>
	<textarea class="form-control html-editor  @error('details_news') is-invalid @enderror"  name="details_news" value="{{ old('details_news') }}" placeholder="details_news"  autocomplete="details_news"  id="Descriptioninput" rows="4"></textarea>
	    @error('details_news')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            
                            <div class="form-group">
                                <label>{{ __('File upload')}}</label>
                                <input type="file" name="img_news"  class="file-upload-default @error('img_news') is-invalid @enderror"  name="img_news" value="{{ old('img_news') }}" placeholder="img_news" required autocomplete="img_news" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info"  placeholder="Upload Image">
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
       
		<script src="{{ asset('js/form-advanced.js') }}"></script>

    @endpush






@endsection
