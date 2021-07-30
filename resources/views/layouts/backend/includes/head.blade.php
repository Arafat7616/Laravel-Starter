<base href="{{ url('/') }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@stack('title') | {{ config('app.name') }}</title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset(get_static_option('fav_icon') ?? get_static_option('no_image')) }}">
<!-- chartist CSS -->
<link href="{{ asset('assets/backend/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
<!--Toaster Popup message CSS -->
<link href="{{ asset('assets/backend/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('assets/backend/dist/css/style.min.css') }}" rel="stylesheet">
<!-- Dashboard 1 Page CSS -->
<link href="{{ asset('assets/backend/dist/css/pages/dashboard1.css') }}" rel="stylesheet">
<link href="{{ asset('assets/helpers/helper.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/dist/css/pages/icon-page.css') }}" rel="stylesheet">
<!-- This page CSS -->
@stack('style')
<!-- End CSS -->
<!--====== AJAX ======-->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
{{-- summer note cdn   --}}
{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


