<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.auth.includes.head')
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   @include('layouts.auth.includes.loader')

    @yield('content')

   @include('layouts.auth.includes.foot')
</body>

</html>
