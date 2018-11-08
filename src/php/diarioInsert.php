<?php

session_start();
if ($_SESSION['logado'] != true) {
    header('Location: ../html/login.html');
}

// var_dump($_POST);
// die();

  require "../bootstrap.php";

  use php\models\Diario;

  $diario = new Diario;
  
  $cadastroSucesso = $diario->insert($_SESSION['cd'], $_POST);
    
  if($cadastroSucesso) {
    header('Location: ../php/index.php');
  }
  else {
    //melhorar mensagem
    echo 'FRACASSO!';
  }


// mostrar todas as variáveis na tela
// var_dump($users);
// die();

  
  
?>