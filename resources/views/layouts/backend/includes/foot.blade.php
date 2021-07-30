@stack('summer-note')

<!--====== AJAX ======-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- summer note cdn   --}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Start JS -->
<script src="{{ asset('assets/backend/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('assets/backend/node_modules/popper/popper.min.js') }}"></script>
<script src="{{ asset('assets/backend/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('assets/backend/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('assets/backend/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('assets/backend/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('assets/backend/dist/js/custom.min.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{ asset('assets/backend/node_modules/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/backend/node_modules/morrisjs/morris.min.js') }}"></script>
<script src="{{ asset('assets/backend/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<!-- Popup message jquery -->
<script src="{{ asset('assets/backend/node_modules/toast-master/js/jquery.toast.js') }}"></script>
<!-- Chart JS -->
<script src="{{ asset('assets/backend/dist/js/dashboard1.js') }}"></script>
<script src="{{ asset('assets/backend/node_modules/toast-master/js/jquery.toast.js') }}"></script>
<!-- End JS -->
<script src="{{ asset('assets/helpers/helper.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweetalert::alert')
@stack('script')
@stack('summer-note')
