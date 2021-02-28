<?php 
    if(isset($category_details)){
        $title = 'Edit';
        $action = url('admin/category/edit/'.$category_details['id']); 
    }else{
        $title = 'Add';
        $action = url('admin/category/add'); 
    }
?>
@extends('Admin.Layout.app')
@section('title', $title.' '.$label)
@section('content')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
 @include('common.notification')
<style type="text/css">
    .error{
        color: red;
    }
</style>
<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class=""> {{ $title }} {{$label}}</h4>

                </div>
            </div>
        </div>
    </div>

    <div class="container  pull-up">
        <div class="row">
            <div class="col-lg-12">

                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-body ">
                        <form action="{{ $action }}" method="post" id="category_form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ @$category_details['title'] }}" placeholder="Title">
                                </div>
                            </div>
                            @csrf
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <a id="back_redirect" class="btn btn-info">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<script type="text/javascript">
        $('#category_form').validate({
            rules:{
                title:{
                    required:true,
                    minlength:2,
                    maxlength:30,
                },
                type:{
                    required: true,
                },
            },
          });
</script>
@endsection