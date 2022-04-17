@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist();
@endphp
<div class="container-fluid bg-faded fh5co_padd_mediya">
     
                <nav class="navbar navbar-toggleable-md navbar-light">
                    <button
                        class="navbar-toggler navbar-toggler-right mt-3"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="fa fa-bars"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav mr-auto">
<<<<<<< HEAD
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('home')}}">Home
=======
                        <li class="nav-item active">
                                <a class="nav-link" href="#">Home
>>>>>>> parent of a116f70 (login-logout-signup process on home page)
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            @foreach($parentCategories as $category)
                             @if(count($category->children))
                                <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="{{strtolower($category->title)}}"
                                    id="dropdownMenuButton2"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    >{{$category->title}}
                                    <span class="sr-only">(current)</span></a
                                >
                                    <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenuLink_1"
                                    >
                                    @include('home.categorytree',['children'=>$category->children])
                                    </div>
                             @else
                             <li class="nav-item">
                                <a class="nav-link" href="{{strtolower($category->title)}}" >{{$category->title}}
                                    <span class="sr-only">(current)</span></a>
                            </li>
                             @endif
                            </li>
                            @endforeach
<<<<<<< HEAD
                            <li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home')}}">Contact
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home')}}">References
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home')}}">FAQ
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home')}}">About Us
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            @auth
<<<<<<< HEAD
                                <div class="nav-item active dropdown mr-5 ">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="/myprofile" class="dropdown-item">Profile</a>
                                        <a href="{{route('admin_home')}}" class="dropdown-item">Admin Paneli</a>
                                        <a href="{{route('admin_logout')}}" class="dropdown-item">Log out</a>
                                    </div>
                                    </div>
                                @endauth
                                @guest
                                <span class="auth"><a href="/register">Sign up</a><small>/</small><a href="/login">Login</a></span>
                                </div>
                                @endguest
=======
                        <div class="nav-item dropdown mr-5 ">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
                            <div class="dropdown-menu">
                                <a href="/myprofile" class="dropdown-item">Profile</a>
                                <a href="{{route('admin_home')}}" class="dropdown-item">Admin Paneli</a>
                                <a href="{{route('admin_logout')}}" class="dropdown-item">Log out</a>
                            </div>
                            </div>
                        @endauth
                        @guest
                        <span class="auth"><a href="/register">Sign up</a><small>/</small><a href="/login">Login</a></span>
                        </div>
                        @endguest
>>>>>>> parent of c1cabfb (fill out news to slider and categorize it)
                        </li>
                           
=======
>>>>>>> parent of a116f70 (login-logout-signup process on home page)
                        </ul>
                    </div>
                </nav>
         
        </div>