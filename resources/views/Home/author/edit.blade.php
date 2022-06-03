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

            <form role="form" action="{{route('author.update',['id'=>$currentNews->id])}}" method="post" class="bg-light rounded h-100 p-4" enctype="multipart/form-data">
                @csrf
                    <h6 class="mb-4">Edit News</h6>
                    <label >Title</label>

                    <div class="form-floating mb-3">
                            <input name="title" value="{{$currentNews->title}}" type="text" class="form-control" id="title">
                          
                    </div>
                    <label >Keywords</label>

                    <div class="form-floating mb-3">
                            <input name="keywords"  value="{{$currentNews->keywords}}" type="text" class="form-control" id="keywords">
                    </div>
                    <label >Category</label>

                    <div class="form-floating mb-3">
                                <select name="category_id" class="form-select" id="category_id"
                                    aria-label="Floating label select example">
                                    @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if ($category->id==$currentNews->category_id) selected="selected" @endif>{{ \App\Http\Controllers\CategoryController::getParentsTree($category,$category->title) }}</option>                                 
                                    @endforeach
                                </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Choose an image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                    <label >Slug</label>

                    <div class="form-floating mb-3">

                            <input name="slug"  value="{{$currentNews->slug}}" type="text" class="form-control" id="keywords">
                    </div>
                    <label>Yazı Türü</label>

                    <div class="form-floating mb-3">
                                <select name="type" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="{{$currentNews->type}}" selected>Mevcut: {{$currentNews->type}}</option>
                                    <option value="Köşe Yazısı">Köşe Yazısı</option>
                                    <option value="Haber">Haber</option>
                                    <option value="Makale">Makale</option>
                                    <option value="Deneme">Deneme</option>
                                </select>
                    </div>    
                    <label for="floatingSelect">Status</label>

                    <div class="form-floating mb-3">
                                <select name="status" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option  value="{{$currentNews->status}}"> {{$currentNews->status?"True":"False"}}</option>
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                    </div>   
                    <div class="form-floating mb-3">
                        <textarea   class="form-control summernote" name="description"  id="description" style="height: 150px;">{{$currentNews->description}}</textarea>
                        <label for="description">description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control summernote" name="detail"  id="detail" style="height: 150px;">{{$currentNews->detail}}</textarea>
                        <label for="detail">Detail</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 m-2">Create News</button>
            </form>
    </div>

 
  
    <script>
    $(document).ready(function() {
        $('.summernote').summernote();
        
    });
  </script>
</body>
</html>