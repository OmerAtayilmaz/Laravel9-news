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
                        <!-- BOTH -->
                        <li class="nav-item mb-1 p-0 active"><a href="myprofile" class="nav-link">Profile</a></li>
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">Account</a></li>
                        <!-- Author -->
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">News</a></li>
                        <!-- USER -->
                        <li class="nav-item mb-1 "><a href="myprofile" class="nav-link">Comments</a></li>

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