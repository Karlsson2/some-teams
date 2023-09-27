<?php
    require __DIR__ . "/header.php";
    require __DIR__ ."/functions/cities.php";
    require __DIR__ . "/functions/total-teams.php";
?>
<main>
    <div class="content-column">
        <table>
            <thead>
                <tr>
                    <td>Team Name</td>
                    <td>League</td>
                    <td>Last Time Champions</td>
                    <td>City</td>
                    <td>Nickname</td>
                    <td>Website</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require __DIR__ . "/functions/teams-table.php";
                ?>
            </tbody>
        </table>
        <div class="cities-column">
            <h2>Cities</h2>
            <div class="cities">
                <?php foreach($uniqueCities as $city) : ?>
                    <div class="city"><?= $city?></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="teams-column">
            <h2>Number of Teams</h2>
            <div class="teams">
                <?= $totalNumberOfTeams?>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . "/footer.php"; ?>