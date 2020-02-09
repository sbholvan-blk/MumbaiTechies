<?php
$dirname = "/var/www/html/MumbaiTechies/";
$images = glob($dirname."*.jpeg");
foreach($images as $image) {
    echo '<center><img src="'.basename($image).'" /></center><br/>';
    echo '<center><h3 text-align="center">'.basename($image).'</h3></center><br/>';
}
?>
