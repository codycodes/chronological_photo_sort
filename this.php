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

echo $myPics[0];
echo $myPics[1];
echo $myPics[2];

echo $myAges[0];
echo $myAges[1];
echo $myAges[2];

?>
