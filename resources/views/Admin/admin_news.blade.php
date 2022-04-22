@extends('layouts.admin')
@section('content')
    <div class="col-12">
      
                         <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">News</h6>
                            <div class="table-responsive bg-dark">
                                <table class="table text-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Gallery</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Yazar</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    @foreach($news as $new)
                                    <tr>
                                            <th scope="row">{{$new->id??"Undefined"}}</th>
                                            <td>{{$new->category->title }} </td>
                                            <td><small>  {{ $new->slug??"Undefined" }} </small></td>
                                            @if($new->image)                      
                                                <td><image width="40" src="{{Storage::url($new->image)}}"/></td>
                                            @else
                                            <td><image width="40" src="{{Storage::url('images/download.png')}}"/></td>
                                            @endif
                                            <td class="bg-primary p-2 text-center"> <a  href="{{route('admin_image_create',['id'=>$new->id])}}">
                                                <img width="20" src="{{asset('assets')}}/images/gallery.png"/></a></td>
                                            <td> <small>{{ $new->type??"Undefined" }}</small></td>
                                            @foreach($users as $user)
                                                @if($new->user_id==$user->id)
                                                    <td> {{$user->name }} </td>
                                                @endif
                                            @endforeach
                                            <td>{{$new->created_at??"******" }}</td>
                                            <td>
                                          <div class="btn-group" role="group">
                                                <a  href="{{route('admin_news_delete',['id'=>$new->id])}}" type="button" class="btn btn-danger">Remove</a>
                                                <a  href="{{route('admin_news_edit',['id'=>$new->id])}}" type="button" class="btn btn-primary">Edit</a>
                                                <a  href="$" type="button" class="btn btn-warning">Show</a>
                                            </div> 
                                            </td>
                                        </tr>
                                    @endforeach
                    
                                    </tbody>
                                </table>
                            </div>
                        </div> 
    </div>
@endsection