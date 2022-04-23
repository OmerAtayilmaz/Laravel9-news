
    <link href="{{asset('assets')}}/images/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<div class="table-responsive">
@include('home.messages')
        <form method="post" action="{{route('admin_message_update',['id'=>$message->id])}}">
            @csrf     
        <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">id</th>                         
                         <td scope="row">{{$message->id??"Undefined"}}</td>

                    </tr>
                     <tr>
                         <th scope="col">name</th>
                         <td>{{$message->name }} </td>

                    </tr>
                     <tr>
                         <th scope="col">email</th>
                         <td scope="row">{{$message->email??"Undefined"}}</td>
                    </tr>
                     <tr>
                         <th scope="col">ip</th>
                         <td>  {{ $message->ip??"Undefined" }}</td>
                    </tr>
                     <tr>
                         <th scope="col">phone</th>
                         <td>  {{ $message->phone??"Undefined" }}</td>
                    </tr>
                     <tr>
                         <th scope="col">subject</th>
                         <td>  {{ $message->subject??"Undefined" }}</td>
                    </tr>
                     <tr>
                         <th scope="col">admin note</th>
                         <td><div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="note" rows="3">{{$message->note}}</textarea>
                            </div>
                        </td>
                    </tr>
                     <tr>
                         <th scope="col">admin note</th>
                         <td>
                             <button type="Submit" class="btn btn-info">Update</button>
                        </td>
                    </tr>
                 </thead>
             </table>
        </form>
         </div>