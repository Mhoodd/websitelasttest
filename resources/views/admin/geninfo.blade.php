@extends('new.admin.layouts.main') 
@section('title', 'General Info')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}">
                    <meta name="csrf-token" content="{{ csrf_token() }}">

    @endpush

    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-users bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('General Info')}}</h5>
                            <span>{{ __('List of information')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('General Info')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            @include('new.admin.include.message')
            <!-- end message area-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Logo') }}</h3></div>
                    <div class="card-body">

    <form class="forms-sample" method="POST" action="{{ route('savelogos') }}" enctype="multipart/form-data">
    @csrf
<input type="hidden" name="idofcolomnlogo" value="<?=$Logo->id?>">
<input type="hidden" name="idofcolomnlogofoter" value="<?=$Logo_footer->id?>">
     <div class="form-group">
        <img src="<?= asset('img/logo/'.$Logo->fileupload)?>" style="max-height: 200px;">
                                <label>{{ __('Logo')}}</label>
                                <input type="file" name="Logo"  class="file-upload-default @error('Logo') is-invalid @enderror"  name="Logo" value="{{ old('Logo') }}" placeholder="Logo" required autocomplete="Logo" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info"  placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload')}}</button>
                                    </span>
                                </div>
                                    @error('Logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                             <div class="form-group">
                                        <img src="<?= asset('img/logo/'.$Logo_footer->fileupload)?>" style="max-height: 200px;">

                                <label>{{ __('Logo footer')}}</label>
                                <input type="file" name="Logo_footer"  class="file-upload-default @error('Logo_footer') is-invalid @enderror"  name="Logo_footer" value="{{ old('Logo_footer') }}" placeholder="Logo_footer" required autocomplete="Logo_footer" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info"  placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload')}}</button>
                                    </span>
                                </div>
                                    @error('Logo_footer')
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('General Info') }}</h3></div>
                    <div class="card-body">
                        <table id="myAdvancedTablexx" class="table p-3">
                            <thead>
                                <tr>
                                    <th>{{ __('id') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Lang') }}</th>
                                    <th>{{ __('Value') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $s => $dd)
                                <tr>
                                    <td><?= $dd->id ?></td>
                                    <td><?= $dd->name ?></td>
                                    <td><?php if ($dd->lang ==1 ){echo "English";}else{echo "العربية";}?></td>
                                    <td><?= $dd->valueoftext ?></td>
                                </tr>
                                
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script')
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/Cell-edit/dataTables.cellEdit.js') }}"></script>
    <!--get editable datatable script-->
    <script src="{{ asset('js/editable-datatable.js') }}"></script>
                   <script src="{{ asset('js/form-components.js') }}"></script>

    @endpush

            <!-- initiate chat section-->

@endsection
