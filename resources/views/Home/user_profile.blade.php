@extends('layouts.main')
@section('title',"Anasayfa")
@section('description',"Ampulhaber user description page")
@section('keywords',"User profile page")
@section('content')
   <div class="container-fluid">
           <div class="row m-0 p-0">
           <div class="col-md-2 m-0 p-0">
                <div class="navbar-light m-0 p-0">
                        <ul class="navbar-nav m-0 p-0 mt-3">
                                <li class="nav-item mb-1 p-0 active"><a href="myprofile" class="nav-link">Profile</a></li>
                                <li class="nav-item mb-1  "><a href="{{route('comments')}}" class="nav-link">Comments</a></li>
                        </ul>
                </div>
           </div>
                <div class="col-md-10">
                        <!-- DASH -->
                        @include('profile.show')
                </div>
           </div>
   </div>
   
@endsection