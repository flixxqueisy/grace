<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Color Admin | Login v3</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />

</head>

<body class="pace-top">


    <div id="app" class="app">
        <div class="login login-with-news-feed">
            <div class="news-feed">
                <div class="news-image" style="background-image: url({{ asset('assets/img/login-bg/login-bg-11.jpg')}})"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Color</b> Admin App</h4>
                    <p>
                        Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                    </p>
                </div>
            </div>


            <div class="login-container">

                <div class="login-header mb-30px">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <span class="logo"></span>
                            <b>Color</b> Admin
                        </div>
                        <small>Bootstrap 5 Responsive Admin Template</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in-alt"></i>
                    </div>
                </div>

                <div class="login-content">
                    <form method="POST" action="{{ route('login') }}" class="fs-13px">
                        @csrf
                        <div class="form-floating mb-15px">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="text" type="email"
                                class="form-control h-45px fs-13px @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email Address" />
                            <label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Email
                                Address</label>
                        </div>
                        <div class="form-floating mb-15px">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password" type="password"
                                class="form-control h-45px fs-13px @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Password" />
                            <label for="password"
                                class="d-flex align-items-center fs-13px text-gray-600">Password</label>
                        </div>
                        <div class="form-check mb-30px">
                            <input class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }}
                                name="remember" id="remember" />
                            <label class="form-check-label" for="rememberMe">
                                Remember Me
                            </label>
                        </div>
                        <div class="mb-15px">
                            <button type="submit" class="btn btn-theme d-block h-45px w-100 btn-lg fs-14px">Sign me
                                in</button>
                        </div>
                        <div class="mb-40px pb-40px text-dark">
                            Not a member yet? Click <a href="{{ route('register') }}" class="text-primary">here</a> to
                            register.
                        </div>
                        <hr class="bg-gray-600 opacity-2" />
                        <div class="text-gray-600 text-center  mb-0">
                            &copy; Color Admin All Right Reserved 2024
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>

    <script src="{{ asset('assets/js/vendor.min.js')}}" type="b5edb1270c2bb54b266ebd04-text/javascript"></script>
    <script src="{{ asset('assets/js/app.min.js')}}" type="b5edb1270c2bb54b266ebd04-text/javascript"></script>
</body>
</html>
