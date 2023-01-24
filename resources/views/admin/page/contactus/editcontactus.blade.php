@extends('new.admin.layouts.main') 
@section('title', 'Edit Contactus')
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
                            <h5>{{ __('Contact Us')}}</h5>
                            <span>{{ __('Edit ')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{ __('Contact us')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit ')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Contact us')}}</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('editcontactsdata',$contactdata->id) }}" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group" >
                                <label for="inputname">{{ __('Name')}}</label>
                                <input type="text"  id="inputname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $contactdata->name }}"placeholder="name" required autocomplete="name" autofocus>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <label for="created_at">{{ __('created')}}</label>
                                <input type="text" disabled="disabled"  id="created_at" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ $contactdata->created_at }}"placeholder="created_at" required autocomplete="created_at" autofocus>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group" >
                                <label for="readornot">{{ __('Read')}}</label>
                                <input type="checkbox"  id="readornot" class=" js-single  @error('readornot') is-invalid @enderror" name="readornot" <?php if(@$contactdata->readornot == 1){echo"checked";} ?> /> 
                               
                            </div>

                            <div class="form-group" >
                                <label for="email">{{ __('Email')}}</label>
                                <input type="text"  id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $contactdata->email }}"placeholder="email" required autocomplete="email" autofocus>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <label for="phone">{{ __('phone')}}</label>
                                <input type="text"  id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $contactdata->phone }}"placeholder="phone" required autocomplete="phone" autofocus>
                                 @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" >
                                <label for="subject">{{ __('Subject')}}</label>
                                <input type="text"  id="subject" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ $contactdata->subject }}"placeholder="subject" required autocomplete="subject" autofocus>
                                 @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label for="message">{{ __('Message')}}</label>
	<textarea class="form-control html-editor  @error('message') is-invalid @enderror"  name="message" value="" placeholder="message"  autocomplete="message"  id="message" rows="4">{{$contactdata->message }}</textarea>
	    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            
                      <!-- type="hidden" style="visibility: hidden;" -->
<textarea name="ipandserver" style="width: 100%" >{{$contactdata->ipandserver }}</textarea>

                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            <a href="/admin/contactus" class="btn btn-light">{{ __('Cancel')}}</a>
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
