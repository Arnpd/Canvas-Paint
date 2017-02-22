<?php

$image = imagecreatefrompng($_POST['image']);
$id = uniqid();

imagealphablending($image, false);
imagesavealpha($image, true);
imagepng($image, 'uploads/savedpaint.png');

// return image path
echo '{"img": "/uploads/savedpaint.png"}';