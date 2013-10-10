<?php


$name = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['name']);
$name = strtolower($name);
if($name==null){
?>

<div class="alert alert-error">Error: You did not enter a name</div>
<?php
include("index.php");
}else{
if(file_exists("./awesomestate/$name.awesome")){
$contents=file_get_contents("./awesomestate/$name.awesome");
if($name=="hoolean") {
 $contents = 101;
}
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
 This user is actually not listed, so I'm going to say no. Use the contact form to ask to be listed :)
</div> <?php
include('no.php');
}
}


?>
