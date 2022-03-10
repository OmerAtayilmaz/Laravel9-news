<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route('admin_home')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-dark">Ampulhaber</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets')}}/images/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle  border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        @auth
                        <h6 class="mb-0">{{Auth::user()->name}}</h6>
                       <a href="{{route('admin_logout')}}" class="d-block">log out </a>
                        @endauth
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('admin_home')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          
                 
               
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('admin_category')}}" class="dropdown-item">Categories</a>
                            <a href="{{route('admin_category_add')}}" class="dropdown-item">Create Category</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                </div>
            </nav>
</div>