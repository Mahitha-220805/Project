<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'review_db');


if( isset($_POST['submit']) ){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phn = mysqli_real_escape_string($conn, $_POST['phn']);
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