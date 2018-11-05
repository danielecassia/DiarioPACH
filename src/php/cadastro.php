<?php
  require "../bootstrap.php";

  use php\models\User;

  $user = new User;
  $dadosCadastro = [
    "nm_user" => $_POST['nm_user'],
    "dt_nasc" => $_POST['dt_nasc'],
    "email" => $_POST['email'],
    "sexo" => $_POST['sexo'],
    "senha" => $_POST['senha'],
  ];
  $cadastroSucesso = $user->insert($dadosCadastro);

  if ($_POST['senha'] != $_POST['confirmarSenha'])
  {
    // melhorar mensagem
    echo 'As senhas não são similares!';
  }
  else if($cadastroSucesso) {
    header('Location: ../html/login.html');
  }
  else {
    // melhorar mensagem
    echo 'FRACASSO!';
  }


  // mostrar todas as variáveis na tela
  // var_dump($users);
	// die();

  
  
?>