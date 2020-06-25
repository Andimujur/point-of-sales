<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href=" {{asset('template_login')}}/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('template_login')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('template_login')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('template_login')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('template_login')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('template_login')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('template_login')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template_login')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color:grey">
    <div class="limiter" style="margin-top: 10%;">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-8">
                    <div class="card p-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="login100-pic js-tilt" data-tilt>
                                    <img src="{{asset('template_login')}}/images/cart.png" alt="IMG" class="img-fluid" width="300px">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <form action="{{route('login')}}" class="login100-form validate-form" autocomplete="off" method="post">
                                    @csrf
                                    <span class="login100-form-title">
                                        Point Of Sales
                                    </span>
                                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="username" placeholder="username" value="{{old('username')}}">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <input class="input100" type="password" name="password" placeholder="Password">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button type="submit" class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>
                                </form>
                              </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="{{asset('template_login')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('template_login')}}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{asset('template_login')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('template_login')}}/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('template_login')}}/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('template_login')}}/js/main.js"></script>

</body>

</html>
