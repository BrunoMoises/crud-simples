<?php
switch ($_REQUEST["acao"]) {
    case "cadastrar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO pessoa (nome, email, data_nascimento) VALUES ('{$nome}','{$email}','{$data_nasc}')";
        $res = $conn->query($sql);

        if ($res = true) {
            print "<script>alert('Cadastro realizado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel realizar o cadastro');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case "editar":
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE pessoa SET nome='{$nome}',
                                  email='{$email}',
                                  data_nascimento='{$data_nasc}'
                WHERE id=" . $id;
        $res = $conn->query($sql);

        if ($res = true) {
            print "<script>alert('Edição realizada com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel realizar a edição');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case "excluir":
        $id = $_REQUEST["id"];

        $sql = "DELETE FROM pessoa WHERE id=" . $id;
        $res = $conn->query($sql);

        if ($res = true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel excuir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
}
?>