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
exec('python main.py');
?>

Link 1: <input type = "text" name = "link1"></input><br>
Link 2: <input type = "text" name = "testvol"></input><br>
<br>

<input type = "submit" value = "Calculate" name = "submit">
<br>
</div>



<?php
$newdosage = 1;
?>

</body>
</html>
