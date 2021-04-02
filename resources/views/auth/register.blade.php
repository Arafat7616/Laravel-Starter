@push('title')
    Register
@endpush
@extends('layouts.auth.app')
@push('style')

@endpush
@section('content')
    <section id="wrapper">
        <div class="login-register" style="background-image:url({{ asset('assets/backend/images/background/login-register.jpg') }});">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3 class="text-center m-b-20">Register</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="name" name="name" class="form-control" value="{{ old('name') }}" type="text" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" class="form-control" value="{{ old('email') }}" name="email" type="email" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input  autocomplete="new-password" id="password" name="password" class="form-control" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password_confirmation" name="password_confirmation" class="form-control" type="password" required="" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input required="" type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I agree to all <a href="javascript:void(0)">Terms & Conditions</a> , <a href="javascript:void(0)">Privacy & policy</a></label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Login</b></a>
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
