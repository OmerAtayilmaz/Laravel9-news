<html> 
<head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>
            Edit
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
<!-- include libraries(jQuery, bootstrap) -->
   <div class="container-fluid m-0 p-0">
           <div class="row m-0 p-0">
           <div class="w-100 h-auto">
            <form role="form" action="{{route('author.create')}}" method="post"  enctype="multipart/form-data" class="bg-light rounded h-100 p-4">
                @csrf
                    <h6 class="mb-4">Create News</h6>
                    <div class="form-floating mb-3">
                                <select name="category_id" class="form-select" id="category_id"
                                    aria-label="Floating label select example">
                                    <option selected>Category</option>
                                    @foreach($categories as $category)
                                            <option value="{{$category->id}}" >{{ \App\Http\Controllers\CategoryController::getParentsTree($category,$category->title) }}</option>                                 
                                    @endforeach
                                </select>
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
                            <input name="slug" type="text" class="form-control" id="slug">
                            <label for="slug">Slug</label>
                    </div>   
                    <div class="form-floating mb-3">
                    <div class="mb-3">
                        <label for="image" class="form-label">Choose an image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
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
                        <textarea class="form-control summernote" name="description"  id="description" style="height: 150px;"></textarea>
                        <label for="description">Descriptions</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control summernote" name="detail"  id="detail" style="height: 150px;"></textarea>
                        <label for="detail">Detail</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 m-2">Create News</button>
            </form>
        </div>
        </div>
   </div>
   
  
   <script>
    $(document).ready(function() {
        $('.summernote').summernote();
        
    });
  </script>
</body>
</html>