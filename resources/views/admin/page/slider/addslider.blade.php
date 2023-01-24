@extends('new.admin.layouts.main') 
@section('title', 'Add New slider')
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
                            <h5>{{ __('Slider')}}</h5>
                            <span>{{ __('Add Slider')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{ __('Sliders')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Slider')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Add New Slider')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('addnewsliderdata') }}" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group" >
                                <label for="inputname">{{ __('Name')}}</label>
                                <input type="text"  id="inputname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"placeholder="name" required autocomplete="name" autofocus>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           <div class="form-group" >
                                <label for="isavisable">{{ __('Active')}}</label>
                                <input type="checkbox" autocomplete="isavisable" id="isavisable" class="js-single  @error('isavisable') is-invalid @enderror" name="isavisable" placeholder="isavisable"  <?php if(@old('isavisable') == 1){echo"checked";} ?> /> 
                               
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
                                <label for="inputTitle">{{ __('Title')}}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value="{{ old('title') }}" placeholder="title"  autocomplete="title" id="inputTitle" >
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Descriptioninput">{{ __('Description')}}</label>
	<textarea class="form-control html-editor  @error('desc') is-invalid @enderror"  name="desc" value="{{ old('desc') }}" placeholder="desc"  autocomplete="desc"  id="Descriptioninput" rows="4"></textarea>
	    @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            
                            <div class="form-group">
                                <label>{{ __('File upload')}}</label>
                                <input type="file" name="img"  class="file-upload-default @error('img') is-invalid @enderror"  name="img" value="{{ old('img') }}" placeholder="img" required autocomplete="img" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info"  placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload')}}</button>
                                    </span>
                                </div>
                                    @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
<div class="form-group">
                                <label for="urlvideo">{{ __('urlvideo')}}</label>
    <textarea class="form-control   @error('urlvideo') is-invalid @enderror"  name="urlvideo" value="{{ old('urlvideo') }}" placeholder="urlvideo"  autocomplete="urlvideo"  id="urlvideo" rows="4"></textarea>
        @error('urlvideo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>




                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <a href="/admin/sliderinfo" class="btn btn-light">{{ __('Cancel')}}</a>
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
