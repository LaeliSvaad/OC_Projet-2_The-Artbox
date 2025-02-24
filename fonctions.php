<?php 
function validateImgURL($url) {
    $pattern = '/^https?:\/\/.*\.(jpg|jpeg|png|gif|bmp|webp)$/i';
    return preg_match($pattern, $url);
}
?>
