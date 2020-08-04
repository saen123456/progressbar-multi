<?php


// Output JSON
function outputJSON($msg, $status = 'error',$image="",$destination=""){
    header('Content-Type: application/json');
    die(json_encode(array(
        'data' => $msg,
        'status' => $status,
		'image'=>$image,
		'destination'=>$destination
    )));
}
$image_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP"); 
// Check for errors
if($_FILES['image']['error'] > 0){
    outputJSON('An error ocurred when uploading.');
}

if(!getimagesize($_FILES['image']['tmp_name'])){
    outputJSON('Please ensure you are uploading an image.');
}


$ext= pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION); // Get Image Extension
// Check filetype
if(!in_array($ext,$image_formats)){

    outputJSON('Unsupported filetype uploaded.');
}

// Check filesize
if($_FILES['image']['size'] > 500000){
    outputJSON('File uploaded exceeds maximum upload size.');
}

// Check if the file exists
if(file_exists('upload/' . $_FILES['image']['name'])){
    outputJSON('File with that name already exists.');
}

// Upload file
if(!move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' . $_FILES['image']['name'])){
    outputJSON('Error uploading file - check destination is writeable.');
}

// Success!
$destination = '<img src="upload/'.$_FILES['image']['name'].'" class="img-thumbnail" width="100" height="100"/>';
outputJSON('File uploaded successfully to "' . 'upload/' . $_FILES['image']['name'] . '".', 'success',$_FILES['image']['name'],$destination);


?>