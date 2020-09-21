<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
@include('administrator.share_layouts.head')
<!-- ============================================================== -->




<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">


    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    @include('administrator.share_layouts.header')
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- sidebar left -->
    @include('administrator.share_layouts.sidebar')
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        @yield('main_content')
        <!-- ============================================================== -->
        @include('administrator.share_layouts.footer')
        <!-- ============================================================== -->

