@extends('Admin.Layout.app')
@section('title', 'Movie List')
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-10 text-white p-t-40 p-b-90">

                    <h4 class="">
                        Movie List
                    </h4>
                </div>
                <div class="col-2 text-white p-t-40 p-b-90">
                    <a href="{{url('admin/movie/add/')}}" class="add_record">Add {{@$label}}</a>
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
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty(@$movie_list))
                                        @foreach($movie_list as $key=>$value)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ ucfirst($value['name']) }}</td>
                                                <td>{{ ucfirst($value['description']) }}</td>
                                                <!-- <td>{{ ucfirst($value['name']) }}</td> -->
                                               <!--  <td>
                                                    <a href="{{ url('admin/movie/edit/'.$value['id']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ url('admin/movie/delete/'.$value['id']) }}" class="del_btn" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td> -->
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection