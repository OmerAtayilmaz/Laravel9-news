
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
    
        <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">id</th>                         
                         <td scope="row">{{$user->id??"Undefined"}}</td>

                    </tr>
                     <tr>
                         <th scope="col">Name</th>
                         <td scope="row">{{$user->name??"Undefined"}}</td>

                    </tr>
                     <tr>
                         <th scope="col">Email</th>
                         <td scope="row">{{$user->id??"Undefined"}}</td>

                    </tr>
                     <tr>
                         <th scope="col">Roles</th>
                         <td scope="row">
                             @foreach($user->roles as $role)
                             <span class="box border px-3 py-1 border-dark mx-2">
                             {{$role->name}} <a href="{{route('admin_user_role_delete',['userid'=>$user->id,'roleid'=>$role->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=600')"><i class="fas fa-trash text-danger"></i></a>
                             </span>
                                
                             @endforeach
                         </td>

                    </tr>
                    <form method="post" role="form" enctype="multipart/form-data" action="{{route('admin_user_role_add',['id'=>$user->id])}}">
                        @csrf     
                     <tr>
                         <th scope="col">Add Role</th>
                         <td>
                            <select name="roleid" class="px-3 py-2"> 
                              @foreach($rolelist as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>}</option>
                               @endforeach
                            </select>
                            <button type="Submit" class="btn btn-info">Add Role</button>
                         </td>
                    </tr>
                    </form>
                   
                 </thead>
             </table>
     
</div>