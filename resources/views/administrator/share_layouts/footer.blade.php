<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<footer class="footer text-center text-muted">
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{asset('administrator/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('administrator/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('administrator/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<!-- apps -->
<script src="{{asset('administrator/dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('administrator/dist/js/feather.min.js')}}"></script>
<script src="{{asset('administrator/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('administrator/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('administrator/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<script src="{{asset('administrator/assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('administrator/assets/extra-libs/c3/c3.min.js')}}"></script>
<script src="{{asset('administrator/assets/libs/chartist/dist/chartist.min.js')}}"></script>
{{--<script src="{{asset('administrator/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>--}}
{{--<script src="{{asset('administrator/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>--}}
{{--<script src="{{asset('administrator/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
{{--<script src="{{asset('administrator/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>--}}

<script src="{{asset('administrator/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('administrator/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>

<script src="{{asset('administrator/libs/toastr/toastr.min.js')}}"></script>
<script>
    @if(session()->has('success'))
    toastr.success('{!! session()->get('success') !!}');
    @elseif (session()->has('warning'))
    toastr.warning('{!! session()->get('warning') !!}');
    @elseif (session()->has('error'))
    toastr.error('{!! session()->get('error') !!}');
    @endif
</script>
@yield('footer')
@yield('javascript')


</body>
</html>
