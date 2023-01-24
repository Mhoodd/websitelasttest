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
                            <h5>{{ __('Services')}}</h5>
                            <span>{{ __('List of Services')}}</span>
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
                                <a href="#">{{ __('Services')}}</a>
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
                    <div class="card-header"><h3>{{ __('Services') }}</h3>
                        <div class="ml-30">
                        <a href="{{route('add-services')}}"  class="btn btn-primary" style="">+</a></div>
                    </div>
                    <div class="card-body">
                        <table id="data_table" class="data_table table p-3">
                            <thead>
                                <tr>
                                     <th>{{ __('Id')}}</th>
                                    <th class="nosort">{{ __('Avatar')}}</th>
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Lang')}}</th>
                                    <th>{{ __('Active')}}</th>
                                    <th class="nosort"><i class="ik ik-edit"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($servicesdata->count() > 0){?>

                    @foreach($servicesdata as $in => $dataservice)
                                <tr id="thistris<?= $dataservice->id ?>">
                                   <td>{{$in}}</td>
                                    <td><i style="font-size: xx-large;" class="lni {{$dataservice->icon }}"></i></td>
                                    <td><?= $dataservice->name ?></td>
                                    <td><?php if( $dataservice->lang == 0){echo "English";}else{echo "العربية";} ?></td>
                                    <td><?php if( $dataservice->isavisable == 1){echo "Yes";}else{echo "No";} ?></td>
                                    <td>
                                        <div class="table-actions">
                                    <a href="#editLayoutItem<?= $dataservice->id ?>" data-toggle="modal" data-target="#editLayoutItem<?= $dataservice->id ?>"><i class="ik ik-eye"></i></a>
                                    <a href="{{ route('editservicesdata',$dataservice->id)}}"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" id="<?= $dataservice->id ?>" names="<?= $dataservice->name ?>" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>










<div class="modal fade edit-layout-modal" id="editLayoutItem<?= $dataservice->id ?>" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLayoutItemLabel"><?= $dataservice->name ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="lead"><?= $dataservice->title ?></p>
                    <p><?= $dataservice->desc_service ?></p>
                    <div class="row">
                        <div class="col-md-12"><img src="<?= asset('site/images/'.$dataservice->img)?>" class="img-fluid" alt=""></div>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">



                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close')}}</button>
                                    <a class="btn btn-primary" href="{{ route('editservicesdata',$dataservice->id)}}">{{ __('Edit')}}</a>
                                    <a href="#" id="<?= $dataservice->id ?>" names="<?= $dataservice->name ?>" class="list-delete btn btn-danger list-delete">{{ __('Delete')}}</a>

                </div>
            </div>
        </div>
    </div>

















                                </tr>
                                
@endforeach


<?php } ?>
                               
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
        <script src="{{ asset('js/datatables.js') }}"></script>
                <script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
        <script src="{{ asset('plugins/summernote/dist/summernote-bs4.min.js') }}"></script>

        <script type="text/javascript">
              $(document).ready(function() {
        var listDelete = $('.list-delete');
        listDelete.on('click', function(fn) {
            console.log($(this).attr('id'));
            console.log($(this).attr('names'));
            swal({
                title: "Are you sure?",
                text: "Do you really want to delete "+$(this).attr('names')+" ?",
                icon: "warning",
                buttons: ["Cancel", "Delete Now"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = {
            id: $(this).attr('id'),
        };
        var type = "POST";
        var ajaxurl = '/admin/deleteservices/';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {

                    jQuery("#thistris" + $(this).attr('id')).remove();
    
            },
            error: function (data) {
                console.log(data);
            }
        });


                    swal({
                        title: "Deleted",
                        text: "The list item has been deleted!",
                        icon: "success",
                    });
                } else {
                    swal("The item is not deleted!");
                }
            });
        });
    
    })
        </script>
    @endpush

            <!-- initiate chat section-->

@endsection
