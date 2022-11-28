<!DOCTYPE html>
<html>

<body>

  <h1>Order Page</h1>

<?php
       // echo "The insert function is called.";

//https://www.propatel.com/visitor-counter-php-for-website/
$visitors = file_get_contents('visitors.txt');
$visitors = $visitors+1;

file_put_contents('visitors.txt',$visitors);

$content = file_get_contents('visitors.txt');
echo $content . "testing";


session_unset();
?>
  



</body>
</html>
