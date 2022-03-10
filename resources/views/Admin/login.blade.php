 <!-- Sign In Start --><!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>
            Ampulhaber | @yield('title')
        </title>
        <meta name="description" content=" @yield('description') "/>
        <meta name="author" content=" @yield('author') "/>
        <meta name="keywords" content=" @yield('keywords') "/>
        <link href="{{asset('assets')}}/media_query.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous"
        />
        <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet" type="text/css" />
        <link
            href="https://fonts.googleapis.com/css?family=Poppins"
            rel="stylesheet"
        />
        <link href="{{asset('assets')}}/css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link
            href="{{asset('assets')}}/css/owl.theme.default.css"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Bootstrap CSS -->
        <link href="{{asset('assets')}}/css/style_1.css" rel="stylesheet" type="text/css" />
        <!-- Modernizr JS -->
        <script src="{{asset('assets')}}/js/modernizr-3.5.0.min.js"></script>
    </head>
<body>
 <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="post" action="{{route('admin_logincheck')}}" class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        @csrf
                        <!-- csrf güvenlik kontrolüdür. sadece bu websitesinden form gönderimini kabul eder. -->
                        <div class="text-left">
                            <h3>Sign In</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" >
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="floatingPassword"  name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="text-right mb-2">
                            <a href="" >Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-dark py-3 w-100 mb-4">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
        </body>
</html>