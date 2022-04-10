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
                        <li class="nav-item active">
                                <a class="nav-link" href="#">Home
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            @foreach($parentCategories as $category)
                             @if(count($category->children))
                                <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
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
                                <a class="nav-link" href="#" >{{$category->title}}
                                    <span class="sr-only">(current)</span></a>
                            </li>
                             @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
         
        </div>