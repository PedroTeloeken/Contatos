

<?php
require("../Model/service.php");

$service = new Service();

$contats = $service->allContacts();


?>

<table border="1">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>ações</th>
    </tr>
    <?php foreach($contats as $u) : ?>
    <tr>
        <td><?=$u->id?></td>
        <td><?=$u->email?></td>
        <td><?=$u->telefone?></td>
        <td>
            <a href="/Contatos/Controller/delete.php?id=<?=$u->id?>">apagar</a>
            <a href="/Contatos/Controller/update.php?id=<?=$u->id?>">editar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>