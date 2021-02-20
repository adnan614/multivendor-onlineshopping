<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Online Shopping Management</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/assets/plugins/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('backend/assets/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('backend/assets/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    @yield('main')


    <script src="{{asset('backend/assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('backend/assets/plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('backend/assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('backend/assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('backend/assets/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <scrip src="{{asset('backend/assets/js/custom.js')}}">
        </script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <scrip src="{{asset('backend/assets/plugins/bower_components/chartist/dist/chartist.min.js')}}"></scrip>
        <scrip src="{{asset('backend/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></scrip>
        <scrip src="{{asset('backend/assets/js/pages/dashboards/dashboard1.js')}}"></scrip>
        <scrip src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></scrip>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        {!! Toastr::message() !!}


</body>

</html>