<?php
include './head.inc.php';
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
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
                <h2 class="m-4 ">Create Quiz</h2>
                <hr>
                <div class="container mt-4">
                    <form class="user" action="./add-questions.php" method="POST">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="" class="form-label">Name:</label>
                                <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Quiz Name" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="" class="form-label">Total Questions:</label>

                                <input type="number" name="total_ques"  class="form-control form-control-user" id="total_ques" placeholder="Enter Total Number Of Questions" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="" class="form-label">Category:</label>

                                <input type="text" name="category" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Category" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="" class="form-label">Quiz Time (In Mins):</label>

                                <input type="number" name="time" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Total Quiz Time (In Mins)" required>
                            </div>
                        </div>
                        
                       

                        <input type="submit" name="create_quiz" class="btn btn-primary btn-user btn-block" value="Add Questions">

                        <hr>
                    </form>
                </div>


                <?php
                include './topbar.inc.php';
                

                ?>


            </div>
        </div>
    </div>


    <?php
    include './footer.inc.php';
    ?>