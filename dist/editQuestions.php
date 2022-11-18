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
                                <a class="nav-link" href="module.php">Edit Module</a>
                                <a class="nav-link" href="lesson.php">Edit Lesson</a>
                                <a class="nav-link" href="sub-lesson.php">Edit Sub-Lesson</a>

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
                <div class="container-fluid px-4 mt-4">
                    <div class="row">
                        <!-- <div>
                            <?php
                            if (isset($_SESSION['success'])) {
                            ?>
                                <div class=" alert alert-warning alert-dismissible fade show" role="alert">
                                    <h3 class="text-info  " id="success"><?= $_SESSION['success'] ?></h3>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>

                            <?php
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['error'])) {
                            ?>
                                <div class=" alert alert-danger alert-dismissible fade show" role="alert">
                                    <h3 class="text-info  " id="success"><?= $_SESSION['success'] ?></h3>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>

                            <?php
                            }
                            ?>
                        </div> -->
                    </div>

                    <div class="row">



                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Questions Table
                            </div>
                            <?php

                            $sql = "SELECT * from questions_tbl";
                            $result = $conn->query($sql);




                            ?>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>

                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Quiz ID</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Question Type</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Quiz ID</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Question Type</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if ($result->num_rows > 0) {
                                            $arr1 = array();
                                            $arr2 = array();
                                            while ($row = $result->fetch_assoc()) {
                                                $arr2 = $row['question_id'];
                                                array_push($arr1, $arr2);
                                        ?>

                                                <tr>
                                                    <th scope="row"><?php echo $row['question_id']; ?></th>
                                                    <td><?php echo $row['description']; ?></td>
                                                    <td><?php echo $row['time']; ?></td>
                                                    <td><?php echo $row['quiz_id']; ?></td>
                                                    <td><?php echo $row['difficulty_level']; ?></td>
                                                    <td><?php echo $row['question_type']; ?></td>

                                                    <td>
                                                        <div class="d-flex"><a onClick="return confirm('are you sure you want to delete this question?')" href="./control/delete.php?question_id=<?= $row['question_id']; ?>" class="btn btn-danger mx-2 text-white">Delete</a><a class="btn btn-info mx-2 text-white" href="editQuestions.php?id=<?= $row['question_id'] ?>#edit">Edit</a></div>
                                                    </td>

                                                </tr>
                                        <?php

                                            }
                                        } else {
                                            echo "no records found";
                                        }


                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4"></div>

                        <div class="col-4">
                            <div class="card my-4 p-2">
                                <div class="container justify-content-center align-items-center">
                                    <?php



                                    $id = $_GET['id'];
                                    $sql = "SELECT * from questions_tbl where question_id = '$id';";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {


                                    ?>
                                            <form action="./control/update.php" method="post" enctype="multipart/form-data" id="edit">
                                                <h3 class="text-info text-center py-4">Edit Questions</h3>
                                                <!-- <div class="form-group">

                                                    <label for="title">Module_ID</label>
                                                    <select id="inputState" class="form-control" name="module_id">
                                                        <?php
                                                        foreach ($arr1 as $value) :
                                                        ?>


                                                            <option value="<?= $value ?> " selected><?= $value ?></option>



                                                        <?php
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                </div> -->
                                                <div class="form-group">
                                                    <label for="module_id">Question ID</label>
                                                  
                                                
                                                    <input type="text" class="form-control" value=<?= $row['question_id'] ?> name="question_id" placeholder="question_id...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="module_id">Quiz_ID</label>

                                                    <input type="text" class="form-control" value=<?= $row['quiz_id'] ?> name="quiz_id" placeholder="quiz_id...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="module_id">Description</label>
                                                    <textarea type="text" placeholder="description..." class="form-control my-2" name="description" rows="4"> <?php echo $row['description'] ?></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="module_id">time</label>

                                                    <input type="number" class="form-control" value=<?= $row['time'] ?> name="time" placeholder="time...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Level</label>
                                                    <input type="text" class="form-control" value=<?= $row['difficulty_level'] ?> name="difficulty_level" placeholder="time...">

                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Question Type</label>
                                                    <textarea type="text" placeholder="type..." class="form-control my-2" name="question_type"> <?php echo $row['question_type'] ?></textarea>

                                                </div>




                                                <div class="text-center">
                                                    <button type="submit" name="questionsUpdate" class="btn btn-primary my-2">Update</button>
                                                </div>
                                            </form>
                                    <?php

                                        }
                                    } else {
                                        echo "no records found";
                                    }

                                    $conn->close();
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-4"></div>

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