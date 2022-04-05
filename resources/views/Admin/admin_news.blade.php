<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{asset('assets')}}/images/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
<!-- spinner -->
@include('admin._admin-spinner')
@include('admin._admin-sidebar')
<div class="content">
    @include('admin._admin-navbar')
    <div class="col-12">
      
                         <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">News</h6>
                            <div class="table-responsive bg-dark">
                                <table class="table text-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Yazar</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    @foreach($news as $new)
                                    <tr>
                                            <th scope="row">{{$new->id??"Undefined"}}</th>
                                            @foreach($categories as $category)
                                                @if($new->category_id==$category->id)
                                                    <td> {{$category->title }} </td>
                                                @endif
                                            @endforeach
                                            <td><small>  {{ $new->title??"Undefined" }} </small></td>
                                            <td> <small>{{ $new->description??"Undefined" }}</small></td>
                                            <td> <small>{{ $new->type??"Undefined" }}</small></td>
                                            <td> <small>{{ $new->detail??"Undefined" }}</small></td>
                                            @foreach($users as $user)
                                                @if($new->user_id==$user->id)
                                                    <td> {{$user->name }} </td>
                                                @endif
                                            @endforeach
                                            <td>{{$new->created_at??"******" }}</td>
                                            <td>
                                          <div class="btn-group" role="group">
                                                <a  href="{{route('admin_category_delete',['id'=>$new->id])}}" type="button" class="btn btn-danger">Remove</a>
                                                <a  href="{{route('admin_category_edit',['id'=>$new->id])}}" type="button" class="btn btn-primary">Edit</a>
                                            </div> 
                                            </td>
                                        </tr>
                                    @endforeach
                    
                                    </tbody>
                                </table>
                            </div>
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
