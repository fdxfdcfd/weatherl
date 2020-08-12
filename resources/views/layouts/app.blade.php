<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather VN</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet/less" type="text/css" href="{{ asset('/css/styles.less') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <div class="mb-3 text-white">Notice: Vietnam Weather Page - Under Construction
{{--        <div class="float-right">--}}
{{--        @if (Auth::guest())--}}
{{--            <a href="{{ url('/auth/login') }}">Login</a>--}}
{{--        @else--}}
{{--            <a href="{{ url('/auth/logout') }}">Logout</a>--}}
{{--        @endif--}}
{{--        </div>--}}
    </div>
    <div class="cover"></div>
    <header class="masthead mt-5">
        <div class="inner">
            <!--Đổi dòng tiêu đề to của page-->
            <h3 class="masthead-brand">Vietnam Weather <br/>for Amateur Astronomy Observatory</h3>
            <nav class="nav-masthead navbar navbar-expand-lg navbar-dark">
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="#">Home</a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Stations </a>
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="dropdown-item text-white" href="#"> AllSky</a></li>
                                <li><a class="dropdown-item text-white" href="#"> BloomSky </a></li>
                                <li><a class="dropdown-item text-white" href="#"> Ambient </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Lab </a>
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="dropdown-item text-white" href="#"> Apps </a></li>
                                <li><a class="dropdown-item text-white" href="#"> Books </a></li>
                                <li><a class="dropdown-item text-white" href="#"> Astro Basic</a></li>
                                <li><a class="dropdown-item text-white" href="#"> Weather Basic</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </nav>
            <div class="masthead-brand">
                <!--Chỉnh sửa câu chú thích Page-->
                <p class="mt-2">Trang web cung cấp dự báo thời tiết dành cho quan sát thiên văn nghiệp dư tại Việt nam</p>
            </div>
        </div>
    </header>
    {{--    @if (Session::has('message'))--}}
    {{--        <div class="flash alert-info">--}}
    {{--            <p class="panel-body">--}}
    {{--                {{ Session::get('message') }}--}}
    {{--            </p>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    {{--    @if ($errors->any())--}}
    {{--        <div class='flash alert-danger'>--}}
    {{--            <ul class="panel-body">--}}
    {{--                @foreach ( $errors->all() as $error )--}}
    {{--                    <li>--}}
    {{--                        {{ $error }}--}}
    {{--                    </li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    @yield('content')
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=163517574259703&autoLogAppEvents=1" nonce="IJeVUNEQ"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>--}}
<script src="//cdn.jsdelivr.net/npm/less" ></script>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
