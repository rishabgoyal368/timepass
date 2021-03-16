
@extends('Admin.Layout.app')
@section('title', @$label.'s')
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-10 text-white p-t-40 p-b-90">

                    <h4 class="">
                        {{@$label}}s
                    </h4>
                </div>
                <div class="col-2 text-white p-t-40 p-b-90">
                    <a href="{{url('admin/member/add/')}}?type={{@$label}}" class="add_record">Add {{@$label}}</a>
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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($members))
                                        @foreach($members as $value)
                                            <tr>                                                    
                                                <td>{{ ucfirst($value['first_name']) }}</td>
                                                <td>{{ ucfirst($value['last_name']) }}</td>
                                                <!-- <td><img src="{{ asset('')}}" alt="no image" class="img-fluid"></td> -->
                                                <td>
                                                    <a href="{{ url('admin/member/edit/'.$value['id']) }}?type={{@$label}}" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ url('admin/member/delete/'.$value['id']) }}?type={{@$label}}" class="del_btn" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
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