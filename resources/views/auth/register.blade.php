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
        <div class="register register-with-news-feed">
            <div class="news-feed">
                <div class="news-image"
                    style="background-image: url({{ asset('assets/img/login-bg/login-bg-11.jpg') }})"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Color</b> Admin App</h4>
                    <p>
                        Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                    </p>
                </div>
            </div>

            <div class="register-container">

                <div class="register-header mb-25px h1">
                    <div class="mb-1">Sign Up</div>
                    <small class="d-block fs-15px lh-16">Create your Color Admin Account. It’s free and always will
                        be.</small>
                </div>


                <div class="register-content">

                    <form action="{{ route('register') }}" method="POST" class="fs-13px">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2">Name <span class="text-danger">*</span></label>
                            <div class="row gx-3">
                                <div class="col-md-12 mb-2 mb-md-0">
                                    <input type="text" name="name"
                                        class="form-control fs-13px @error('name') is-invalid @enderror"
                                        placeholder="Your Name" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Email <span class="text-danger">*</span></label>
                            <input type="text" name="email"
                                class="form-control fs-13px @error('email') is-invalid @enderror"
                                placeholder="Email address" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="mb-2">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control fs-13px @error('password') is-invalid @enderror"
                                placeholder="Password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control fs-13px"
                                placeholder="Re-enter The Password" />
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">Select Role <span class="text-danger">*</span></label>
                            <select class="form-select" name="role" required>
                                <option value="">Select Role</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Retailer">Retailer</option>
                                <option value="Supplier">Supplier</option>
                            </select>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value id="agreementCheckbox" />
                            <label class="form-check-label" for="agreementCheckbox">
                                By clicking Sign Up, you agree to our <a href="javascript:;">Terms</a> and that you have
                                read our <a href="javascript:;">Data Policy</a>, including our <a
                                    href="javascript:;">Cookie Use</a>.
                            </label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-theme d-block w-100 btn-lg h-45px fs-13px">Sign
                                Up</button>
                        </div>
                        <div class="mb-4 pb-5">
                            Already a member? Click <a href="{{ url('/login') }}">here</a> to login.
                        </div>
                        <hr class="bg-gray-600 opacity-2" />
                        <p class="text-center text-gray-600">
                            &copy; Color Admin All Right Reserved 2024
                        </p>
                    </form>
                </div>

            </div>

        </div>

    </div>

    <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i
            class="fa fa-angle-up"></i></a>
    </div>



    <script src="{{ asset('assets/js/vendor.min.js')}}" type="b5edb1270c2bb54b266ebd04-text/javascript"></script>
    <script src="{{ asset('assets/js/app.min.js')}}" type="b5edb1270c2bb54b266ebd04-text/javascript"></script>
</body>

</html>
