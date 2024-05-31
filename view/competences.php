<?php

include_once 'header.php';?>

<h5>PHP</h5>
        <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10" style="width: 10%">

<?php if (!empty($rows)) { ?>
    <table>
        <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['descriptif_competence'] ?></td>
                <td><?php echo $row['level'] ?> %</td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    J'ai aucun résultats de compétences.
<?php }

include_once 'footer.php';