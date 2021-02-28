@extends('Admin.Layout.app')
@section('title', 'Add'.' '.$label)
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class=""> Add {{$label}}</h4>

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
                        <form action="{{url('admin/add-user')}}" method="post" id="add_edit_user">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name*" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name*" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Mobile Number</label>
                                    <input type="email" class="form-control" name="mobile_number" id="mobile_number" placeholder="Mobile Number*" required>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password*" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password*" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <a id="back_redirect" class="btn btn-info">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--widget card ends-->



            </div>
        </div>


    </div>
</section>

@endsection