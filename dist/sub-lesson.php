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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <div class="row">
                        <div>
                            <button type="button" class="btn btn-primary my-4" data-toggle="modal" data-target="#exampleModalCenter">
                                Add Sub Lesson
                            </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="text-info text-center py-4">Add Sub Lesson</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="./control/add.php" method="post" enctype="multipart/form-data">



                                                <div class="form-group">
                                                    <label for="video_id">Video_ID</label>
                                                    <input type="text" class="form-control" id="video_id" name="video_id" placeholder="Video_id...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="form-control" id="image" name="image" placeholder="Image...">
                                                </div>

                                                <div class="form-group">
                                                    <label for="heading">heading</label>
                                                    <textarea name="heading" class="form-control" id="" cols="30" rows="2" placeholder="heading..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="paragraph">Paragraph</label>
                                                    <textarea name="paragraph" class="form-control" id="" cols="30" rows="4" placeholder="paragraph..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lesson_id">lesson_ID</label>
                                                    <input type="text" class="form-control" id="lesson_id" name="lesson_id" placeholder="Lesson_id...">
                                                </div>

                                                <div class="modal-footer">

                                                    <button type="submit" name="addSub" class="btn btn-primary my-2">Submit</button>

                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                </div>



                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div>
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

                        </div>
                    </div>

                    <div class="row">



                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Sub Lesson Table
                            </div>
                            <?php

                            $sql = "SELECT * from sub_lesson_tbl";
                            $result = $conn->query($sql);




                            ?>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>

                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Video_ID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">heading</th>
                                            <th scope="col">lesson_ID</th>
                                            <th scope="col">Paragraph</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>

                                                <tr>
                                                    <th scope="row"><?php echo $row['sub_lesson_id']; ?></th>
                                                    <td><?php echo $row['video']; ?></td>
                                                    <td><?php echo $row['image']; ?></td>

                                                    <td><?php echo $row['heading']; ?></td>
                                                    <td><?php echo $row['lesson_id']; ?></td>
                                                    <td><?php echo $row['paragraph']; ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="d-flex"><a class="btn btn-danger mx-2 text-white">Delete</a><a class="btn btn-info mx-2 text-white" href="editSub.php?id=<?= $row['sub_lesson_id'] ?>#edit">Edit</a></div>
                                                        </div>
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
                        <div class="card">

                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Snippets
                                </div>
                                <?php

                                $sql = "SELECT * FROM CODE;";
                                $result = $conn->query($sql);




                                ?>
                                <div class="card-body">
                                    <table id="datatablesSimple" class="table">
                                        <thead>

                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Language</th>
                                                <th scope="col">Snippets</th>
                                                <th scope="col">Sub_Lesson_ID</th>


                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                            ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $row['snippets_id']; ?></th>
                                                        <td><?php echo $row['language']; ?></td>
                                                        <td><?php echo $row['textCode']; ?></td>
                                                        <td><?php echo $row['sub_lesson_id']; ?></td>

                                                        <td>
                                                            <div class="d-flex"><button class="btn btn-danger mx-2">Delete</button><button class="btn btn-dark mx-2">Edit</button></div>
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
    <script>
        $(".button").click(function() {
            $("#success").hide();
        });
    </script>
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