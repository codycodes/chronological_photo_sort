<?php
$link1 = $_POST['link1'];
$link2 = $_POST['link2'];
?>

<html>
<body>
<title>SortMe</title>
<div align = "center"><font face = "Tahoma" size = "300">SortMe</font>
<br><br><br>

<form action = "index.php" method = "post">

<?php

$myfile = fopen("links.txt", "w") or die("Unable to open file!");
fwrite($myfile, $link1);
fwrite($myfile, "\n");
fwrite($myfile, $link2);
fclose($myfile);

exec('python main.py');
?>

Link 1: <input type = "text" name = "link1"></input><br>
Link 2: <input type = "text" name = "link2"></input><br>
<br>

<button> Go!</button>
<br>
</div>



<?php
$newdosage = 1;
?>

</body>
</html>
