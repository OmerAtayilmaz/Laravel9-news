@extends('layouts.main')
@section('title',"Anasayfa")
@section('description',"asdadasd")
@section('keywords',"asdasds")
@section('content')

   <div class="container-fluid m-0 p-0 ">
           <div class="row m-0 p-0 ">
               
                        <!-- DASH -->
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">News</h6>
                            <a href="{{route('author.add')}}" class="btn btn-info my-1 px-4">Add News</a>
                            <div class="table-responsive bg-white">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Keywords</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    @include('home.messages')
                                    @foreach($authorNews as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td><img src="{{Storage::url($item->image)}}" class="img-fluid" width="80px"/></td>

                                        <td>{{$item->keywords}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td><a href="{{route('author.delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a></td>
                                        <td><a href="{{route('author.edit',['id'=>$item->id])}}" class="btn btn-info">Edit</a></td>
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
    
   
<!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
        $(document).ready(function() {
  $('.summernote').summernote();
});
        </script>
    <!-- Template Javascript -->
    <script src="{{asset('assets')}}/js/admin-main.js"></script>
     
@endsection
