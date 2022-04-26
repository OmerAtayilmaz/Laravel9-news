<!DOCTYPE html>
<html lang="en" >
   @include('home._head')
<body>
    @include('home._header')
    @include('home._navbar')
        <div class="container-fluid m-0 p-0">
        @section('content')
        @show
        </div>
    @include('home._scripts')
</body>
</html>