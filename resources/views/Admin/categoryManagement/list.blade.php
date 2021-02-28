@extends('Admin.Layout.app')
@section('title', 'Manage'.' '.$label.'s')
@section('content')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-10 text-white p-t-40 p-b-90">

                    <h4 class="">
                        Category Management
                    </h4>
                </div>
                <div class="col-2 text-white p-t-40 p-b-90">
                    <a href="{{url('admin/category/add/')}}" class="add_record">Add {{@$label}}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive p-t-10">
                            <table id="example" class="table " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <!-- <th>Type</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($category_list))
                                        @foreach($category_list as $value)
                                            <tr>
                                                <td>{{ ucfirst($value['title']) }}</td>
                                                <td>
                                                    <a href="{{ url('admin/category/edit/'.$value['id']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ url('admin/category/delete/'.$value['id']) }}" class="delete-alert" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <!-- <th>Type</th> -->
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $('.delete-alert').on('click',function(){
       if (confirm("Are you sure? You want delete it.")) {
            
        }
        return false;
    });
</script>
@endsection