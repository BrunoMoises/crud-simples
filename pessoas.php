<h2>Listar Pessoas</h2>
<?php
$sql = "SELECT * FROM pessoa";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) { ?>
    <table class="table table-bordered">
        <thead>
            <tr class="table-dark">
                <th><i class="bi-file-plus-fill icon icon-add pointer" title="Adicionar nova pessoa" onclick="nova_pessoa()"></i></th>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data de nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $res->fetch_object()) { ?>
                <tr>
                    <td width="80" align="center"><i class="bi-x-square icon icon-ex pointer" title="Excluir pessoa"
                            onclick="excluir_pessoa('<?php print $row->id ?>')"></i>&nbsp;&nbsp;
                        <i class="bi-pencil-fill icon pointer" title="Editar pessoa" onclick="editar_pessoa('<?php print $row->id ?>')"></i></td>
                    <td align="center"><?php print $row->id ?></td>
                    <td><?php print $row->nome ?></td>
                    <td><?php print $row->email ?></td>
                    <td align="center">
                        <?php print date_format(date_create($row->data_nascimento), 'd/m/Y') ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>