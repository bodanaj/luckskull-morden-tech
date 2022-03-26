@include('layouts/header')
<div class="page-content-wrapper">
    <div class="container plr-0">
        <div class="full-page full-height" style="    background: #222;">
            <div class="col-md-12 col-lg-12 text-center">
                <img src="https://api.gopunt.com/uploads/accounts/accImg-1617381060032.png" style="height:40px">
                <h5 class="text-light">Go Exchange 9<h5>
                <h6 class="text-light">goexch9.com</h6>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <a href="userlogin.php">
                        <li class="breadcrumb-item active page-heading" aria-current="page">
                            &nbsp;&nbsp; ID Details
                        </li>
                    </a>
                </ol>
            </nav>
            <div class="col-md-12 col-lg-12">

                <div>
                    <div class="col-md-12 col-lg-12">
                        <div class="">
                            <div class="card-body">
                                <div class="single-profile-data d-flex align-items-center justify-content-between">
                                    <div class="title d-flex align-items-center text-light"><span>Min Refill
                                        </span></div>
                                    <div class="data-content">Octopusonline5</div>
                                </div>
                                <div class="single-profile-data d-flex align-items-center justify-content-between">
                                    <div class="title d-flex align-items-center text-light"><span>Min Withdrawal
                                        </span></div>
                                    <div class="data-content">Octopusonline5</div>
                                </div>
                                <div class="single-profile-data d-flex align-items-center justify-content-between">
                                    <div class="title d-flex align-items-center text-light"><span>Min Maintaining Bal
                                        </span></div>
                                    <div class="data-content">Demo1234</div>
                                </div>
                                <div class="single-profile-data d-flex align-items-center justify-content-between">
                                    <div class="title d-flex align-items-center text-light"><span>Max Withdrawal

                                        </span></div>
                                    <div class="data-content">Demo1234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-lg-11 padding-0 mx-auto">

                    <form id="loginForm" class="form-dark" method="POST" action="{{ route('createfrom') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-light">Username *</label>
                            <input type="text" class="form-control text-white" :value="old('username')" required autofocus
                                          name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-light">Deposite Coin*</label>
                            <input type="number" class="form-control text-white" :value="old('coins')" required autofocus
                                          name="coins" value="100">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label text-light">
                                <input type="checkbox" class="form-check-input text-light" value="">pay from
                                Wallet<br>(Current
                                wallet balance 0)
                            </label>
                        </div>
                        <div class="d-grid my-4 text-light">
                            <button class="btn btn-warning padding-10" type="submit">Continue to PAY Rs 100</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts/footer')
