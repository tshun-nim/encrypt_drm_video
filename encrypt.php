<?php
ini_set('memory_limit', '256000M'); 
$data = file_get_contents('./files/original.mp4');

$len = strlen($data);
$data_1 = substr($data, 0, 1);
$data_2 = substr($data, 1, $len);

$drm_data = $data_2 . $data_1;

file_put_contents('./files/encrypt_video.mp4', $drm_data);
?>
