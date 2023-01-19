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
<form id="form" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="<?php print $acao ?>">
    <input type="hidden" name="id" value="<?php print $id ?>">
    <div class="row form-group">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control" autocomplete="off" value="<?php print $nome ?>" required>
    </div>
    <div class="row form-group">
        <label>E-mail: </label>
        <input type="email" name="email" class="form-control" autocomplete="off" value="<?php print $email ?>" required>
    </div>
    <div class="row form-group">
        <label>Data nascimento: </label>
        <input type="date" name="data_nasc" class="form-control" autocomplete="off" value="<?php print $data_nascimento ?>" required>
    </div>
    <div class="row form-group container-fluid">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>