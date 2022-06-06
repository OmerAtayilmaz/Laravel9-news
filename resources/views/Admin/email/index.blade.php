@extends('layouts.admin')
@section('content')
<div class="col-12  bg-light">
      <div class=" rounded h-100 p-4">
         <h6 class="mb-4">Subscribers</h6>
         @include('home.messages')
         <div class="table-responsive bg-dark bordered table-bordered">
             <table class="table text-white">
                 <thead>
                     <tr>
                         <th scope="col">id</th>
                         <th scope="col">email</th>
                         <th scope="col">ip</th>
                         <th scope="col">status</th>
                         <th scope="col">actions</th>
                 
                     </tr>
                 </thead>
                 <tbody >
                 @foreach($emailList as $item)
                 <tr>
                         <th scope="row">{{$item->id??"Undefined"}}</th>
                         <th scope="row">{{$item->email??"Undefined"}}</th>
                         <th scope="row">{{$item->ip??"Undefined"}}</th>
                         <td>{{$item->status }} </td>
                    <td>
                       <div class="btn-group" role="group">
                             <a  href="{{route('subscribes_delete',['id'=>$item->id])}}" type="button" class="btn btn-danger">Remove</a>
                        
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

