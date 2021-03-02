@extends('Admin.Layout.app')
@section('title', 'Category Management')
@section('content')

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
                                                    <a href="{{ url('admin/category/delete/'.$value['id']) }}" class="del_btn" title="Delete"><i class="fa fa-trash"></i></a>
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
$(document).ready(function(){
    $(document).on("click",'.del_btn', function(){ 
        return confirm("Do you want to delete it ?");
    });
});    
</script>

@endsection