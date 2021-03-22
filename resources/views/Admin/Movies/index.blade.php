@extends('Admin.Layout.app')
@section('title', 'Movies')
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-10 text-white p-t-40 p-b-90">
                    <h4 class="">
                        Movies
                    </h4>
                </div>
                <div class="col-2 text-white p-t-40 p-b-90">
                    <a class="add_record">Add {{@$label}}</a>
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="https://resizing.flixster.com/zaNF7MW-JQGdlFKm132BRdl0OpQ=/206x305/v2/https://resizing.flixster.com/qoCuDSD-QV4GRUaojaLk758-KG0=/ems.ZW1zLXByZC1hc3NldHMvbW92aWVzLzUxMDhmN2IxLTE0OWYtNDIwYy05ZjVlLTk1MWUwNzJhYjEwMi53ZWJw" class="img-fluid" height="150px" width="150px"></td>
                                        <td>Shazam</td>
                                        <td>
                                            <a title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="del_btn" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://resizing.flixster.com/Njoi9-oyQC6eHjsLZmRkzgel1Is=/180x257/v2/https://resizing.flixster.com/_9TafmKoulrsV-TGcIqiZzHqC58=/ems.ZW1zLXByZC1hc3NldHMvbW92aWVzLzUwMzUyZGMxLTViMjAtNDM5MS04YjhmLTRlNzU1YWNlMzViZS53ZWJw" height="150px" width="150px"></td>
                                        <td>Kung Fu Panda</td>
                                        <td>
                                            <a title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="del_btn" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
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