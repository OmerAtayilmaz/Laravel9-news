@extends('layouts.admin')
@section('content')
    <div class="w-100 h-auto">
            <form role="form" action="{{route('admin_socialmedia_update',['id'=>$data->id])}}" method="post" class="bg-light rounded h-100 p-4" enctype="multipart/form-data">
                @csrf
                    <h6 class="mb-4">Edit Social Media</h6>
                    <div class="form-floating mb-3">
                            <input name="title" value="{{$data->title}}" type="text" class="form-control" id="title">
                            <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="name" value="{{$data->name}}" type="text" class="form-control" id="name">
                            <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="description" value="{{$data->description}}" type="text" class="form-control" id="description">
                            <label for="description">Description</label>
                    </div>
                        
                    <div class="mb-3">
                        <label for="image" class="form-label">Choose an image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
               
                    <button type="submit" class="btn btn-dark w-100 m-2">Update Social Media</button>
            </form>
    </div>
@endsection
