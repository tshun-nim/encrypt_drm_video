<?php
ini_set('memory_limit', '256000M'); 
$data = file_get_contents('./files/encrypt_video.mp4');

$len = strlen($data);
$data_1 = substr($data, 0, $len - 1);
$data_2 = substr($data, $len - 1, $len);

$drm_data = $data_2 . $data_1;

file_put_contents('./files/decoded_video.mp4', $drm_data);
?>
