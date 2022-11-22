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
                <div class="container-fluid px-4 mt-4">

                    <div class="row my-2">

                    </div>
                    <div class="row">
                        <div class="col-md-4 " style="margin-top: 50px;">

                            <div class="container justify-content-center align-items-center">
                                <!-- <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student_ID</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                        </tr>
                                    </thead>
                                    <tbody> -->
                                <h3>Student Details</h3>
                                <?php




                                $sql = "SELECT * from student_tbl where student_id = '$_GET[student_id]'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {


                                ?>

                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item">Student_ID : <?= $row['student_id'] ?></li>
                                            <li class="list-group-item">Username : <?= $row['username'] ?></li>
                                            <li class="list-group-item">Password : <?= $row['email'] ?></li>
                                            <li class="list-group-item">Password : <?= $row['password'] ?></li>
                                        </ol>

                                <?php

                                    }
                                } else {
                                    echo "no records found";
                                }


                                ?>

                                <!-- </tbody>
                                </table> -->


                            </div>

                        </div>

                        <div class="col-4" style="margin-top: 20px;">
                            <div class=" white-box mt-4">
                                <h3>Student Modules</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ModuleID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php


                                        $array1 = array();
                                        $array2 = array();

                                        $sql = "SELECT modules_tbl.`module_id`, modules_tbl.`title` , modules_tbl.`status` FROM programming_language_tbl INNER JOIN modules_tbl ON modules_tbl.`programming_id` = programming_language_tbl.`programming_id` WHERE programming_language_tbl.`student_id` = '$_GET[student_id]'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $array2 = $row['module_id'];
                                                array_push($array1, $array2);

                                        ?>
                                                <tr>

                                                    <td><?= $row['module_id'] ?></td>
                                                    <td><?= $row['title'] ?></td>
                                                    <?php
                                                    if ($row['status'] == "unlock") { ?>
                                                        <td class="text-info">
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                    <?php  } elseif ($row['status'] == "done") { ?>
                                                        <td class="text-warning">
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                    <?php } else { ?>
                                                        <td class="text-dark">
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                    <?php  }
                                                    ?>
                                                </tr>
                                        <?php

                                            }
                                            $_SESSION['modules'] =   $array1;
                                        } else {
                                            echo "no records found";
                                        }


                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-4 " style="margin-top: 50px;">
                            <div class="card my-4 p-2">
                                <div class="container justify-content-center align-items-center">

                                    <form action="./control/add.php?student_id=<?= $_GET['student_id'] ?>" method="post" enctype="multipart/form-data">
                                        <h3 class="text-info text-center py-4">Add Lesson</h3>


                                        <div class="form-group">

                                            <div class="form-group">
                                                <label for="module_id">Module ID</label>


                                                <select id="quiestion_type" class="form-control" name="module_id">
                                                    <?php foreach ($_SESSION['modules'] as $modules) : ?>
                                                        <option value=<?= $modules ?>><?= $modules ?></option>

                                                    <?php
                                                    endforeach;

                                                    ?>




                                                </select>

                                            </div>
                                            <label for="module_id">lesson</label>
                                            <?php if (isset($_GET['addLesson'])) { ?>
                                                <input type="text" class="form-control" name="lesson" value="<?= $_GET['addLesson'] ?>" placeholder="lesson...">
                                            <?php } else { ?>
                                                <input type="text" class="form-control" name="lesson" placeholder="lesson...">
                                            <?php  } ?>


                                        </div>
                                        <div class="form-group">
                                            <label for="module_id">Lesson Name</label>
                                            <?php if (isset($_GET['addLesson'])) { ?>
                                                <input type="text" class="form-control" name="lesson_name" value="<?= $_GET['name'] ?>" placeholder="lesson_name...">

                                            <?php } else { ?>
                                                <input type="text" class="form-control" name="lesson_name" placeholder="lesson_name...">
                                            <?php  } ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="title">Status</label>
                                            <select id="quiestion_type" class="form-control" name="status">
                                                <option value="lock" selected>lock</option>
                                                <option value="unlock">unlock</option>

                                                <option value="done">done</option>

                                            </select>
                                        </div>




                                        <div class="text-center">
                                            <button type="submit" name="addLessons" class="btn btn-primary my-2">Add</button>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Lessons Table
                            </div>
                            <?php

                            $sql = "SELECT * from les_tbl group by lessons order by lessons";
                            $result = $conn->query($sql);




                            ?>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>

                                        <tr>
                                            <th scope="col">lesson</th>
                                            <th scope="col">Lesson_name</th>


                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">lesson</th>
                                            <th scope="col">Lesson_name</th>
                                            <th scope="col">Status</th>

                                            <th scope="col">Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                        ?>

                                                <tr>
                                                    <th scope="row"><?php echo $row['lessons']; ?></th>
                                                    <td><?php echo $row['lesson_name']; ?></td>




                                                    <td>
                                                        <div class="d-flex"><a class="btn btn-info mx-2 text-white" href="./addModuleAll.php?student_id=<?= $_GET['student_id'] ?>&addLesson=<?= $row['lessons'] ?>&name=<?= $row['lesson_name'] ?>&student_id=<?= $_GET['student_id'] ?>">Add</a></div>
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
                        <div class="col-md-6">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                My Lessons
                            </div>
                            <?php

                            $sql = "SELECT  les_tbl.`lesson_id`,les_tbl.`lesson_name`, les_tbl.`status`,  les_tbl.`lessons` , modules_tbl.module_id FROM modules_tbl INNER JOIN programming_language_tbl ON programming_language_tbl.`programming_id` = modules_tbl.`programming_id` INNER JOIN les_tbl ON les_tbl.`module_id` = modules_tbl.`module_id` WHERE programming_language_tbl.`student_id`  =  '$_GET[student_id]'   order by les_tbl.`lessons`   ";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            ?>
                                <div class="card-body">
                                    <table>
                                        <thead>

                                            <tr>
                                                <th scope="col">L_ID</th>
                                                <th scope="col">Module ID</th>
                                                <th scope="col">lesson</th>
                                                <th scope="col">Lesson_name</th>
                                                <th scope="col">Status</th>

                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                            ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $row['lesson_id']; ?></th>
                                                        <th scope="row"><?php echo $row['module_id']; ?></th>
                                                        <th scope="row"><?php echo $row['lessons']; ?></th>
                                                        <td><?php echo $row['lesson_name']; ?></td>
                                                        <?php
                                                        if ($row['status'] == "unlock") { ?>
                                                            <td class="text-info">
                                                                <?php echo $row['status']; ?>
                                                            </td>
                                                        <?php  } elseif ($row['status'] == "done") { ?>
                                                            <td class="text-success">
                                                                <?php echo $row['status']; ?>
                                                            </td>
                                                        <?php } else { ?>
                                                            <td class="text-danger">
                                                                <?php echo $row['status']; ?>
                                                            </td>
                                                        <?php  }
                                                        ?>



                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="./control/deleteLesson.php?lessons_id=<?= $row['lesson_id'] ?>&student_id=<?= $_GET['student_id'] ?>" onClick="return confirm('are you sure you want to delete this lesson <?= $row['lesson_id'] ?> ?')" class="btn btn-danger mx-2 text-white">Delete</a>
                                                                <a class="btn btn-info mx-2 text-white" href="editLesson.php?id=<?= $row['lesson_id'] ?>#edit">Edit</a>
                                                                <a class="btn btn-info mx-2 text-white" href="sub-lesson.php?id=<?= $row['lesson_id'] ?>#edit">Add Content</a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                        <?php

                                                }
                                            }
                                        } else {
                                            echo "<h4 class='py-4 text-center text-danger'>No Lessons Yet </h4>";
                                        }

                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">

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