<html>
<body>


  <?php
  // outputs the username that owns the running php/httpd process
  // (on a system with the "whoami" executable in the path)
  exec('python main.py > results.txt');
  ?>


</body>
</html>
