<?php

include_once 'header.php';

if (!empty($rows)) { ?>
    <table>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['nom'] ?></td>
            <td><?php echo $row['prenom'] ?></td>
            <td><?php echo $row['mail'] ?></td>
            <td><?php echo $row['phone'] ?></td>
        </tr>
    <?php } ?>
    </table>
<?php } else { ?>
    J'ai aucun résultats de contact.
<?php }

include_once 'footer.php';