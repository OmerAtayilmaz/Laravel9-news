@extends('layouts.admin')
@section('content')
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Categories</h6>
                            <div class="table-responsive bg-dark">
                                <table class="table text-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Keywords</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                  
                                    <tr>
                                            <th scope="row">{{$category->id??"Undefined"}}</th>
                                            <td>  {{ \App\Http\Controllers\CategoryController::getParentsTree($category,$category->title) }} </td>
                                            <td><small>  {{ $category->description??"Undefined" }} </small></td>
                                            <td>  {{ $category->keywords??"Undefined" }} </td>
                                            <td> <small>{{ $category->description??"Undefined" }}</small></td>
                                            <td>{{$category->created_at??"******" }}</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                                <a  href="{{route('admin_category_delete',['id'=>$category->id])}}" type="button" class="btn btn-danger">Remove</a>
                                                <a  href="{{route('admin_category_edit',['id'=>$category->id])}}" type="button" class="btn btn-primary">Edit</a>
                                            </div>
                                            </td>
                                        </tr>
                                    @endforeach
                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection
