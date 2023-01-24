@extends('new.admin.layouts.main') 
@section('title', 'News&blog')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
            <meta name="csrf-token" content="{{ csrf_token() }}">

    @endpush
    
  
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-3">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('News')}}</h5>
                            <span>{{ __('All News and blogs')}}</span>
                         
                    </div>  

                </div></div>
                  <div class="col-lg-6"> <div class="ml-30">
                        <a href="{{route('add-news')}}"  class="btn btn-primary" style="">+ Add News</a></div>
                        </div>
                    
                <div class="col-lg-3">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                          
                            <li class="breadcrumb-item active" aria-current="page">{{ __('News&blogs')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2 clearfix">
                    <a class="btn pt-0 pl-0 d-md-none d-lg-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                        {{ __('Display Options')}}
                        <i class="ik ik-chevron-down align-middle"></i>
                    </a>
                    <div class="collapse d-md-block display-options" id="displayOptions">
                        <span class="mr-3 d-inline-block float-md-left dispaly-option-buttons">
                            <a href="#" class="mr-1 view-list active">
                                <i class="ik ik-menu view-icon"></i>
                            </a>
                            <a href="#" class="mr-1 view-thumb">
                                <i class="ik ik-list view-icon"></i>
                            </a>
                            <a href="#" class="mr-1 view-grid">
                                <i class="ik ik-grid view-icon"></i>
                            </a>
                        </span>
                        
                        <div class="float-md-right">
                            <span class="text-muted text-small mr-2">{{ __('Displaying 1-10 of 210 items')}} </span>
                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                20
                                <i class="ik ik-chevron-down mr-0 align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">10</a>
                                <a class="dropdown-item" href="#">20</a>
                                <a class="dropdown-item" href="#">30</a>
                                <a class="dropdown-item" href="#">50</a>
                                <a class="dropdown-item" href="#">100</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator mb-20"></div>
            @include('new.admin.include.message')
 <?php if($data->count() > 0){?>

                <div class="row layout-wrap" id="layout-wrap">
                    @foreach($data as $in => $dataNew)


                    <div class="col-12 list-item" id="thistris<?= $dataNew->id ?>">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                                <img src="<?= asset('site/images/blog/'.$dataNew->img_news)?>" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                <span class="badge badge-pill badge-primary position-absolute badge-top-left"></span>
                                <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2"></span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                    <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">
                                       <?= $dataNew->desc_news ?>
                                    </a>
                                    <p class="mb-1 text-muted text-small category w-15 w-xs-100"></p>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100"> <?= $dataNew->created_at ?></p>
                                    <div class="w-15 w-xs-100">
                                     <?php if( $dataNew->active == 1){
                                     echo '<span class="badge badge-pill badge-primary">'. __("Yes").'</span>';
                                 }else{
                                    echo '<span class="badge badge-pill badge-secondary">'. __("No").'</span>';

                                } ?>
                                        
                                        
                                    </div>
                                </div>
                                <div class="list-actions">
    



    <a href="#editLayoutItem<?= $dataNew->id ?>" data-toggle="modal" data-target="#editLayoutItem<?= $dataNew->id ?>"><i class="ik ik-eye"></i></a>
    <a href="{{ route('editnewsdata',$dataNew->id)}}"><i class="ik ik-edit-2"></i></a>
    <a href="#" id="<?= $dataNew->id ?>" names="<?= $dataNew->title ?>" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    


<div class="modal fade edit-layout-modal" id="editLayoutItem<?= $dataNew->id ?>" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLayoutItemLabel"><?= $dataNew->title ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="lead"><?= $dataNew->title ?></p>
                    
                    <div class="row">
                        <div class="col-md-12"><img src="<?= asset('site/images/blog/'.$dataNew->img_news)?>" class="img-fluid" alt=""></div>
                    </div>
                    
                    <p><?= $dataNew->desc_news ?></p>
<div class="jumbotron pt-30 pb-30 mt-30">
                        <p class="lead">{!!  $dataNew->details_news !!}</p>
                    </div>


                                    </div>
                <div class="modal-footer">



                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close')}}</button>
                                    <a class="btn btn-primary" href="{{ route('editnewsdata',$dataNew->id)}}">{{ __('Edit')}}</a>
                                    <a href="#" id="<?= $dataNew->id ?>" names="<?= $dataNew->title ?>" class="list-delete btn btn-danger list-delete">{{ __('Delete')}}</a>

                </div>
            </div>
        </div>
    </div>







@endforeach

                    
                    
                </div>
                                                


<?php } ?>
            </div>
        </div>
    </div>
                


    

    <!-- push external js -->
    @push('script')

        <script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
        <script src="{{ asset('plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('js/layouts.js') }}"></script>
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
        var ajaxurl = '/admin/deletenews/';
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


    @endsection
    