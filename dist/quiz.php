<?php session_start();


?>
<?php
if (!isset($_SESSION['username'])) {
    header("login.php");
}
?>

<?php include_once "./connections/config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark py-4 ">
        <!-- Navbar Brand-->

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->

        <a class="navbar-brand ps-3 " href="index.php">Basic Programming E-Learning Application</a>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div> -->
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="./control/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>





                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            File Manager
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapseLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="module.php">Module</a>
                                <a class="nav-link" href="lesson.php">Lesson</a>
                                <a class="nav-link" href="sub-lesson.php">Sub-Lesson</a>
                                <a class="nav-link" href="code.php">Snippets</a>

                            </nav>
                        </div>


                        <div class="sb-sidenav-menu-heading">Quizzes</div>
                        <a class="nav-link" href="quiz.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Add Quiz
                        </a>
                        <!-- <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a> -->
                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#table" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Tables
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="table" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="editModule.php">Edit Module</a>
                                <a class="nav-link" href="editLesson.php">Edit Lesson</a>
                                <a class="nav-link" href="editSub.php">Edit Sub-Lesson</a>

                            </nav>
                        </div> -->

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: <?php echo $_SESSION['username'] ?></div>

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">


                    <div class="row">

                        <div>
                            <h1 class="mt-4">Quiz</h1>
                            <button type="button" class="btn btn-primary my-4" data-toggle="modal" data-target="#exampleModalCenter">
                                Add Quiz
                            </button>
                            <button type="button" class="btn btn-primary my-4" data-toggle="modal" data-target="#exampleModalCenters">
                                Add Questions
                            </button>
                            <button type="button" class="btn btn-primary my-4" data-toggle="modal" data-target="#exampleModalCenterss">
                                Add Choices
                            </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="text-info text-center py-4">Add Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="./control/add.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" class="form-control my-2" id="title" name="title" placeholder="Title...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="module_id">Module_ID</label>
                                                    <select class="form-control" name="module_id">
                                                        <?php
                                                        $module_id  = $_SESSION['module_id'];

                                                        foreach ($_SESSION['module_id'] as $module) :
                                                        ?>

                                                            <option value=<?= $module ?>><?= $module ?></option>
                                                        <?php

                                                        endforeach

                                                        ?>


                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input type="date" class="form-control my-2" id="date" name="started_at" placeholder="lesson_name...">
                                                </div>






                                                <div class="modal-footer">
                                                    <button type="submit" name="addQuiz" class="btn btn-primary my-2">Submit</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php

                            ?>
                            <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="text-info text-center py-4">Add Questions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="./control/add.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="quiz_id">Quiz_ID</label>
                                                    <select class="form-control" name="quiz_id" type="number">
                                                        <?php
                                                        $quiz_id  = $_SESSION['quiz_id'];

                                                        foreach ($_SESSION['quiz_id'] as $quiz) :
                                                        ?>

                                                            <option value=<?= $quiz ?>><?= $quiz ?></option>
                                                        <?php

                                                        endforeach

                                                        ?>


                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description">Question</label>
                                                    <input type="text" class="form-control my-2" id="description" name="description" placeholder="description...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="time_duration">Time</label>
                                                    <input type="number" class="form-control my-2" id="time_duration" name="time_duration" placeholder="time seconcds...">
                                                </div>

                                                <div class="form-group">
                                                    <label for="difficulty_level">Difficulty Level</label>
                                                    <select class="form-control" name="difficulty_level">
                                                        <option value="easy" selected>Easy</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="hard">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="quiestion_type">Quiz Type</label>
                                                    <select id="quiestion_type" class="form-control" name="question_type">
                                                        <option value="Multiple Choice" selected>Multiple Choice</option>
                                                        <option value="Problem Solving">Problem Solving</option>


                                                    </select>
                                                </div>
                                                <!-- <div>

                                                    <label>Answers </label>
                                                </div>
                                                <div class="form-group">

                                                    <input type="text" class="form-control my-2" name="A" placeholder="A.">
                                                </div>
                                                <div class="form-group">

                                                    <input type="text" class="form-control my-2" name="B" placeholder="B.">
                                                </div>

                                                <div class="form-group">

                                                    <input type="text" class="form-control my-2" name="C" placeholder="C.">
                                                </div>
                                                <fieldset class="form-group">


                                                    <label for="">Correct Answer</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="answerA" id="answer" value="A" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                A
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="answerB" id="answer" value="B">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                B
                                                            </label>
                                                        </div>
                                                        <div class="form-check disabled">
                                                            <input class="form-check-input" type="radio" name="answerC" id="answer" value="C">
                                                            <label class="form-check-label" for="gridRadios3">
                                                                C
                                                            </label>
                                                        </div>
                                                    </div>

                                                </fieldset> -->







                                                <div class="modal-footer">
                                                    <button type="submit" name="addQuestion" class="btn btn-primary my-2">Submit</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalCenterss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="text-info text-center py-4">Add Choices</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="./control/add.php" method="post" enctype="multipart/form-data">




                                                <div class="form-group">
                                                    <label for="answer">Answer</label>
                                                    <select class="form-control" name="answer">

                                                        <option value="false">False</option>

                                                        <option value="true">True</option>


                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date">Choice Description</label>
                                                    <input type="text" class="form-control my-2" id="date" name="choice_description" placeholder="lesson_name...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="questions_id">Questions_ID</label>
                                                    <input type="number" class="form-control my-2" id="questions_id" name="questions_id" placeholder="lesson_name...">
                                                </div>

                                                

                                                <div class="modal-footer">
                                                    <button type="submit" name="addChoices" class="btn btn-primary my-2">Submit</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Quiz Table
                        </div>
                        <?php



                        $sql = "SELECT * from quiz_tbl";
                        $result = $conn->query($sql);




                        ?>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>

                                    <tr>
                                        <th scope="col">Quiz_ID</th>
                                        <th scope="col">Session</th>
                                        <th scope="col">Module_Id</th>
                                        <th scope="col">Date_Created</th>

                                        <th scope="col">Edit</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th scope="col">Quiz_ID</th>
                                        <th scope="col">Session</th>
                                        <th scope="col">Module_Id</th>
                                        <th scope="col">Date_Created</th>

                                        <th scope="col">Edit</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ($result->num_rows > 0) {
                                        $arr1 = array();
                                        $arr2 = array();
                                        while ($row = $result->fetch_assoc()) {
                                            $arr2 = $row['quiz_id'];
                                            array_push($arr1, $arr2);
                                    ?>

                                            <tr>
                                                <th scope="row"><?php echo $row['quiz_id']; ?></th>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><?php echo $row['module_id']; ?></td>

                                                <td><?php echo $row['started_at']; ?></td>

                                                <td>
                                                    <div class="d-flex"><a class="btn btn-danger mx-2 text-white">Delete</a><a class="btn btn-info mx-2 text-white" href="editModule.php?id=<?= $row['module_id'] ?>">Edit</a></div>
                                                </td>

                                            </tr>
                                    <?php

                                        }
                                        $_SESSION['quiz_id'] = $arr1;
                                    }


                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Question Table
                        </div>
                        <?php



                        $sql = "SELECT * from questions_tbl";
                        $result = $conn->query($sql);




                        ?>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table">
                                <thead>

                                    <tr>
                                        <th scope="col">Question_ID</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Quiz_ID</th>
                                        <th scope="col">Difficulty_Level</th>
                                        <th scope="col">Question_Type</th>
                                        <th scope="col">Edit</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {

                                    ?>

                                            <tr>
                                                <th scope="row"><?php echo $row['question_id']; ?></th>
                                                <td><?php echo $row['description']; ?></td>

                                                <td><?php echo $row['time']; ?></td>
                                                <td><?php echo $row['quiz_id']; ?></td>
                                                <td><?php echo $row['difficulty_level']; ?></td>
                                                <td><?php echo $row['question_type']; ?></td>

                                                <td>
                                                    <div class="d-flex"><a class="btn btn-danger mx-2 text-white">Delete</a><a class="btn btn-info mx-2 text-white" href="editModule.php?id=<?= $row['question_id'] ?>">Edit</a></div>
                                                </td>

                                            </tr>
                                    <?php

                                        }
                                        $_SESSION['quiz_id'] = $arr1;
                                    }


                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Choices Table
                        </div>
                        <?php



                        $sql = "SELECT * from choices_tbl";
                        $result = $conn->query($sql);




                        ?>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table">
                                <thead>

                                    <tr>
                                        <th scope="col">Choices_ID</th>
                                        <th scope="col">answer</th>
                                        <th scope="col">Choice_Description</th>

                                        <th scope="col">Question_ID</th>
                                        <th scope="col">Edit</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {

                                    ?>

                                            <tr>
                                                <th scope="row"><?php echo $row['choices_id']; ?></th>
                                                <td><?php echo $row['answer']; ?></td>
                                                <td><?php echo $row['choice_description']; ?></td>

                                                <td><?php echo $row['question_id']; ?></td>

                                                <td>
                                                    <div class="d-flex"><a class="btn btn-danger mx-2 text-white">Delete</a><a class="btn btn-info mx-2 text-white" href="editModule.php?id=<?= $row['choices_id'] ?>">Edit</a></div>
                                                </td>

                                            </tr>
                                    <?php

                                        }
                                    }


                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2022 Basic Programming E-Learning Application</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>