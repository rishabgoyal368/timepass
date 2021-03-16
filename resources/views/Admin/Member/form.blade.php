<?php
if (isset($member_details)) {
    $title = 'Edit';
    $action = url('admin/member/edit/' . $member_details['id'].'?type='.$_GET['type']);
} else {
    $title = 'Add';
    $action = url('admin/member/add?type='.$_GET['type']);
}
?>
@extends('Admin.Layout.app')
@section('title', $title.' '.$label)
@section('content')

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
                        <form action="{{ $action }}" method="post" id="member_form" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ @$member_details['first_name'] }}" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ @$member_details['last_name'] }}" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ @$member_details['address'] }}" placeholder="Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option disabled selected>Select</option>
                                        <option <?php if(@$member_details['gender'] == 'male'){ echo "selected";} ?> value="male">Male</option>
                                        <option <?php if(@$member_details['gender'] == 'female'){ echo "selected";} ?> value="female">Female</option>
                                        <option <?php if(@$member_details['gender'] == 'other'){ echo "selected";} ?> value="other">Other</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            @csrf
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <a href="{{'/admin/category'}}" class="btn btn-info">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<script type="text/javascript">
    $('#member_form').validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2,
                maxlength: 30,
            },
            last_name: {
                required: true,
                minlength: 2,
                maxlength: 30,
            },
            address: {
                required: true,
                minlength: 2,
                maxlength: 50,
            },
            gender: {
                required: true,
            },
        },
    });
</script>
@endsection