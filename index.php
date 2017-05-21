<!--
################################################################################
# CODE DAY 2017
# ERIC, DANIEL, ANDREW, ALEX, CODY, CHUAN
################################################################################
!-->

<?php
$link1 = $_POST['link1'];
$link2 = $_POST['link2'];
$link3 = $_POST['link3'];
?>

<html>
<body>
<title>SortMe</title>

<div align = "center">
<font face = "Tahoma" size = "300">SortMe</font>

<br><br><br>

<form action = "index.php" method = "post">

Link 1: <input type = "text" name = "link1"></input><br>
Link 2: <input type = "text" name = "link2"></input><br>
Link 3: <input type = "text" name = "link3"></input><br>

<br>

<?php
//write links to filesystem
$myfile = fopen("toSort.txt", "w") or die("Unable to open file!");
fwrite($myfile, $link1);
fwrite($myfile, "\n");
fwrite($myfile, $link2);
fwrite($myfile, "\n");
fwrite($myfile, $link3);
fclose($myfile);

exec('python main.py > results.txt');
?>

<button>Go!</button>

<br>

</div>

</body>
</html>
