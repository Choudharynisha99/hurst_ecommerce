<?php
session_start(); // Start the session at the beginning

$con = mysqli_connect("localhost", "root", "", "hurst") or die("Error connecting to the database");

if (isset($_REQUEST['log'])) {
    // Use $_REQUEST['names'] and $_REQUEST['password'] instead of $_POST to handle both GET and POST requests
    $names = $_REQUEST['names'];
    $password = $_REQUEST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM `register` WHERE name=? AND password=?");
    $stmt->bind_param("ss", $names, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        if ($row = $result->fetch_assoc()) {
            // Session initialization after successful login
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['password'] = $row['password'];

            echo "<script>alert('Login Successfully'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Login Unsuccessfully: Invalid credentials');</script>";
        }
    } else {
        echo "<script>alert('Login Unsuccessfully: Query failed');</script>";
    }

    $stmt->close();
    $con->close();
}
?>
