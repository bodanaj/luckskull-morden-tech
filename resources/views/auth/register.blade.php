<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Finest betting portal for the wild punter in you">
    <meta name="keywords" content="betting site, punter, punt, go punt, bet exchange id">
    <meta name="author" content="GoPunt">
        <link rel="icon" href="assets/images/favicon.png">
    <title>register</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=1.2.17">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300&display=swap" rel="stylesheet">
    <!-- Stylesheet
========================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>
    <!-- Preloader -->
    <div class="preloader preloader-dark">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <div id="main-wrapper" class="oxyy-login-register bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 shadow-lg  align-items-center rounded-3 rounded-start-0 bg-dark pd-15">
                    <div class="container user-space">
                        <div class="row">
                            <div class="col-10 col-lg-10 mx-auto">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <a href="login.php"><li class="breadcrumb-item active page-heading" aria-current="page"><i class="fa fa-arrow-circle-o-left yellow-text" aria-hidden="true"></i>&nbsp;&nbsp;Register</li></a>
                                    </ol>
                                  </nav>

                                <form id="Form" class="form-dark" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    {{-- @php
                                        print_r($errors->all());
                                    @endphp --}}
                                    <div class="mb-3">
                                        <label class="form-label text-light">Name*</label>
                                        <input type="text" class="form-control" required
                                          name="name"  value="{{old('name')}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">Phone Number*</label>
                                        <input type="text" class="form-control" required
                                          name="phone_number" value="{{$phone}}" readonly="readonly" value="{{old('phone_number')}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" :value="__('Password')" class="form-label text-light">Password*</label>
                                        <input type="text" class="form-control" required
                                          name="password" required autocomplete="new-password"  >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light" for="password_confirmation" :value="__('Confirm Password')">Confirm Password*</label>
                                        <input type="text" class="form-control" required
                                        name="password_confirmation" required   >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light">Referrall\promo code</label>
                                        <input type="text" class="form-control"
                                          name="refferral_code"  value="{{old('refferral_code')}}">
                                    </div>
                                    <div class="d-grid my-4">
                                        <button class="btn btn-light padding-10" type="submit">Login</button>
                                    </div>
                                </form>
                                <div class="d-flex align-items-center my-3">
                                    <hr class="flex-grow-1 bg-dark-4">
                                    <span class="mx-2 text-2 text-muted">Or</span>
                                    <hr class="flex-grow-1 bg-dark-4">
                                </div>
                                <p class="text-center">Allready Login? <a href="{{ url('login')}}" class="yellow-text">LOGIN</a></p>
                        </div>
                    </div>
                </div>
                <!-- Login Form End -->
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
