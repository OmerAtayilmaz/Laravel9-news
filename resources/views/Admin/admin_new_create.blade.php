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
    <div class="w-100 h-auto">
            <form role="form" action="{{route('admin_news_create')}}" method="post" class="bg-light rounded h-100 p-4">
                @csrf
                    <h6 class="mb-4">Create News</h6>
                    <div class="form-floating mb-3">
                                <select name="category_id" class="form-select" id="category_id"
                                    aria-label="Floating label select example">
                                    <option selected>Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                                <label for="category_id">Works with selects</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="title" type="text" class="form-control" id="title">
                            <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="keywords" type="text" class="form-control" id="keywords">
                            <label for="keywords">Keywords</label>
                    </div>   
                    <div class="form-floating mb-3">
                            <input name="image" type="text" class="form-control" id="image">
                            <label for="image">İmage</label>
                    </div>   
                    <div class="form-floating mb-3">
                            <input name="slug" type="text" class="form-control" id="slug">
                            <label for="slug">Slug</label>
                    </div>   
                    <div class="form-floating mb-3">
                                <select name="type" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Type</option>
                                    <option value="Köşe Yazısı">Köşe Yazısı</option>
                                    <option value="Haber">Haber</option>
                                    <option value="Makale">Makale</option>
                                    <option value="Deneme">Deneme</option>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                    </div>    
                    <div class="form-floating mb-3">
                                <select name="status" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Status</option>
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                    </div>   
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description"  id="description" style="height: 150px;"></textarea>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="detail"  id="detail" style="height: 150px;"></textarea>
                        <label for="detail">Detail</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 m-2">Create News</button>
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
