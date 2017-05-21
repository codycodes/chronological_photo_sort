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
<script>
  function onInitFs(fs) {

  fs.root.getFile('log.txt', {create: true, exclusive: true}, function(fileEntry) {

    fileEntry.isFile === true
    fileEntry.name == 'log.txt'
    fileEntry.fullPath == '~/log.txt'

  }, errorHandler);

}

window.requestFileSystem(window.TEMPORARY, 1024*1024, onInitFs, errorHandler);
</script>

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
