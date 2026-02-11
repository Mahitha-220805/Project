<?php

// File modes in PHP
echo "File modes in PHP:<br>";
echo "r: Read-only, starts at the beginning of the file.<br>";
$f=fopen("lab.txt","r");
echo fread($f,filesize("lab.txt"));
fclose($f);
echo "w: Write-only.<br>";
$f=fopen("lab.txt","w");
fwrite($f,"This is new content.");
fclose($f);
echo "a: Write-only, If the file does not exist, it attempts to create it.<br>";
$f=fopen("lab.txt","a");
fwrite($f," Appending content.");
fclose($f);
echo "x: Write-only, creates a new file. If the file already exists, the fopen() call will fail.<br>";
$f=fopen("new_file.txt","x");
fwrite($f,"This is a new file created with x mode.");
fclose($f);
echo "r+: Read and write, starts at the beginning of the file.<br>";
$f=fopen("lab.txt","r+");
echo fread($f,filesize("lab.txt"));
fwrite($f," Adding more content.");
fclose($f);
echo "w+: Read and write.<br>";
$f=fopen("lab.txt","w+");
echo fread($f,filesize("lab.txt"));
fwrite($f," This will overwrite the existing content.");
fclose($f);
echo "a+: Read and write.<br>";
$f=fopen("lab.txt","a+");
echo fread($f,filesize("lab.txt"));
fwrite($f," This will append to the existing content.");
fclose($f);
echo "x+: Read and write, creates a new file. If the file already exists, the fopen() call will fail.<br>";
$f=fopen("anotherfile.txt","x+");
fwrite($f,"This is another new file created with x+ mode.");
fclose($f);


?>
