<?php
    require __DIR__ . "/header.php";
?>

<article>
<h2>Summary of the teams</h2>
<p>The teams are from the following cities:</p>
<p><?php require __DIR__ . "/functions/cities.php";?></p>
<p> There are a total of <?php require __DIR__ . "/functions/total-teams.php"?> teams playing in the league at the moment</p>
<h2>The complete League table</h2>
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
</article>

<?php require __DIR__ . "/footer.php"; ?>