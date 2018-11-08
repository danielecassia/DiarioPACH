<?php
  session_start();
  require "../bootstrap.php";

  use php\models\User;

  $user = new User;
  $user = $user->verificaUserPassword($_POST["email"], $_POST["senha"]);

  if($user != null) {
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['nome'] = $user->nm_user;
    $_SESSION['cd'] = $user->cd_user;
    $_SESSION['logado'] = true;
    header('Location: ../php/index.php');
  }
  else {
    unset ($_SESSION['email']);
    unset ($_SESSION['cd']);
    unset ($_SESSION['nome']);
    $_SESSION['logado'] = false;
    echo 'Usuário Inválido!';
  }

  // mostrar todas as variáveis na tela
  // var_dump($users);
	// die();

  
  
?>