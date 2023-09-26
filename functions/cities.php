<?php
    require __DIR__ . "../../data/data.php";

    $cities = array();
    foreach ($teams as $team) {
    $cities[] = $team['city'];
    }
    $uniqueCities = array_unique($cities);
?>

<?php foreach($uniqueCities as $city) : ?>
    <div class="city"><?= $city?></div>
<?php endforeach; ?>