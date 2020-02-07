<?php
$dirname = "/var/www/html/MumbaiTechies/";
$images = glob($dirname."*.jpeg");
foreach($images as $image) {
echo $image;
    echo '<img src="'.$image.'" /><br/>';
}
echo '<img sec="nature.jpeg" />';
echo 'testv1';
?>
