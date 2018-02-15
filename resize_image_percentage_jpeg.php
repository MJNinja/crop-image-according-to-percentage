<?php
//$originalImagePath = "../images/blog/default.jpg";'
//$newImageName = "new.jpg";
//$newImagePath = "../images/";

//#################################################################
// CROP IMAGE ACCORDING TO PERCENTAGE
//#################################################################
function resizeImagePercentage($originalImagePath, $newImageName, $newImagePath){
	$width  = imagesx($originalImagePath);
	$original_image_height = imagesy($originalImagePath);
	$percent = 0.5;
	$new_image_max_width = $new_image_max_width * $percent;
	$new_image_max_height = $original_image_height * $percent;
	
	$new_image = imagecreatetruecolor($new_image_max_width, $new_image_max_height);
	
	imagecopyresized($new_image, $originalImagePath, 0, 0, 0, 0, $new_image_max_width, $new_image_max_height, $new_image_max_width, $original_image_height);
	
	imagejpeg($new_image, $newImagePath.$newImageName);
	imagedestroy($new_image);
}
?>