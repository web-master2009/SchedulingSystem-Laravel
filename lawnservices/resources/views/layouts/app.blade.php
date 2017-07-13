<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') </title>
     <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-datetimepicker.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <script src="{!! asset('js/moment.js')!!}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/bootstrap-datetimepicker.min.js')!!}"></script>
    <script src="/lawnservices/resources/views/home/js/btn_services_scheduling.js"></script>
    <script src="/lawnservices/resources/views/home/js/menu_add_client.js"></script>
    <script src="/lawnservices/resources/views/home/js/table2excel.js"></script>
    <script src="/lawnservices/resources/views/home/js/sel_add_payment.js"></script>
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')  

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')
            
        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

@section('scripts')
@show

</body>
</html>
