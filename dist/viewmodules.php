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
                        <div class="col-md-4">
                            <div class="card p-4">
                                <div class="div">
                                    <h2 class="text-primary text-center">Student Profile</h2>
                                    <div class="container justify-content-center align-items-center">
                                        <?php




                                        $sql = "SELECT * from student_tbl where student_id = '$_GET[student_id]'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {


                                        ?>
                                                <form action="./control/update.php" method="post" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label for="module_id">Student ID</label>

                                                        <input type="text" class="form-control" value=<?= $row['student_id'] ?> name="student_id" placeholder="student_id...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="module_id">Username</label>

                                                        <input type="text" class="form-control" value=<?= $row['username'] ?> name="username" placeholder="username...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Email</label>
                                                        <input type="email" class="form-control" value=<?= $row['email'] ?> name="email" placeholder="email...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Password</label>
                                                        <input type="text" class="form-control" value=<?= $row['password'] ?> name="password" placeholder="password...">
                                                    </div>




                                                    <div class="text-center">
                                                        <button type="submit" name="updateStudent" class="btn btn-primary my-2">Update</button>
                                                    </div>
                                                </form>
                                        <?php

                                            }
                                        } else {
                                            echo "no records found";
                                        }


                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Student Modules
                            </div>
                            <?php

                            $sql = "SELECT * from les_tbl group by lessons order by lessons";
                            $result = $conn->query($sql);




                            ?>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">ModuleID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Edit</th>

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
                                                    <td><a href="./addlessons.php?studentId=<?= $_GET['student_id'] ?>&moduleId=<?= $row['module_id'] ?>" class="btn btn-primary">Add Lessons</a></td>
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
                        <div class="col-md-6">

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