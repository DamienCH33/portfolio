<?php

include_once 'header.php';

if (!empty($rows)) { ?>
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