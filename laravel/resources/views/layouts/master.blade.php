<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .main-content{
            float: right;
            height: 100%;
            width: 100%;
            position: absolute;
            left: 178px; top:92px; right:0; bottom:0;
        }
    </style>
</head>
<body>
<div class="main-content">

    <div class="header">
        @include('includes.old_includes.header')
         
    </div>

 <div class="container-fluid">
     @yield('content')
 </div>


</div>
</body>
</html>