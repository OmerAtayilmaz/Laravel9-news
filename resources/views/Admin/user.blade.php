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
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Gallery</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    @foreach($userlist as $item)
                                    <tr>
                                            <th scope="row">{{$item->id??"Undefined"}}</th>
                                            <td><a  href="{{route('admin_user_show',['id'=>$item->id])}}" type="button" class="btn btn-outline-info"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=600 height=400')"
                                                >{{$item->name}}</a> </td>
                                            <td><small>  {{ $item->email??"Undefined" }} </small></td>
                                            <td><small>
                                                @foreach($item->roles as $role) {{ $role->name }},@endforeach </small>
                                                <a href="{{route('admin_user_roles',['id'=>$item->id])}}"  onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=600')">
                                                <i class="fas fa-plus"></i>
                                                </a>
                                            </td>
                                            @if($item->profile_photo_path)                      
                                                <td><image width="40" src="{{Storage::url($item->profile_photo_path)}}"/></td>
                                            @else
                                            <td><image width="40" src="{{Storage::url('images/download.png')}}"/></td>
                                            @endif
                                            <td class="bg-primary p-2 text-center"> <a  href="{{route('admin_image_create',['id'=>$item->id])}}">
                                                <img width="20" src="{{asset('assets')}}/images/gallery.png"/></a></td>

                                            <td>{{$item->created_at??"******" }}</td>
                                            <td>
                                          <div class="btn-group" role="group">
                                                <a  href="{{route('admin_user_edit',['id'=>$item->id])}}" type="button" class="btn btn-info"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=600')"
                                                >Edit</a>
                                                <a  href="{{route('admin_user_role_delete',['userid'=>$item->id,'roleid'=>$item->id])}}" type="button" class="btn btn-danger text-white">Delete</a>
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