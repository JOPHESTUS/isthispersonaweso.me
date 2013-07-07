<?php

if($_SESSION['authenticated'] != 'JOPHESTUS') {
    header("Location: ./#");
	session_destroy();
   }
   
session_start();
$username = $_POST['name'];
$state = $_POST['state'];
$username = strtolower($username);

$file = fopen("$username.awesome","w");
echo fwrite($file,"$state");
fclose($file);
?>
<div class="alert alert-success">
  Successfully set awesome sate on user
</div>
<?php
include("admin.php");
?>
