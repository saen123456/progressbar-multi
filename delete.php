<?php
$files = $_POST['file'];
if($files!=""){
$file = explode(",",$files);	
$folder="upload/";
foreach( $file as $fileName){
	$dFile = $folder.$fileName;
	if(file_exists($dFile)){
		unlink($dFile);
	}
}
}
