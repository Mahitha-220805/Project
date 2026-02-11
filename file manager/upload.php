<?php
$target = "files/" . basename($_FILES["myfile"]["name"]);

if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $target)) {
    echo "File uploaded successfully.<br>";
    echo "<a href='index.php'>Go Back</a>";
} else {
    echo "Upload failed.";
}
?>