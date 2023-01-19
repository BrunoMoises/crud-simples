<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="css/main.css" rel="stylesheet">

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a id="len1" class="hoverable" href="index.php">Home</a></li>
                    <li><a id="len2" class="hoverable" href="?page=nova&id=">Novo</a></li>
                    <li><a id="len3" class="hoverable" href="?page=listar">Pessoas</a></li>
                </ul>
            </div>
        </nav>
        <div class="page-title">
            <?php
            include("config.php");
            switch (@$_REQUEST["page"]) {
                case "nova":
                    include("nova-pessoa.php");
                    break;
                case "listar":
                    include("pessoas.php");
                    break;
                case "salvar":
                    include("salvar-pessoa.php");
                    break;
                default:
                    print "<h2>Bem vindo!</h2>";
                    print "<p class='lead'>
                        Este é um CRUD simples feito em Bootstrap utilizando HTML5, CSS3, JavaScript, </br> com back-end em PHP e banco de dados MySQL <br />
                      </p>";
            }
            ?>
        </div>
    </div>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/script.js"></script>
</body>

</html>