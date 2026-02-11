<?php

$f=fopen("lab.txt","w");
fwrite($f,"Creating a file using php and adding content to it.");
fclose($f);
echo "file created";

$f=fopen("lab.txt","r");
echo fread($f,filesize("lab.txt"));
fclose($f);

file_put_contents("lab.txt","New content.");
echo file_get_contents("lab.txt");

$content=file("lab.txt");
print_r($content);

echo "File exists: ".file_exists("lab.txt")."<br>";
echo "File size: ".filesize("lab.txt")." bytes<br>";
echo "Last modified: ".date("d-m-Y H:i:s", filemtime("lab.txt"))."<br>";
echo "filetype:".filetype("lab.txt")."<br>";
echo "Access time: ".date("d-m-Y H:i:s", fileatime("lab.txt"))."<br>";
echo "Modification time: ".date("d-m-Y H:i:s", filemtime("lab.txt"))."<br>";
echo "Change time: ".date("d-m-Y H:i:s", filectime("lab.txt"))."<br>";
echo "Permissions: ".fileperms("lab.txt")."<br>";
echo "owner: ".fileowner("lab.txt")."<br>";
echo "group: ".filegroup("lab.txt")."<br>";
echo "fileinode:".fileinode("lab.txt")."<br>";

//copying file:
copy("lab.txt","lab_copy.txt");
echo "File copied."."<br>";
//rename:
rename("lab_copy.txt","lab_renamed.txt");
echo "File renamed."."<br>";
//unlink:
unlink("lab_renamed.txt");
echo "File deleted."."<br>";
//mkdir:
mkdir("new_folder");
echo "Directory created."."<br>";
//rmdir:
rmdir("new_folder");
echo "Directory removed."."<br>";

echo is_file("lab.txt") ? "lab.txt is a file.<br>" : "lab.txt is not a file.<br>";
echo is_dir("new_folder") ? "new_folder is a directory.<br>" : "new_folder is not a directory.<br>";

//locking
$file = fopen("lock.txt", "w");

if(flock($file, LOCK_EX)) {
    fwrite($file, "Locked writing");
    flock($file, LOCK_UN);
}
fclose($file)

?>