<?php
if (isset($movie_data)) {
    $title = 'Edit';
    $action = url('admin/movie/edit/' . $movie_data['id']);
} else {
    $title = 'Add';
    $action = url('admin/movie/add');
}
?>
@extends('Admin.Layout.app')
@section('title', $title.' '.$label)
@section('content')
<style type="text/css">
    .uploader .img_load .img_cls {
        height: 33px;
        width: 116px;
    }

    .uploader .img_load {
        margin-left: -119px;
        opacity: 0;
    }
</style>

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class=""> {{ $title }} {{$label}}</h4>

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
                        <form action="{{ $action }}" method="post" id="category_form" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ @$movie_data['name'] }}" placeholder="Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Actor Name</label>
                                    <select class="form-control js-example-basic-multiple" name="actor_name[]" multiple>
                                        <option disabled>Select</option>
                                        @foreach($actor_list as $actor)
                                        <option value="{{ $actor['id'] }}" @if(in_array($actor['id'], $selected_actor_list))selected @endif>{{ ucfirst($actor['first_name'])  }} {{ $actor['last_name'] }}</option>
                                        @endforeach
                                    </select>
                                    <label id="actor_name[]-error" class="error" for="actor_name[]"></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Director Name</label>
                                    <select class="form-control js-example-basic-multiple" name="director[]" multiple>
                                        <option disabled>Select</option>
                                        @foreach($director_list as $director)
                                        <option value="{{ $director['id'] }}" @if(in_array($director['id'], $selected_director_list))selected @endif>{{ ucfirst($director['first_name'])  }} {{ $director['last_name'] }}</option>
                                        @endforeach
                                    </select>
                                    <label id="director[]-error" class="error" for="director[]"></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Crew Member</label>
                                    <select class="form-control js-example-basic-multiple" name="crew_member[]" multiple>
                                        <option disabled>Select</option>
                                        @foreach($crew_member_list as $crew)
                                        <option value="{{ $crew['id'] }}" @if(in_array($crew['id'], $selected_crew_member_list))selected @endif>{{ ucfirst($crew['first_name'])  }} {{ $crew['last_name'] }}</option>
                                        @endforeach
                                    </select>
                                    <label id="crew_member[]-error" class="error" for="crew_member[]"></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Release Date</label>
                                    <input type="date" class="form-control" name="release_date" value="{{ @$movie_data['release_date'] }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tag</label>
                                    <input type="text" id="tags-input" data-role="tagsinput" class="form-control" name="tag" value="{{ @$movie_data['tag'] }}" placeholder="Tag">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Maturity Rating</label>
                                    <select name="maturity_rating" class="form-control">
                                        <option disabled selected>Select</option>
                                        <option value="All age" >All age</option>
                                        <option value="+13">+13</option>
                                        <option value="+16">+16</option>
                                        <option value="+18">+18</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Time duration of video</label>
                                    <input type="text"  class="form-control" name="time_duration" value="{{ @$movie_data['tag'] }}" placeholder="Time duration of video">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Category</label>
                                    <select name="category" class="form-control">
                                        <option disabled selected>Select</option>
                                        <option value="web_series" <?php if (@$movie_data['category'] == 'web_series') {
                                                                        echo "selected";
                                                                    } ?>>Web Series</option>
                                        <option value="movie" <?php if (@$movie_data['category'] == 'movie') {
                                                                    echo "selected";
                                                                } ?>>Movie</option>
                                        <option value="serial" <?php if (@$movie_data['category'] == 'serial') {
                                                                    echo "selected";
                                                                } ?>>Serial</option>
                                        <option value="documentary" <?php if (@$movie_data['documentary'] == 'movie') {
                                                                        echo "selected";
                                                                    } ?>>Documentary</option>
                                        <option value="chilling" <?php if (@$movie_data['category'] == 'chilling') {
                                                                        echo "selected";
                                                                    } ?>>Chilling</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Trailer URL</label>
                                    <input type="url"  class="form-control" name="trailor_url" value="{{ @$movie_data['tag'] }}" placeholder="Trailer URL">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Description</label>
                                    <textarea class="form-control" rows="6" cols="6" name="description" placeholder="Description">{{ @$movie_data['description'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Media:</label>
                                    @if(@$movie_data['video'])
                                    <input type="file" name="video" id="img_upload" class="img_cls form-control" accept="video/*">
                                    {{ @$movie_data['video'] }}
                                    @else
                                    <input type="file" name="video" id="img_upload" class="img_cls form-control" accept="video/*" required>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Thumbnail</label>
                                    @if(@$movie_data['thumbnail'])
                                    <input type="file" name="thumbnail" accept="image/*" class="form-control">
                                    {{ @$movie_data['thumbnail'] }}
                                    @else
                                    <input type="file" name="thumbnail" accept="image/*" required class="form-control">
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-row">

                            </div>

                            @csrf
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <a href="{{'/admin/movie'}}" class="btn btn-info">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>



<!-- <script type="text/javascript">
    $("#tags_input").tagsinput('items')   
</script> -->
<script type="text/javascript">
    $('#category_form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 30,
            },
            "actor_name[]": {
                required: true,
            },
            "director[]": {
                required: true,
            },
            "crew_member[]": {
                required: true,
            },
            tag: {
                required: true,
                minlength: 5,
                maxlength: 50,
            },
            category: {
                required: true,
            },
            description: {
                required: true,
                minlength: 5,
                maxlength: 1000,
            },
            release_date: {
                required: true,
            },
        },
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        function readURL(input)
        {
            if(input.files && input.files[0]) {

                var reader = new FileReader();
                reader.onload = function(e) 
                {
                    $('#old_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#img_upload').change(function(){

            var img_name = $(this).val();
           //debugger;
            if(img_name != '' && img_name != null) {

                var img_arr = img_name.split('.');

                var ext = img_arr.pop();
                ext = ext.toLowerCase();
                // alert(ext); return false;

                if(ext == 'mp4' || ext == '3gp' || ext == '.gif' || ext == 'flv'|| ext =='webm') {
                    input = document.getElementById('img_upload');

                    readURL(this);
                } else{

                    $(this).val('');
                    alert('Please select an image of video file format.');
                }
            }
        });
    });
</script> -->
@endsection