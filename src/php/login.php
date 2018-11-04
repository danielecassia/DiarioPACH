<?php
  require "../bootstrap.php";

  use php\models\User;

  $user = new User;
  $userValido = $user->verificaUserPassword($_POST["email"], $_POST["senha"]);

  if($userValido) {
    echo 'Usuário Válido!';
  }
  else {
    echo 'Usuário Inválido!';
  }

  // mostrar todas as variáveis na tela
  // var_dump($users);
	// die();

  
  
?>