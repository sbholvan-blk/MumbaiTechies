<?php
$dirname = "/var/www/html/";
$images = glob($dirname."*.jpeg");
foreach($images as $image) {
echo $image;
    echo '<img src="'.$image.'" /><br/>';
}
echo 'testv1'
?>
