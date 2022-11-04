<?php

session_start();

$conn =mysqli_connect(
    'localhost',
    'root',
    '',
    'base_datos_universidad'
);

if(isset($conn)){
    echo 'is connected';
}
?>
