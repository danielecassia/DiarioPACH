<?php 
session_start();
if ($_SESSION['logado'] != true) {
    header('Location: ../html/login.html');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="../css/index.css" rel="stylesheet">
        <meta name="description" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIARIO</title>
    </head>
    <body>
        <div class="container">
            <form action="./diarioInsert.php" method="POST" item-height="50%">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="titulo" id="inputDtNasc" placeholder="Título">
                    </div>     
                </div>
                <br><br>
                
                <h4>Estilo de Vida</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputDtNasc">Peso</label>
                        <input type="text" class="form-control" name="peso" id="inputDtNasc" placeholder="00.00">
                    </div>
    
                    <div class="form-group col-md-4">
                        <label for="inputDtNasc">Sono</label>
                        <input type="text" class="form-control" name="sono" id="inputDtNasc" placeholder="8 horas">
                    </div>
    
                    <div class="form-group col-md-4">
                        <label for="inputDtNasc">Água</label>
                        <input type="text" class="form-control" name="agua" id="inputDtNasc" placeholder="1.5 L">
                    </div>
                </div>
                <br>
                
                <h4>Como você está?</h4>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="radio" name="humor" value="1"> Neutro
                        <input type="radio" name="humor" value="2"> Animado
                        <input type="radio" name="humor" value="3"> Feliz
                        <input type="radio" name="humor" value="4"> Irritado
                        <input type="radio" name="humor" value="5"> Triste
                        <input type="radio" name="humor" value="6"> Apavorado
                    </div>
                </div>
                <br>
    
                <h4>Sintomas</h4>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="sintomas" id="inputDtNasc" 
                        placeholder="teste teste teste teste este teste teste teste este teste teste testeeste teste teste testeeste teste teste teste">
                    </div>
                </div>
                <br>
    
                <h4>Texto</h4>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="texto" id="inputDtNasc" 
                        placeholder="teste teste teste teste este teste teste teste este teste teste testeeste teste teste testeeste teste teste teste">
                    </div>
                </div>
                <br>
    
                <h4>Outros</h4>
                <div class="form-row">
                    <div class="form-group col-md-12">
                            <input type="checkbox" name="outros[]" value="1">Viagem
                            <input type="checkbox" name="outros[]" value="2">Tratamento
                            <input type="checkbox" name="outros[]" value="3">Condulta
                    </div>
                </div>
                <br>
    
                <h4>Atividade Física</h4>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="checkbox" name="atv_fisica[]" value="1">Corida
                        <input type="checkbox" name="atv_fisica[]" value="2">Ciclismo
                        <input type="checkbox" name="atv_fisica[]" value="3">Academia
                        <input type="checkbox" name="atv_fisica[]" value="4">Daça Aeróbica
                        <input type="checkbox" name="atv_fisica[]" value="5">Ioga
                        <input type="checkbox" name="atv_fisica[]" value="6">Natação
                        <input type="checkbox" name="atv_fisica[]" value="7">Esporte de Equipe
                    </div>
                </div>
                <br>  
                
                <h4>Medicamentos</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <a class="btn btn-outline-info" href="#" role="button">Adicionar Medicamento</a><br>
                    </div>
    
                    <div class="form-group col-md-8">
                        <input type="checkbox" name="remedio" value="1">...
                        <input type="checkbox" name="remedio" value="2">...
                        <input type="checkbox" name="remedio" value="3">...
                    </div>
                </div>
                <br>
                <div class= "align-bottom">
                    <button type="reset" class="btn btn-danger form-group col-md-3" >Descartar </button>
                    <button type="submit" class="btn btn-primary form-group col-md-3" >Salvar</button>
                </div>
            </form>
            
        </div>
    </body>
</html>