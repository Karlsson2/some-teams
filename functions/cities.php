<?php
    require __DIR__ . "../../data/data.php";
    /*grabbing each of the cities and putting them in an array*/
    $cities = array();
    foreach ($teams as $team) {
        $cities[] = $team['city'];
    }
    /*removing duplicated using array_unique*/
    $uniqueCities = array_unique($cities);
?>

