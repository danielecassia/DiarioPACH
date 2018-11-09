<?php 
session_start();
if ($_SESSION['logado'] != true) {
    header('Location: ../html/login.html');
}
require "../bootstrap.php";

  use php\models\Diario;

  $diario = new Diario;
  
  $listPost = $diario->all();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="../css/index.css" rel="stylesheet">
        <meta name="description" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INDEX</title>
    </head>
    <body>
        <div class="container">
            <div class="topo">
                <img class="mb-4" src="../img/capa.png" alt="" width="100%" height="100%" class="float-left">
                <div class="foto">
                    <img src="../img/user2.jpg" class="img-circle" alt="" width="200" height="200">
                </div>
            </div>
            <div class="tudo2">
                <div class="row row100">
                    <div class="col">
                        <div class="lado1">
                            <div class="btn-group-vertical formatBotao container">
                                <a class="btn btn-outline-dark" href="./perfil.php" role="button">Alterar Foto de Perfil</a><br>
                                <a class="btn btn-outline-dark" href="./capa.php" role="button">Alterar Foto de Capa</a><br>
                                <a class="btn btn-outline-dark" href="./dados.php" role="button">Alterar Dados</a><br>
                                <a class="btn btn-outline-primary" href="./diarioForm.php" role="button"><b>ESCREVER</b></a><br>
                                <a class="btn btn-outline-danger" href="./encerar.php" role="button"><b>SAIR</b></a><br>
                            </div> 
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="lado2">
                             <?php 
                                foreach ($listPost as $item) {
                                    echo "<font color='#8A084B' align='justify'><b><h1> $item->titulo </h1></font></b>";
                                    echo "<font color='#04B4AE' align='right'><b><h3> $item->dt_hr </h3></font></b>";
                                }
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

