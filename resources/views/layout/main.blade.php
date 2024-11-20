<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Color Admin | Page with Fixed Footer</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>

    <div id="app" class="app app-header-fixed app-sidebar-fixed app-content-full-height">



        @include('layout.header')
        @include('layout.sidebar')

        <div id="content" class="app-content d-flex flex-column p-0">
            @yield('content')
            @include('layout.footer')
        </div>
    <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/vendor.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>


    <script src="{{ asset('assets/plugins/%40highlightjs/cdn-assets/highlight.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/demo/render.highlight.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/rocket-loader.min.js') }}"></script>

</body>

</html>
