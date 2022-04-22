@include('admin._admin-head')

<div class="container-xxl position-relative bg-white d-flex p-0">
<!-- spinner -->
@include('admin._admin-spinner')
@include('admin._admin-sidebar')
<div class="content">
    @include('admin._admin-navbar')
    <div class="w-100 h-auto">
            <form role="form" action="{{route('admin_news_create')}}" method="post"  enctype="multipart/form-data" class="bg-light rounded h-100 p-4">
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
@include('admin._admin-scripts')

</body>
</html>
