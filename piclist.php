<?php
$dirname = "/var/www/html/MumbaiTechies/";
$imageTypes = '{*.jpg,*.JPG,*.jpeg,*.JPEG,*.png,*.PNG,*.gif,*.GIF}';
$images = glob($dirname.$imageTypes, GLOB_BRACE);
foreach($images as $image) {
    echo '<center><img src="'.basename($image).'" alt="'.basename($image).'"/></center><br/>';
    echo '<center><h3>'.basename($image).'</h3></center><br/>';
}
?>
