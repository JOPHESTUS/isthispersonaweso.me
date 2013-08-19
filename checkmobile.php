<?php


$name = $_GET["id"];
if (!preg_match('/^[a-zA-Z0-9_]{1,60}$/', $name)){
?><div class="alert alert-error">
 The name you have tried to input contains some naughty characters or no characters at all. Please fix this and try again.
</div> <?php

} else {

$name = strtolower($name);
if($name==null){
?>

<div class="alert alert-error">Error: You did not enter a name</div>
<?php
}else{
if(file_exists("./awesomestate/$name.awesome")){
$contents=file_get_contents("./awesomestate/$name.awesome");

if ($contents < 33) {include('noMob.php');} 
if($contents > 66 ) {include('yesMob.php');} 
if($contents < 66 and $contents > 33) {include('sortaMob.php');}
if($contents == 66) {include('sortaMob.php');}
if($contents == 33) {include('noMob.php');}

}

if(!file_exists("./awesomestate/$name.awesome"))
{
?>
<div class="alert alert-info">
 This user is actually not listed, so I'm going to say no. Use the contact form to ask to be listed :)
</div> <?php
include('noMob.php');
}
}
}


?>
