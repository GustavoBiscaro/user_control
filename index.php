<?php
    require 'config.php';
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<a href="adicionar.php">Adicionar Novo Usuário</a>
<table border="2" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0) {
            foreach($sql->fetchAll() as $usuario) {
                echo '<tr>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['email'].'</td>';
                echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                echo '</tr>';
            }
        } 
    ?>
</table>