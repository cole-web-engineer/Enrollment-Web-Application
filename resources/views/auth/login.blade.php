@extends('layouts.auth')

@section('content')
    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center mt-0 m-b-15">
                    <a href="/login" class="logo logo-admin"><img src="dash/assets/images/logo1.png" height="30" alt="logo"></a>
                </h3>

                <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>

                <div class="p-3">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email"  placeholder="Email Address" required autofocus>

                                <!-- Error Handle -->

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <!-- End of Error Handle() -->

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required>

                                <!-- Error Handle -->

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <!-- End of Error Handle -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">

                            @if (Route::has('password.request'))

                                <div class="col-sm-7 m-t-20">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock    "></i> Forgot your password?</a>
                                </div>

                            @endif

                            <div class="col-sm-5 m-t-20">
                                <a href="#" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
