<!DOCTYPE html>
<html>
<!-- Mirrored from gambolthemes.net/workwise-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:56 GMT -->
<head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/line-awesome-font-awesome.min.css') }}">
    <link href="{{ asset('/frontend-assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
</head>
<body class="sign-in" oncontextmenu="return false;">
<div class="wrapper">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="{{ asset('/frontend-assets/images/cm-logo.png') }}" alt="">
                                <p>Workwise, is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                            </div>
                            <img src="{{ asset('/frontend-assets/images/cm-main-img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                                <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                            </ul>
                            <div class="sign_in_sec current" id="tab-1">
                                <h3>Sign in</h3>
                                <form name="loginForm" method="post" action="{{ route('login.process') }}">
                                    @csrf
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger show mb-2" role="alert">{{ $error }}</div>
                                        @endforeach
                                    @endif
                                    @if (session()->has('error'))
                                            <div class="alert alert-danger show mb-2" role="alert">{{ session('error') }}</div>
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="email" name="email" id="login_email" placeholder="Email">
                                                <i class="la la-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="password" name="password" id="login_password" placeholder="Password">
                                                <i class="la la-lock"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="checky-sec">
                                                <div class="fgt-sec">
                                                    <input type="checkbox" name="remember_me" id="c1">
                                                    <label for="c1">
                                                        <span></span>
                                                    </label>
                                                    <small>Remember me</small>
                                                </div>
                                                <a href="#" title="">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="sign_in_sec" id="tab-2">
                                <div class="dff-tab current" id="tab-3">
                                    <form name="registerForm" id="registerForm" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="firstname" id="register_firstname" placeholder="First Name" >
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="lastname" id="register_lastname" placeholder="Last Name" >
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <select name="country" id="register_country" placeholder="Your Country" >
                                                        <option>Select Country</option>
                                                        @foreach($countries as $key => $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="email" name="email" id="register_email" placeholder="Email" >
                                                    <i class="la la-at"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" id="register_password" placeholder="Password" >
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password_confirmation" id="register_repeatPassword" placeholder="Repeat Password" >
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="terms_accept" id="c2">
                                                        <label for="c2">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Get Started</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/lib/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {
        $('#registerForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            axios.post('{{route('register.process') }}', formData)
                .then(response => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.data.message
                    }).then(function() {
                        window.location.reload();
                    });

                })
                .catch(error => {
                    if (error.response.status === 422) {
                        var errors = error.response.data.errors;
                        // Handle validation errors
                        $.each(errors, function(field, messages) {
                            var $input = $('[name="' + field + '"]');
                            $input.addClass('is-invalid');
                            $input.before('<p class="text-danger">' + messages[0] + '</p>');
                        });
                    } else {
                        console.log(error.response.data);
                    }
                });

        });
    });
</script>
</body>
</html>