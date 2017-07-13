<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> </title>
     <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap-datetimepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" />
    <script src="<?php echo asset('js/moment.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="/lawnservices/resources/views/home/js/btn_services_scheduling.js"></script>
    <script src="/lawnservices/resources/views/home/js/menu_add_client.js"></script>
    <script src="/lawnservices/resources/views/home/js/table2excel.js"></script>
    <script src="/lawnservices/resources/views/home/js/sel_add_payment.js"></script>
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        <?php echo $__env->make('layouts.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            <?php echo $__env->make('layouts.topnavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Main view  -->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>

</body>
</html>
