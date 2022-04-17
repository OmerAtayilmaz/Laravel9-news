@include('admin._admin-head')

<div class="container-xxl position-relative bg-white d-flex p-0">
<!-- spinner -->
@include('admin._admin-spinner')
@include('admin._admin-sidebar')
<div class="content">
    @include('admin._admin-navbar')
    <div class="w-100 h-auto p-2">
        <h3 class="text-center ">Our Social Media Accounts</h3>
    <table class="table table-bordered table-hover table-light">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">icon</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $account)
            <tr>
                <th scope="row">{{$account->id}}</th>
                <td>{{$account->name}}</td>
                <td>{{$account->title}}</td>
                <td>{{$account->description}}</td>
                <td><img width="40" src="{{Storage::url($account->image)}}"></td>
                <td>
                    <a type="button" href="/" class="btn btn-info">Edit</a>
                    <a type="button" href="/" class="btn btn-danger">Remove</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="w-100 h-auto">
            <form role="form" action="{{route('admin_socialmedia_create')}}" method="post"  enctype="multipart/form-data" class="bg-light rounded h-100 p-4">
                @csrf
                    <h6 class="mb-4">Create Social Media </h6>
                    <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control" id="name">
                            <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="title" type="text" class="form-control" id="title">
                            <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="description" type="text" class="form-control" id="description">
                            <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                    <div class="mb-3">
                        <label for="image" class="form-label">Choose an icon</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                    </div>   
                    <button type="submit" class="btn btn-dark w-100 m-2">Create Social Media Icon</button>
            </form>
    </div>
</div>
    

</div>
<a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/lib/chart/chart.min.js"></script>
    <script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('assets')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('assets')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('assets')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets')}}/js/admin-main.js"></script>
</body>
</html>