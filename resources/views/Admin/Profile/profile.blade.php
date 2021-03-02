@extends('Admin.Layout.app')
@section('title','Profile')
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

                    <h4 class="">Profile</h4>

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
                        <form  method="post" id="profile_form" enctype="multipart/form-data">
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">User Name</label>
                                    <input type="text" class="form-control" name="user_name" value="{{ @$profile['user_name'] }}" placeholder="User Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ @$profile['email'] }}" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile_number" value="{{ @$profile['mobile_number'] }}" placeholder="Mobile Number">
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
        $('#profile_form').validate({
            rules:{
                user_name:{
                    required:true,
                    minlength:2,
                    maxlength:30,
                },
                email:{
                    required:true,
                    email:true,
                },
                mobile_number:{
                    Number:true,
                    minlength:7,
                    maxlength:10,
                },
            },
        });
</script>
@endsection