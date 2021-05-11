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
                        <form method="post" id="app_key_form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Key 1</label>
                                    <input type="text" class="form-control" name="data" value="{{ @$app_key['data'] }}" placeholder="Key 1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Key 2</label>
                                    <input type="text" class="form-control" name="data1" value="{{ @$app_key['data'] }}" placeholder="Key 2">
                                </div>
                            </div>
                            @csrf
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<script type="text/javascript">
    $('#app_key_form').validate({
        rules: {
            data: {
                required: true,
            },
            data1: {
                required: true,
            },
        },
    });
</script>
@endsection
