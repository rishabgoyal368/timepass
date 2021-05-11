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
                        <form method="post" id="app_version_form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">App Version</label>
                                    <input type="text" class="form-control" name="data" value="{{ @$app_version['data'] }}" placeholder="App Version">
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
    $('#app_version_form').validate({
        rules: {
            data: {
                required: true,
            },
        },
    });
</script>
@endsection