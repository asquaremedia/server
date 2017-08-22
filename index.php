ls<html>

<h1> SERVER STATUS </h1>

<?php 

$t=time();
echo "<b>Current Time: </b>";
echo(date("Y-m-d H:i:s",$t));

echo "<br>";
echo "<b>Uptime:</b>";
echo shell_exec("uptime");

echo "<br>";
echo "<b>CPU Temp</b>";
//cpu=$(</sys/class/thermal/thermal_zone0/temp);
//echo "$((cpu/1000)) c";


// Function to get the client ip address
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
    
echo get_client_ip_server();
    
$isp = geoip_isp_by_name('www.example.com');
if ($isp) {
    echo 'This host IP is from ISP: ' . $isp;
}
    


echo '<button><a href="#?myip=$IP">Press Here</a></button>';

?>

</html>
