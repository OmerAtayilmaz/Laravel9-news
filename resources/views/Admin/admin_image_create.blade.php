@extends('layouts.admin')
@section('content')
    <div class="w-100 h-auto">
            <form role="form" action="{{route('admin_images_store',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data" class="bg-light rounded h-100 p-4">
                @csrf
                    <h6 class="mb-4">Create Image:{{$data->title}} </h6>
                    <div class="form-floating mb-3">
                            <input name="title" type="text" class="form-control" id="title">
                            <label for="title">Title</label>
                    </div>
           
                    <div class="form-floating mb-3">
                    <div class="mb-3">
                        <label for="image" class="form-label">Choose an image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                    </div>   
                    <button type="submit" class="btn btn-dark w-100 m-2">Create News</button>
            </form>
            
            <div class="admin-gallery-container p-2">
            <h4 class="m-2 text-center p-2">The Images </h4>
            <table class="table  table-hover ">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($gallery as $image)
                    <tr>
                    <th scope="row">{{$image->id}}</th>
                    <td>{{$image->title}}</td>
                    @if($image->image)                      
                    <td><image width="40" src="{{Storage::url($image->image)}}"/></td>
                    @else
                    <td><image width="40" src="{{Storage::url('images/download.png')}}"/></td>
                    @endif
                    <td>
                        <a  href="{{route('admin_image_delete',['id'=>$image->id,'news_id'=>$image->news_id])}}" type="button" class="btn btn-danger">Remove</a>
                    </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                </table>
    
            </div>
    </div>
@endsection