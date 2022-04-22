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
            <form role="form" action="{{route('admin_category_create')}}" method="post" class="bg-light rounded h-100 p-4">
                @csrf
                    <h6 class="mb-4">Create Category</h6>
                    <div class="form-floating mb-3">
                                <select name="parent_id" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="0" selected>Parent id</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ \App\Http\Controllers\CategoryController::getParentsTree($category,$category->title) }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Works with selects</label>
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
                            <input name="slug" type="text" class="form-control" id="keywords">
                            <label for="keywords">slug</label>
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
                    <div class="form-floating">
                        <textarea class="form-control" name="description"  id="description" style="height: 150px;"></textarea>
                        <label for="description">Description</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 m-2">Create Category</button>
            </form>
    </div>
</div>
    

</div>
<a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@include('admin._admin-scripts')

</body>
</html>
