<?php 

//just a random name for the image file
$random = rand(100, 1000);

//$_POST[data][1] has the base64 encrypted binary codes. 
//convert the binary to image using file_put_contents
$savefile = @file_put_contents("output/$random.jpg", base64_decode(explode(",", $_POST['data'])[1]));

//if the file saved properly, print the file name
if($savefile){
	echo $random;
}
?>