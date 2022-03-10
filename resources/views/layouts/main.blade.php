<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>
            Ampulhaber
        </title>
        <link href="{{asset('assets')}}/media_query.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous"
        />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
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
    @include('home._header')
    @include('home._navbar')
    @include('home._content')


    @include('home._footer')
</body>
</html>