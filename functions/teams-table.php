<?php
    require __DIR__ . "../../data/data.php";
?>

<?php  foreach($teams as $key => $team) : ?>
    <tr>
    <td><?= $key?></td>
    <td><?= $team['league']?></td>
    <td><?= $team['last-time-champions']?></td>
    <td><?= $team['city']?></td>
    <td><a href="<?= $team['url']?>"><?= $key?></td>
    </tr>
<?php endforeach; ?>