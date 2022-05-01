@extends('layouts.main')
@section('title',"Anasayfa")
@section('description',"asdadasd")
@section('keywords',"asdasds")
@section('content')
   <div class="container">
           <div class="row m-0 p-0">
           <div class="col-md-2 bg-white m-0 p-0">
           <div class="navbar-light m-0 p-0">
                <ul class="navbar-nav m-0 p-0 mt-3">
                        <li class="nav-item mb-1 p-0"><a href="myprofile" class="nav-link">Profile</a></li>
                        <li class="nav-item mb-1  active"><a href="myprofile" class="nav-link">Comments</a></li>
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">News</a></li>
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">Account</a></li>
                </ul>
           </div>
                </div>
                <div class="col-md-10">
                        <!-- DASH -->
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">News</h6>
                            <div class="table-responsive bg-white">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    @include('home.messages')
                                    @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->rate}}</td>
                                        <td>{{$comment->comment}}</td>
                                        <td>{{$comment->status}}</td>
                                        <td>{{$comment->created_at}}</td>
                                        <td><a href="{{route('user_comment_delete',['id'=>$comment->id])}}" class="btn btn-danger">Delete</a></td>
                                    </tr>       
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                </div>
           </div>
   </div>
   
@endsection