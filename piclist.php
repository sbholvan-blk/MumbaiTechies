<?php
$dirname = "/var/www/html/";
$images = glob($dirname."*.png");
foreach($images as $image) {
echo $image;
    echo '<img src="'.$image.'" /><br/>';
}
echo 'testv1'
?>
