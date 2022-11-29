<!DOCTYPE html>
<html>
   <meta http-equiv="refresh" content="500">
<body>

  <h1>Order Page</h1>

    <form method="post">
        <input type="submit" name="tester"
                class="button" value="Kills Button" />

</form>

<?php
    if(array_key_exists('tester', $_POST)) { 
        test(); 
    } 
    function test(){
       // echo "The insert function is called.";

//https://www.propatel.com/visitor-counter-php-for-website/
$visitors = file_get_contents('Kills.txt');
$visitors = $visitors+1;

file_put_contents('Kills.txt',$visitors);
}
$content = file_get_contents('Kills.txt');
echo $content . " public non refundable orders that might not be real";


session_unset();
?>
  



</body>
</html>
