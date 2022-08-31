<?php
include './head.inc.php';
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
    header("location: ./login.php");
}
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <?php
    include './sidebar.inc.php';
    ?>
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               


                  <?php
                 include './topbar.inc.php';
                  ?>
            </div>
        </div>
    </div>

              

           <?php
           include './footer.inc.php';
           ?>