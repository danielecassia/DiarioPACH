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
        <link href="../css/diario.css" rel="stylesheet">
        <meta name="description" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIARIO</title>
    </head>
    <body>
        <div class="container">
            <form action="./diarioInsert.php" method="POST" item-height="50%">
            <br><br>
                <div class="form-row">
                    <div class="corTitulo">
                    <h2><b>Título</b></h2>
                    </div> 
                    <div class="form-group col-md-6 alinhamentoTitulo">
                        <input type="text" class="form-control" name="titulo" placeholder="">
                    </div>     
                </div>
                <br><br>
                
                <h3><b>Estilo de vida</b></h3>
                <div class="form-row estilo">
                    
                    <div class="form-group col-md-4">
                        <div>
                            <div>
                                <img class="mb-4" src="../img/Icones/peso.svg" id="peso" alt="" width="30%" height="30%"  class="float-left">
                            </div>
                            <div id='pesoDiv' style='display: none'>
                                <input type="text" class="form-control" name="peso" placeholder="00.00">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <div>
                            <div>
                                <img class="mb-4" src="../img/Icones/sono.png" id="sono" alt="" width="30%" height="30%"  class="float-left">
                            </div>
                            <div id='sonoDiv' style='display: none'>
                        <input type="text" class="form-control" name="sono" placeholder="8 horas">
                            </div>
                        </div> 
                    </div>

                    <div class="form-group col-md-4">
                        <div>
                            <div>
                                <img class="mb-4" src="../img/Icones/AGUA.svg" id="agua" alt="" width="30%" height="30%"  class="float-left">
                            </div>
                            <div id='aguaDiv' style='display: none'>
                            <input type="text" class="form-control" name="agua" id="inputDtNasc" placeholder="1.5 L">
                            </div>
                        </div> 
                    </div>
                    <br>
                </div>
                
                <h3><b>Como você está?</b></h3>
                <div class="form-row">
                    <div class="form-group col-md-12 alinhamentoHumor">
                        <input type="radio" name="humor" value="1" id="neutro" class="humorSelecionado">
                        <label for="neutro" id="neut" >
                            <img class="mb-4" src="../img/Icones/neutro2.svg" id="agua" alt="" width="60%" height="60%"  class="float-left"><br>Neutro
                        </label> 

                        <input type="radio" name="humor" value="2" id="animado" class="humorSelecionado"> 
                        <label for="animado" id="anim">
                            <img class="mb-4" src="../img/Icones/animado.svg" id="agua" alt="" width="60%" height="60%"  class="float-left"><br>Animado
                        </label> 

                        <input type="radio" name="humor" value="3" id="feliz" class="humorSelecionado"> 
                        <label for="feliz" id="feli">
                            <img class="mb-4" src="../img/Icones/feliz2.svg" id="agua" alt="" width="60%" height="3600%"  class="float-left"><br>Feliz
                        </label> 

                        <input type="radio" name="humor" value="4" id="irritado" class="humorSelecionado"> 
                        <label for="irritado" id="irrit">
                            <img class="mb-4" src="../img/Icones/raiva.svg" id="agua" alt="" width="60%%" height="60%"  class="float-left"><br>Irritado
                        </label> 

                        <input type="radio" name="humor" value="5" id="triste" class="humorSelecionado">
                        <label for="triste" id="tris">
                            <img class="mb-4" src="../img/Icones/triste.svg" id="agua" alt="" width="60%" height="60%"  class="float-left"><br>Triste
                        </label> 

                        <input type="radio" name="humor" value="6" id="apavorado" class="humorSelecionado"> 
                        <label for="apavorado" id="apav">
                            <img class="mb-4" src="../img/Icones/apavoado.svg" id="agua" alt="" width="60%" height="60%"  class="float-left"><br>Apavorado
                        </label> 
                    </div>
                </div>
                <br>
    
                <h3><b>Sintoma(s)</b></h3>
                <div class="form-row">
                    <div>
                        <img class="mb-4" src="../img/Icones/sintomas.png" id="sintomas" alt="" width="50%" height="70%"  class="float-left">
                    </div>
                    <div class='form-group col-md-12' id='sintomasDiv' style='display: none'>
                        <textarea name="sintomas" cols='122' rows='5'></textarea>
                    </div>
                </div
                <br>
    
                <h3><b>Texto</b></h3>
                <div class="form-row">
                    <div>
                        <img class="mb-4" src="../img/Icones/texto.svg" id="texto" alt="" width="90%" height="90%"  class="float-left">
                    </div>
                    <div class='form-group col-md-12' id='textoDiv' style='display: none'>
                        <textarea name="texto" cols='122' rows='10'></textarea>
                    </div>
                </div>
                <br>
    
                <h3><b>Outros</b></h3>
                <div class="form-row">
                    <div class="form-group col-md-12 alinhamentoOutros">
                            <input type="checkbox" name="outros[]" value="1" id="viagem" class="outrosSelecionado">
                            <label for="viagem" id="viag">
                                <img class="mb-4" src="../img/Icones/mala.png" id="agua" alt="" width="70%" height="70%"  class="float-left"><br>Viagem
                            </label> 
                            <input type="checkbox" name="outros[]" value="2" id="tratamento" class="outrosSelecionado">
                            <label for="tratamento" id="tratam">
                                <img class="mb-4" src="../img/Icones/tratamento.svg" id="agua" alt="" width="60%" height="60%"  class="float-left"><br>Tratamento
                            </label>
                            <input type="checkbox" name="outros[]" value="3" id="consulta" class="outrosSelecionado">
                            <label for="consulta" id="consul">
                                <img class="mb-4" src="../img/Icones/consulta.png" id="agua" alt="" width="45%" height="45%"  class="float-left"><br>Consulta
                            </label>
                    </div>
                </div>
                <br>
    
                <h3><b>Atividade Física</b></h3>
                <div class="form-row alinhamentoAtv">
                    <div class="form-group col-md-12 alinhamentoAtv">
                        <input type="checkbox" name="atv_fisica[]" value="1" id="corrida" class="atvSelecionado">
                        <label for="corrida" id="corri" >
                            <img class="mb-4 alinhamento1" src="../img/Icones/corrida.png" margin-right: '300px' id="co" alt="" width="80%" height="80%"  class="float-left"><br>Caminhada
                        </label>

                        <input type="checkbox" name="atv_fisica[]" value="2" id="ciclismo" class="atvSelecionado">
                        <label for="ciclismo" id="ciclis">
                            <img class="mb-4 alinhamento1" src="../img/Icones/ciclismo.png" id="ci" alt="" width="115%" height="115%"  class="float-left"><br>Ciclismo
                        </label>

                        <input type="checkbox" name="atv_fisica[]" value="3" id="academia" class="atvSelecionado">
                            <label for="academia" id="acad">
                                <img class="mb-4 alinhamento1" src="../img/Icones/academia.png" id="agua" alt="" width="100%" height="100%"  class="float-left"><br>Academia
                            </label>

                        <input type="checkbox" name="atv_fisica[]" value="4" id="dance_aerob" class="atvSelecionado">
                            <label for="dance_aerob" id="dace">
                                <img class="mb-4 alinhamento1" src="../img/Icones/danca.png" id="agua" alt="" width="60%" height="60%"  class="float-left"><br>Dança Aeróbica
                            </label>

                        <input type="checkbox" name="atv_fisica[]" value="5" id="ioga" class="atvSelecionado">
                            <label for="ioga" id="id_ioga">
                                <img class="mb-4 alinhamento1" src="../img/Icones/ioga.png" id="agua" alt="" width="120%" height="120%"  class="float-left"><br>Ioga
                            </label>

                        <input type="checkbox" name="atv_fisica[]" value="6" id="natacao" class="atvSelecionado">
                            <label for="natacao" id="nat">
                                <img class="mb-4 alinhamento1" src="../img/Icones/natacao.png" id="agua" alt="" width="120%" height="120%"  class="float-left"><br>Natação
                            </label>

                        <input type="checkbox" name="atv_fisica[]" value="7" id="esp_equipe" class="atvSelecionado">
                            <label for="esp_equipe" id="esporte">
                                <img class="mb-4 alinhamento1" src="../img/Icones/equipe.png" id="agua" alt="" width="55%" height="55%"  class="float-left"><br>Esporte de Equipe
                            </label>
                    </div>
                </div>
                <br>  
                
                <h3><b>Medicamento(s)</b></h3>
                <div class="form-row">
                    <div>
                        <img class="mb-4" src="../img/Icones/medicamento.svg" id="med" alt="" width="110%" height="110%"  class="float-left">
                    </div>
                    <div class='form-group col-md-12' id='medDiv' style='display: none'>
                        <textarea name="medicamentos" cols='122' rows='5'></textarea>
                    </div>
                </div
                <br><br>

                <div class= "align-bottom alinhamento">
                    <a class="btn btn-outline-danger btn-lg form-group col-md-2" href="./index.php" role="button">Descartar</a>
                    <button type="reset" class="btn btn-outline-dark btn-lg form-group col-md-2" >Limpar </button>
                    <button type="submit" class="btn btn-outline-success btn-lg form-group col-md-2" >Salvar</button>
                </div>
            </form>  
        </div>

        <!-- SCRIPT JAVAS -->
        <script>
            //CLICK AND DISPLAY - PESO
            var btnPeso = document.getElementById('peso');
            btnPeso.onclick = function(){
                var btnPesoDiv = document.getElementById('pesoDiv');
                if(btnPesoDiv.style.display == 'none')
                {
                    btnPesoDiv.style.display = 'block';
                }
                else
                {
                    btnPesoDiv.style.display = 'none';
                }
            }
            //CLICK AND DISPLAY - SONO
            var btnSono = document.getElementById('sono');
            btnSono.onclick = function(){
                var btnSonoDiv = document.getElementById('sonoDiv');
                if(btnSonoDiv.style.display == 'none')
                {
                    btnSonoDiv.style.display = 'block';
                }
                else
                {
                    btnSonoDiv.style.display = 'none';
                }
            }
            //CLICK AND DISPLAY - AGUA
            var btnAgua= document.getElementById('agua');
            btnAgua.onclick = function(){
                var aguaDiv = document.getElementById('aguaDiv');
                if(aguaDiv.style.display == 'none')
                {
                    aguaDiv.style.display = 'block';
                }
                else
                {
                    aguaDiv.style.display = 'none';
                }
            }
            //CLICK AND DISPLAY - SINTOMAS
            var btnSintomas= document.getElementById('sintomas');
            btnSintomas.onclick = function(){
                var sintomasDiv = document.getElementById('sintomasDiv');
                if(sintomasDiv.style.display == 'none')
                {
                    sintomasDiv.style.display = 'block';
                }
                else
                {
                    sintomasDiv.style.display = 'none';
                }
            }
            //CLICK AND DISPLAY - TEXTO
            var btnTexto= document.getElementById('texto');
            btnTexto.onclick = function(){
                var textoDiv = document.getElementById('textoDiv');
                if(textoDiv.style.display == 'none')
                {
                    textoDiv.style.display = 'block';
                }
                else
                {
                    textoDiv.style.display = 'none';
                }
            }
            //CLICK AND DISPLAY - MEDICAMENTOS
            var btnMed= document.getElementById('med');
            btnMed.onclick = function(){
                var medDiv = document.getElementById('medDiv');
                if(medDiv.style.display == 'none')
                {
                    medDiv.style.display = 'block';
                }
                else
                {
                    medDiv.style.display = 'none';
                }
            }

            //FORMATAÇÃO DOS CAMPO - MÁSCARA
            function formata(src, mask) {
                var i = src.value.length;
                var saida = mask.substring(0,1);
                var texto = mask.substring(i) 
                
                if (texto.substring(0,1) != saida)
                {
                    src.value += texto.substring(0,1);
                }
            }

        </script>
    </body>
</html>