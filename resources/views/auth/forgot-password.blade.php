@push('title')
    Forgot Password
@endpush
@extends('layouts.auth.app')
@push('style')

@endpush
@section('content')
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h3 class="text-center m-b-20">Forgot Password?</h3>
                        @if ($status ?? '')
                            <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
                                {{ $status }}
                            </div>
                        @endif
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" class="form-control" value="{{ old('email') }}" name="email" type="email" required="" autofocus placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Email Password Reset Link</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Sign In</b></a>
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

{{-- <x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


    </x-auth-card>
</x-guest-layout> --}}
