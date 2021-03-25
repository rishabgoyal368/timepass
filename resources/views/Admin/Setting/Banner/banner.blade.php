@extends('Admin.Layout.app')
@section('title',$label)
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class="">{{$label}}</h4>

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
                        <form method="post" id="banner_form" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Banner 1</label>
                                    @if(@$banner->image1)
                                        <input type="file" class="form-control" name="image1" accept="image/*">  {{ @$banner->image1 }}
                                    @else
                                        <input type="file" class="form-control" name="image1" accept="image/*" required>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Banner 2</label>
                                    @if(@$banner->image2)
                                        <input type="file" class="form-control" name="image2" accept="image/*">  {{ @$banner->image2 }}
                                    @else
                                        <input type="file" class="form-control" name="image2" accept="image/*" required>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Banner 3</label>
                                    @if(@$banner->image3)
                                        <input type="file" class="form-control" name="image3" accept="image/*">  {{ @$banner->image3 }}
                                    @else
                                        <input type="file" class="form-control" name="image3" accept="image/*" required>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Banner 4</label>
                                    @if(@$banner->image4)
                                        <input type="file" class="form-control" name="image4" accept="image/*">  {{ @$banner->image4 }}
                                    @else
                                        <input type="file" class="form-control" name="image4" accept="image/*" required>
                                    @endif
                                </div>
                            </div>
                            @csrf
                            <div class="form-group">
                                <input type="submit"  value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection
