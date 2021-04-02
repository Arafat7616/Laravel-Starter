@push('title')
    Login
@endpush
@extends('layouts.auth.app')
@push('style')

@endpush
@section('content')
    <section id="wrapper">
        <div class="login-register" style="background-image:url({{ asset('assets/backend/images/background/login-register.jpg') }});">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform"  method="POST"   action="{{ route('login') }}">
                        @csrf
                        <h3 class="text-center m-b-20">Login</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" name="email" value="{{ old('email') }}" class="form-control" type="email" required="" autofocus placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input name="password" id="password" class="form-control" type="password" required=""  autocomplete="current-password"  placeholder="Password">
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="ml-auto">
                                            <a href="{{ route('password.request') }}" id="to-recover" class="text-muted"><i
                                                    class="fas fa-lock m-r-5"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <button class="btn  btn-facebook" data-toggle="tooltip" title=""
                                        data-original-title="Login with Facebook"> <i aria-hidden="true"
                                            class="fab fa-facebook-f"></i> </button>
                                    <button class="btn btn-googleplus" data-toggle="tooltip" title=""
                                        data-original-title="Login with Google"> <i aria-hidden="true"
                                            class="fab fa-google-plus-g"></i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')

@endpush
