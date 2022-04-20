@extends('layouts.main')
@section('title',"Anasayfa")
@section('description',"asdadasd")
@section('keywords',"asdasds")
@section('content')
   <div class="container">
           <div class="row m-0 p-0">
           <div class="col-md-2 bg-dark m-0 p-0">
           <div class="navbar-light m-0 p-0">
                <ul class="navbar-nav m-0 p-0 mt-3">
                        <li class="nav-item mb-1 p-0 active"><a href="myprofile" class="nav-link">Profile</a></li>
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">Articles</a></li>
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">News</a></li>
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">Account</a></li>
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