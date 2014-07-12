<?php


// save/update the text

$data_to_write = $_POST['editor1'];

// echo 'page/'.$active.'.php';

// echo $data_to_write;



$file_handle = fopen('page/'.$active.'.php', 'w');

fwrite($file_handle, $data_to_write);

fclose($file_handle);

