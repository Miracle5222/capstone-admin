<?php session_start(); ?>
<?php include '../connections/config.php';

$sql = "SELECT * from admin_tbl";
$result = $conn->query($sql);

$username = $_POST['username'];
$password = $_POST['password'];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($username != $row['username'] && $password != $row["password"]) {

            header("Location: ../login.php");
        }
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header("Location: ../index.php");
    }
} else {
    echo "no records found";
}
$conn->close();
