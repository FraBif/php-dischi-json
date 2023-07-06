<?php 
    $dataJson = file_get_contents('./database/data.json');
    header('Content-Type: application/json');
    echo $dataJson;
?>