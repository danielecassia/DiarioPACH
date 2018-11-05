<?php
  require "../bootstrap.php";

  use php\models\User;

  $user = new User;
  $userValido = $user->verificaUserPassword($_POST["email"], $_POST["senha"]);

  if($userValido) {
    header('Location: ../html/index.html');
  }
  else {
    echo 'Usuário Inválido!';
  }

  // mostrar todas as variáveis na tela
  // var_dump($users);
	// die();

  
  
?>