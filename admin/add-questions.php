<?php
include './head.inc.php';
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
    header("location: ./login.php");
}
if (isset($_POST['create_quiz'])) {
    $name = $_POST['name'];
    $total_ques = $_POST['total_ques'];
    $category = $_POST['category'];
    $time = $_POST['time'];

    $que = "INSERT INTO `quiz_details` (`name`, `total_ques`, `category`, `time`) VALUES ('$name', $total_ques, '$category', '$time')";
    $run = mysqli_query($con, $que);

    if(!$run){
        echo "<script>alert('kuch to gadbad hai daya');</script>";
    }else{
        echo "<script>alert('mare ko jana pdega');</script>";
        
    }
}else{
    echo "<script> alert('pela quiz ni detials nakho khoti sadi karo ma'); window.location.href ='./add-quiz.php';</script>";
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
                <h2 class="m-4 ">Add Questions</h2>
                <hr>
                <div class="container mt-4">
                    <form class="user" method="POST">
                        <div class="questions" id="ques">
                            <hr>
                            <?php
                            for ($i = 1; $i <=$total_ques; $i++) {
                                # code...

                            ?>
                                <h4>Question <?= $i?></h4>
                                <div class="form-group">
                                    <label for="" class="form-label">Question:</label>

                                    <input type="number" name="time" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Total Quiz Time (In Mins)">
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 1:</label>

                                        <input type="number" name="time" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Total Quiz Time (In Mins)">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 2:</label>

                                        <input type="number" name="time" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Total Quiz Time (In Mins)">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 3:</label>

                                        <input type="number" name="time" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Total Quiz Time (In Mins)">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 4:</label>

                                        <input type="number" name="time" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Total Quiz Time (In Mins)">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="" class="form-label">Answer:</label>
                                        <select name="answer" id="" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
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