<html>

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



?>

</html>
