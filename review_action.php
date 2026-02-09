<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'review_db');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phn = trim($_POST['phn']);

    // Clean input
    $fname = strtolower($fname);
    $lname = ucwords($lname);
}
$sql = "INSERT INTO reviews (firstName,lastname ,email,phn)
        VALUES ('$fname','$lname', '$email', '$phn')";

if (mysqli_query($conn, $sql)) {
    echo "Review submitted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>