@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist();
@endphp
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
                                <a class="nav-link" href="{{route('home')}}">Home
                                    <span class="sr-only">(current)</span></a>
                            </li>
    @foreach($parentCategories as $category)
                             @if(count($category->children))
                                <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="{{route('news_category',['id'=>$category->id,'slug'=>$category->slug])}}"
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
                                    </li>
                             @else
                             <li class="nav-item">
                                <a class="nav-link" href="{{route('news_category',['id'=>$category->id,'slug'=>$category->slug])}}" >{{$category->title}}
                                    <span class="sr-only">(current)</span></a>
                            </li>
                             @endif
                            @endforeach
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('contact_us')}}">Contact
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('about_us')}}">About
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('references')}}">References
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home_faq')}}">FAQ
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            @auth
                                <div class="nav-item active dropdown mr-5 ">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="/myprofile" class="dropdown-item">Profile</a>
                                        <a href="{{route('comments')}}" class="dropdown-item">My Reviews</a>
                                        @if(Auth::user()->roles->pluck('name')->contains('admin'))
                                        <a href="{{route('admin_home')}}" class="dropdown-item">Dashboard</a>
                                        @endif
                                        @if(Auth::user()->roles->pluck('name')->contains('author'))
                                        <a href="{{route('author.news')}}" class="dropdown-item">News Panel</a>
                                        @endif
                                        <a href="{{route('admin_logout')}}" class="dropdown-item">Log out</a>
                                    </div>
                                    </div>
                                @endauth
                                @guest
                                <span class="auth"><a href="/register">Sign up</a><small>/</small><a href="/login">Login</a></span>
                                </div>
                                @endguest
                        </li>
    </ul>
   
  </div>
</nav>

