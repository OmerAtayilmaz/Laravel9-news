@extends('layouts.admin')
@section('content')
    <div class="w-100 h-auto">
            <form role="form" action="{{route('admin_news_update',['id'=>$currentNews->id])}}" method="post" class="bg-light rounded h-100 p-4" enctype="multipart/form-data">
                @csrf
                    <h6 class="mb-4">Edit News</h6>
                    <div class="form-floating mb-3">
                            <input name="title" value="{{$currentNews->title}}" type="text" class="form-control" id="title">
                            <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input name="keywords"  value="{{$currentNews->keywords}}" type="text" class="form-control" id="keywords">
                            <label for="keywords">Keywords</label>
                    </div>
                    <div class="form-floating mb-3">
                                <select name="category_id" class="form-select" id="category_id"
                                    aria-label="Floating label select example">
                                    @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if ($category->id==$currentNews->category_id) selected="selected" @endif>{{ \App\Http\Controllers\CategoryController::getParentsTree($category,$category->title) }}</option>                                 
                                    @endforeach
                                </select>
                                <label for="category_id">Works with selects</label>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Choose an image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                    <div class="form-floating mb-3">
                            <input name="keywords"  value="{{$currentNews->slug}}" type="text" class="form-control" id="keywords">
                            <label for="keywords">Slug</label>
                    </div>
                    <div class="form-floating mb-3">
                                <select name="type" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="{{$currentNews->type}}" selected>Mevcut: {{$currentNews->type}}</option>
                                    <option value="Köşe Yazısı">Köşe Yazısı</option>
                                    <option value="Haber">Haber</option>
                                    <option value="Makale">Makale</option>
                                    <option value="Deneme">Deneme</option>
                                </select>
                                <label for="floatingSelect">Yazı Türü</label>
                    </div>    
                    <div class="form-floating mb-3">
                                <select name="status" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option  value="{{$currentNews->status}}"> {{$currentNews->status?"True":"False"}}</option>
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                                <label for="floatingSelect">Status</label>
                    </div>   
                    <div class="form-floating mb-3">
                        <textarea   class="form-control" name="description"  id="description" style="height: 150px;">{{$currentNews->description}}</textarea>
                        <label for="description">description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="detail"  id="detail" style="height: 150px;">{{$currentNews->detail}}</textarea>
                        <label for="detail">Detail</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 m-2">Create News</button>
            </form>
    </div>
@endsection
