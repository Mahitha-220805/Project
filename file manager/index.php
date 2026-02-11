<?php
$folder = "files/";
$files = scandir($folder);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager</title>
    <style>
        body{
            background-color: #f3d7d7;
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Upload File</h2>
<form action="upload.php" method="POST" enctype="multipart/form-data" align="center">
    <input type="file" name="myfile" required>
    <button type="submit">Upload</button>
</form>

<h2 style="text-align:center;">Uploaded Files</h2>

<table border="1" cellpadding="10" align="center" border-collapse="collapse">
<tr>
    <th>File Name</th>
    <th>Size (KB)</th>
    <th>Last Modified</th>
    <th>Actions</th>
</tr>

<?php
foreach($files as $file) {
    if($file != "." && $file != "..") {
        $path = $folder.$file;
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>".round(filesize($path)/1024,2)." KB</td>";
        echo "<td>".date("d-m-Y H:i:s", filemtime($path))."</td>";
        echo "<td>
                <a href='download.php?file=$file'>Download</a> |
                <a href='delete.php?file=$file'>Delete</a>
              </td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>