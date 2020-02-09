<?php
$dirname = "/var/www/html/MumbaiTechies/";
$images = glob($dirname."*.jpeg");
foreach($images as $image) {
    echo '<h3 text-align="center">'.$image.'</h3><br/>';
    echo '<center><img src="'.basename($image).'" /></center><br/>';
}
?>
