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
    <h1>One</h1>

    <img src="<?php echo $myPics[0]; ?>" />
</body>
</html>
