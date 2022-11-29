<!DOCTYPE html>
<html>
   <meta http-equiv="refresh" content="500">
<body>

  <h1>Order Page</h1>

    <form method="post">
        <input type="submit" name="tester"
                class="button" value="insect" />

</form>

<?php
    if(array_key_exists('tester', $_POST)) { 
        test(); 
    } 
    function test(){
       // echo "The insert function is called.";

//https://www.propatel.com/visitor-counter-php-for-website/
$visitors = file_get_contents('insect.txt');
$visitors = $visitors+1;

file_put_contents('insect.txt',$visitors);
}
$content = file_get_contents('insect.txt');
echo $content . " public non refundable orders that might not be real";


//session_unset();



// Function to get the user IP address
function getUserIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
echo "<br> ip : " . getUserIP();
?>
  



</body>
</html>
