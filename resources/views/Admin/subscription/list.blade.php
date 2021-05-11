@extends('Admin.Layout.app')
@section('title',$label)
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-10 text-white p-t-40 p-b-90">

                    <h4 class="">
                     {{@$label}}s Pacakages
                    </h4>
                </div>
                <div class="col-2 text-white p-t-40 p-b-90">
                    <a href="{{url('/admin/subscription-list/add')}}" class="add_record">Add {{@$label}}</a>
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
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($subscription_list as $value)
                                    <tr>
                                        <td>{{ucfirst($value['title'])}}</td>
                                        <td>{{ucfirst($value['description'])}}</td>
                                        <td>
                                            <a href="{{ url('/admin/subscription-list/edit/'.$value['id']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="{{ url('admin/subscription-list/delete/'.$value['id']) }}" class="del_btn" title="Delete"><i class="fa fa-trash"></i></a>

                                        </td>
                                        
                                    </tr>
                                    @empty
                                        <tr>
                                            <td>No data Found!</td>
                                        </tr>
                                    @endforelse
                                    
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