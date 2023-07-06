<?php
echo readfile("file.txt")."<br><br>";
?>

<?php
$myfile = fopen("file.txt","r") or die("Erron opening the file");
echo fread($myfile,filesize("file.txt"))."<br><br>";
fclose($myfile);
?>

<?php
$myfile = fopen("file.txt","r") or die("Erron opening the file");
echo fgets($myfile)."<br><br>";
fclose($myfile);
?>

<?php
$myfile = fopen("file.txt","r") or die("Erron opening the file");

// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }

fclose($myfile);
?>

<?php
$myfile = fopen("file.txt","r") or die("Erron opening the file");

// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile);
  }

fclose($myfile);
?>

<?php
$myfile = fopen("new_file.txt","w");
?>

<?php
$myfile = fopen("new_file.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
$myfile = fopen("new_file.txt", "a") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<!DOCTYPE html>
<html>
<body>
<br><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>