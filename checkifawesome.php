<?php


$name = $_POST['name'];
if (!preg_match('/^[a-zA-Z0-9_]{1,60}$/', $name)){
?><div class="alert alert-error">
 The name you have tried to input contains some naughty characters. Please fix this and try again.
</div> <?php
include("index.php");
} else {

$name = strtolower($name);
if($name==null){
?>

<div class="alert alert-error">Error: You did not enter a name</div>
<?php
include("index.php");
}else{
if(file_exists("./awesomestate/$name.awesome")){
$contents=file_get_contents("./awesomestate/$name.awesome");

if ($contents < 33) {include('no.php');
}
 
if($contents > 66 ) {include('yes.php');}
 
if($contents < 66 and $contents > 33) {include('sorta.php');}
if($contents == 66) {include('sorta.php');}
if($contents == 33) {include('no.php');}

}

if(!file_exists("./awesomestate/$name.awesome"))
{
?>
<div class="alert alert-info">
 This user is actually not listed, so I'm going to say no. <a href="http://jophest.us/#contact">Click here to ask to be listed :)</a>
</div> <?php
include('no.php');
}
}
}


?>
