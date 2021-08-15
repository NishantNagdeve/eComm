<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eComm</title>
    <!-- <link rel="stylesheet" href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('asset/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery/jquery.min.map') }}"></script>
    <script src="{{ asset('asset/vendor/jquery/jquery.slim.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery/jquery.slim.min.map') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.min.js.map') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.js.map') }}"></script> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
        @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px;
    }
    .custom-product{
        height:500px;
    }
    img.slider-img{
        height:400px !important;
    }
    .info{
        background:black;
        width: 400px;
        height:120px;
        margin:auto;
    }
    #nav-bottom-margin{
        margin-top : 60px; 
    }
    #navBarSearchForm {
        width:430px !important;
    }
    .cartlist-divider{
        border-bottom : 1px solid #ccc;
    }
    .cartlist-product-padding{
        padding-top : 40px;
        /* align-items : auto; */
    }
    .cartlist-remove-btn-padding{
        padding-top : 80px;
    }
    
</style>
</html>