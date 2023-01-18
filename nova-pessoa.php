<?php
$id = $_REQUEST["id"];

if ($id) {
    $sql = "SELECT * FROM pessoa WHERE id=" . $id;
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    $acao = "editar";
    $id = $row->id;
    $nome = $row->nome;
    $email = $row->email;
    $data_nascimento = $row->data_nascimento;
    $titulo = "Editar " . $nome;
} else {
    $acao = "cadastrar";
    $titulo = "Nova Pessoa";
    $id = '';
    $nome = '';
    $email = '';
    $data_nascimento = '';
}
?>
<h2>
    <?php print $titulo ?>
</h2>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="<?php print $acao ?>">
    <input type="hidden" name="id" value="<?php print $id ?>">
    <div class="row form-group">
        <div class="col-md-4">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control" value="<?php print $nome ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <label>E-mail: </label>
            <input type="email" name="email" class="form-control" value="<?php print $email ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <label>Data nascimento: </label>
            <input type="date" name="data_nasc" class="form-control" value="<?php print $data_nascimento ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>