<base href="{{ url('/') }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@stack('title') | {{ config('app.name') }}</title>



<link rel="icon" type="image/png" sizes="16x16" href="{{ asset(get_static_option('fav_icon') ?? get_static_option('no_image')) }}">
<!-- page css -->
<link href="{{ asset('assets/backend/dist/css/pages/login-register-lock.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('assets/backend/dist/css/style.min.css') }}" rel="stylesheet">
@stack('style')
<!--====== AJAX ======-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
