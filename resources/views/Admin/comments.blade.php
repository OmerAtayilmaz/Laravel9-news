@extends('layouts.admin')
@section('content')
<div class="col-12  bg-light">
      <div class=" rounded h-100 p-4">
         <h6 class="mb-4">User Comments</h6>
         @include('home.messages')
         <div class="table-responsive bg-dark bordered table-bordered">
             <table class="table text-white">
                 <thead>
                     <tr>
                         <th scope="col">id</th>
                         <th scope="col">user</th>
                         <th scope="col">news id</th>
                         <th scope="col">comment</th>
                         <th scope="col">ip</th>
                         <th scope="col">date</th>
                         <th scope="col">actions</th>
                     </tr>
                 </thead>
                 <tbody >
                 @foreach($datalist as $comment)
                 <tr>
                         <th scope="row">{{$comment->id??"Undefined"}}</th>
                         <th scope="row"><a  href="{{route('admin_user_show',['id'=>$comment->user->id])}}" type="button" class="btn btn-outline-info"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=600 height=400')"
                                                >{{$comment->user->name}}</a> </td></th>
                         <th scope="row">{{$comment->news_id??"Undefined"}}</th>
                         <td>{{$comment->comment }} </td>
                         <td>  {{ $comment->ip??"Undefined" }}</td>
                         <td>  {{ $comment->created_at??"Undefined" }}</td>
                         <td>
                       <div class="btn-group" role="group">
                             <a  href="{{route('admin_comment_delete',['id'=>$comment->id])}}" type="button" class="btn btn-danger">Remove</a>
                             <a  href="{{route('admin_comment_edit',['id'=>$comment->id])}}" type="button" class="btn btn-info" onclick="return !window.open(this.href,'targetTab','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=500px,height=500px');">Detail</a>
                         </div> 
                         </td>
                     </tr>
                 @endforeach
                 </tbody>
             </table>
         </div>
     </div> 
</div>
@endsection

