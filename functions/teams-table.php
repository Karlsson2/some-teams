<?php
    require __DIR__ . "../../data/data.php";
?>

<?php  foreach($teams as $key => $team) : ?>
    <tr>
        <td><?= $key?></td>
        <td><?= $team['league']?></td>
        <td><?= $team['last-time-champions']?></td>
        <td><?= $team['city']?></td>
        <?php if(array_key_exists("nickname", $team)) : ?>
            <td><?= $team['nickname']?></td>
        <?php else :?>
            <td></td>
        <?php endif;?>
        <td><a href="<?= $team['url']?>"><?= $key?></td>
    </tr>
<?php endforeach; ?>