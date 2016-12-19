<!doctype html>
        <html>
<head>
    @include('includes.head')

</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.old_includes.header')
    </header>

    <div id="main" class="row">
        <!--sidebar content -->
    <div id="content" class="col-md-4">
        @include('includes.old_includes.sidebar')
    </div>
    <div id="content" class="col-md-8">
        @yield('content')
    </div>
    </div>
    <footer class=""row">
    @include('includes.footer')
    </footer>
</div>
</body>
</html>