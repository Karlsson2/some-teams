<?php
    require __DIR__ . "../../data/data.php";
?>

<!-- foreach loop that goes through each of the teams within the teams array and fetches the information within the array!-->

<?php foreach($teams as $key => $team) : ?>
    <tr>
        <td data-label="Team Name"><?= $key?></td>
        <td data-label="League"><?= $team['league']?></td>
        <td data-label="Last time champions"><?= $team['last-time-champions']?></td>
        <td data-label="City"><?= $team['city']?></td>
        <!-- if statement to catch the arrays that dont contain nickname keys -->
        <?php if(array_key_exists("nickname", $team)) : ?>
            <td data-label="Nickname"><?= $team['nickname']?></td>
        <?php else :?>
            <!--if they dont have the nickname key print an empty table cell -->
            <td></td>
        <?php endif;?>
        <td data-label="Website"><a href="<?= $team['url']?>"><?= $key?></td>
    </tr>
<?php endforeach; ?>