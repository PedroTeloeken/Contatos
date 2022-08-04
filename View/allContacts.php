<?php
require("../Model/service.php");

$service = new Service();

$contats = $service->allContacts();
?>

<table border="1">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>Telefone</th>
        <th>ações</th>
    </tr>
    <?php foreach ($contats as $u) : ?>
        <tr>
            <td><?= $u->id ?></td>
            <td><?= $u->name ?></td>
            <td><?= $u->telefone ?></td>
            <td>
                <a href="/Contatos/Controller/deleteContact.php?id=<?= $u->id ?>">apagar</a>
                <a href="/Contatos/Controller/updateContact.php?id=<?= $u->id ?>">editar</a>
        </tr>
    <?php endforeach; ?>
    <a href="/Contatos/View/register.php?">Voltar ao Cadastro</a>

</table>