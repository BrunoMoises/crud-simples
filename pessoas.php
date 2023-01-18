<h1>Listar Pessoas</h1>
<?php
$sql = "SELECT * FROM pessoa";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0) { ?>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data de nascimento</th>
            <th>Ações</th>
        </tr>
    <?php while($row = $res->fetch_object()){ ?>
        <tr>
            <td align="center"><?php print $row->id ?></td>
            <td><?php print $row->nome ?></td>
            <td><?php print $row->email ?></td>
            <td align="center"><?php print date_format(date_create($row->data_nascimento), 'd/m/Y') ?></td>
            <td>
                <button class="btn btn-success" onclick="editar_pessoa('<?php print $row->id ?>')">Editar</button>
                <button class="btn btn-danger">Excluir</button>
            </td>
        </tr>
    <?php } ?> 
    </table>
<?php }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>
<script>
function editar_pessoa(id) {
    location.href='?page=nova&id='+id;
}
</script>