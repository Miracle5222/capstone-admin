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



                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Lessons Table
                            </div>
                            <?php

                            $sql = "SELECT * from lesson_tbl";
                            $result = $conn->query($sql);




                            ?>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>

                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Lesson_name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Module_ID</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Lesson_name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Module_ID</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if ($result->num_rows > 0) {
                                            $arr1 = array();
                                            $arr2 = array();
                                            while ($row = $result->fetch_assoc()) {
                                                $arr2 = $row['lesson_id'];
                                                array_push($arr1, $arr2);
                                        ?>

                                                <tr>
                                                    <th scope="row"><?php echo $row['lesson_id']; ?></th>
                                                    <td><?php echo $row['lesson_name']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td><?php echo $row['module_id']; ?></td>

                                                    <td>
                                                        <div class="d-flex"><a class="btn btn-danger mx-2 text-white">Delete</a><a class="btn btn-info mx-2 text-white" href="editLesson.php?id=<?= $row['lesson_id'] ?>#edit">Edit</a></div>
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
                                    $sql = "SELECT * FROM lesson_tbl where lesson_id = $id;";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {


                                    ?>
                                            <form action="./control/add.php" method="post" enctype="multipart/form-data" id="edit">


                                                <h3 class="text-info text-center py-4">Edit Lesson</h3>

                                                <div class="form-group">
                                                    <label for="lesson_id">Lesson_ID</label>
                                                    <input type="text" class="form-control my-2" id="lesson_name" value=<?= $row['lesson_id'] ?> name="lesson_name" placeholder="lesson_name...">
                                                </div>


                                                <div class="form-group">
                                                    <label for="lesson_name">Lesson Name</label>
                                                    <input type="text" class="form-control my-2" id="lesson_name" value=<?= $row['lesson_name'] ?> name="lesson_name" placeholder="lesson_name...">
                                                </div>



                                                <div class="form-group">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control" name="status">
                                                        <option value="lock" selected>lock</option>
                                                        <option value="unlock">unlock</option>

                                                        <option value="done">done</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lesson_id">Module_ID</label>
                                                    <input type="number" class="form-control my-2" id="module_id" value=<?= $row['module_id'] ?> name="module_id" placeholder="module_id...">
                                                </div>


                                                <div class="text-center">
                                                    <button type="submit" name="addLesson" class="btn btn-primary my-2">Submit</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>