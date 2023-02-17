<!doctype html>
<html lang="en">

<head>
    <title>Job Portal | <?php echo ucwords($_GET['page']); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="icon" type="image/png" href="../sources/assets/vssfinal.svg" />
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../sources/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../sources/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../sources/assets/vendor/animate-css/vivify.min.css">

    <link rel="stylesheet" href="../sources/assets/vendor/c3/c3.min.css" />
    <link rel="stylesheet" href="../sources/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- For applicants, positions, resumes -->
    <link rel="stylesheet" href="../sources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <!-- For dr-add, settings -->
    <link rel="stylesheet" href="../sources/assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="../sources/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../sources/html/assets/css/site.min.css">

</head>

<body class="theme-orange font-montserrat">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <!-- Theme Setting -->
    <?php include('includes/theme_setting.php'); ?>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Navigation Bar -->
        <?php include('includes/navbar.php'); ?>

        <!-- Search Overlay -->
        <?php include('includes/search_overlay.php'); ?>

        <!-- Megamenu Overlay -->
        <?php include('includes/mega_menu.php'); ?>

        <!-- Right Sidebar -->
        <?php include('includes/rightbar.php'); ?>

        <!-- Left Sidebar or Aside -->
        <?php include('includes/aside.php'); ?>

        <div id="main-content">

            <?php
            if ($_GET['page']) {
                $page = $_GET['page'];
                $display = $page . '.php';
                include($display);
            } else {
                echo 'Sample heheheheh';
            }
            ?>

        </div>

    </div>

    <!-- Javascript -->
    <script src="../sources/html/assets/bundles/libscripts.bundle.js"></script>
    <script src="../sources/html/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../sources/html/assets/bundles/c3.bundle.js"></script>
    <script src="../sources/html/assets/bundles/jvectormap.bundle.js"></script>

    <?php
    if ($_GET['page'] == 'applicants' || $_GET['page'] == 'positions' || $_GET['page'] == 'resumes') :
    ?>
        <!-- For applicants, positions, resumes -->
        <script src="../sources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <?php
    endif;
    ?>

    <?php
    if ($_GET['page'] == 'add_applicant' || $_GET['page'] == 'settings') :
    ?>
        <!-- For add_applicant, settings -->
        <script src="../sources/assets/vendor/dropify/js/dropify.min.js"></script>
        <script src="../sources/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js -->

        <script src="../sources/html/assets/js/pages/forms/dropify.js"></script>
    <?php
    endif;
    ?>


    <script src="../sources/html/assets/bundles/mainscripts.bundle.js"></script>
    <script src="../sources/html/assets/js/jobdashboard.js"></script>

    <script>
        $('#multiselect3-all').multiselect({
            includeSelectAllOption: true,
        });

        function addUrlParameter(name, value) {
            var searchParams = new URLSearchParams(window.location.search);
            searchParams.set(name, value);
            window.location.search = searchParams.toString();
        }
    </script>
</body>

</html>