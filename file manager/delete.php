<?php
if(isset($_GET['file'])) {
    $file = "files/" . $_GET['file'];

    if(file_exists($file)) {
        unlink($file);
        echo "File deleted.<br>";
    } else {
        echo "File not found.";
    }
}
echo "<a href='index.php'>Go Back</a>";
?>