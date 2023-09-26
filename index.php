<?php
    require __DIR__ . "/header.php";
?>
<main>
    <div class="content-column">
        <div class="column-header">
            <h2>League table</h2>
            <p><?php require __DIR__ . "/functions/total-teams.php"?> Teams are playing right now</p>
        </div>
        <div class="column-content">
            <table>
                <tr>
                    <td>Team Name</td>
                    <td>League</td>
                    <td>Last Time Champions</td>
                    <td>City</td>
                    <td>Website</td>
                </tr>
                <?php
                    require __DIR__ . "/functions/teams-table.php";
                ?>
            </table>
            <h2>Cities</h2>
            <div class="cities">
                <?php require __DIR__ . "/functions/cities.php";?>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . "/footer.php"; ?>