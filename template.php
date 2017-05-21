<?php

$handle = fopen("results.txt", "r");
$myPics = array();
$myAges = array();

if ($handle) {
    while (($line = fgets($handle)) !== false) {
      list($url, $age) = split("[*]", $line);
      array_push($myPics, $url);
      array_push($myAges, $age);
    }
    fclose($handle);
} else {
    // error opening the file.
}

?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>CodeDay 2017</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
<body>

<div class="container">
  <ul>
    <li>
      <span></span>
      <div>
        <!--<div class="info">Age.1</div>-->
        <div class="info">
            <a href="one.php">Age: <?php echo $myAges[0]?></a>
        </div>
      </div>
      <span class="number">
      </span>
    </li>
    <li>
      <div>
        <span></span>
        <div class="info">
            <a href="two.php">Age: <?php echo $myAges[1]?></a>
        </div>
      </div>
      <span class="number">
      </span>
    </li>
    <li>
      <div>
        <span></span>
        <div class="info">
            <a href="three.php">Age: <?php echo $myAges[2]?></a>
        </div>
      </div>
      <span class="number">
      </span>
    </li>
  </ul>
</div>
</body>
</html>

<script>

$(document).ready(function(){
   var $label = $('.name');
   $intro.css('color', 'blue');
   $intro.addClass('greeting');
});

</script>
