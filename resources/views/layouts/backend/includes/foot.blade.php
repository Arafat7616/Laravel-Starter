@stack('summer-note')

<!--====== AJAX ======-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- summer note cdn   --}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Start JS -->
{{-- <script src="{{ asset('assets/backend/node_modules/jquery/jquery-3.2.1.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap popper Core JavaScript -->
{{-- <script src="{{ asset('assets/backend/node_modules/popper/popper.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{ asset('assets/backend/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
{{-- <script src="{{ asset('assets/backend/node_modules/raphael/raphael-min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js" integrity="sha512-tBzZQxySO5q5lqwLWfu8Q+o4VkTcRGOeQGVQ0ueJga4A1RKuzmAu5HXDOXLEjpbKyV7ow9ympVoa6wZLEzRzDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{ asset('assets/backend/node_modules/morrisjs/morris.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.2.7/morris.min.js" integrity="sha512-nF4mXN+lVFhVGCieWAK/uWG5iPru9+/z1iz0MJbYTto85I/k7gmbTFFFNgU+xVRkF0LI2nRCK20AhxFIizNsXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{ asset('assets/backend/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js" integrity="sha512-3PRVLmoBYuBDbCEojg5qdmd9UhkPiyoczSFYjnLhFb2KAFsWWEMlAPt0olX1Nv7zGhDfhGEVkXsu51a55nlYmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Popup message jquery -->
{{-- <script src="{{ asset('assets/backend/node_modules/toast-master/js/jquery.toast.js') }}"></script> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="{{ asset('assets/backend/dist/js/dashboard1.js') }}"></script>
{{-- <script src="{{ asset('assets/backend/node_modules/toast-master/js/jquery.toast.js') }}"></script> --}}
<!-- End JS -->
<script src="{{ asset('assets/helpers/helper.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweetalert::alert')
@stack('script')
@stack('summer-note')
