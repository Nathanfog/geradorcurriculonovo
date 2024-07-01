<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleGerador.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão da Página</title>
    
    <script type="text/javascript">

        function imprimir(){

            botao_imprimir=document.getElementById("divbotao_imprimir");

            botao_imprimir.style.visibility="hidden";

            window.print();

            botao_imprimir.style.visibility="visible";

        }

    </script>
</head>
<body>

<?php

            echo "<br><br><div class='curriculo_final' id='curriculo_final'>";
            
            
            if(isset($_POST['nome'])){
                
                $nome = $_POST["nome"];

                echo "<div class='nome_post' id='nome'>";
                echo "<h1 id='nome_post'>$nome</h1>";
                echo "</div>";
                
                
                                     
            }

            if(isset($_POST['idade'])){
                if(isset($_POST['nacionalidade'])){
                    if(isset($_POST['sexo'])){    
                        $idade = $_POST["idade"];
                        $nacionalidade = $_POST["nacionalidade"];
                        $sexo = $_POST["sexo"];
                        
                        echo "<div class='idade_nacionalidade' id='idade_nacionalidade'>";
                        echo "<p id='idade_nacionalidade_post'>$nacionalidade , $idade, $sexo</p>";
                        echo "</div>";
                    }
                }    
            }                
                
                                     
            

            if(isset($_POST['endereco'])){
                if(isset($_POST['cidade'])){
                    if(isset($_POST['estado'])){
                    $endereco = $_POST["endereco"];
                    $cidade = $_POST["cidade"];
                    $estado = $_POST["estado"];

                    
                    echo "<div class='endereco_completo' id='endereco_completo'>";
                    echo "<p id='endereco_completo'>$endereco, $cidade,$estado </p>";
                    echo "</div>";
                    }                    
                }   
                                     
            }

            if(isset($_POST['telefone'])){
                if(isset($_POST['email'])){        
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];

                echo "<div class='telefone_email' id='telefone_email'>";
                echo "<hp id='telefone_email'>$telefone | $email</p>";
                echo "</div>";
                
                }
                                     
            }

            if(isset($_POST["objetivo_profissional"])){

                echo "<div class='objetivo_profissional_post' id='objetivo_profissional_post'>";
                echo "<h3 id='objetivo_profissional_post'>Objetivo</h1>";
                echo "</div>";
                
                foreach($_POST['objetivo_profissional'] as $objetivo_profissional){
                echo "<p id='objetivo_profissional'>$objetivo_profissional</p>";
                }
            }

            if(isset($_POST["formacao_academica"])){

                echo "<div class='formacao_academica_post' id='formacao_academica_post'>";
                echo "<h3 id='formacao_academica_post'>Formacão Acadêmica</h1>";
                echo "</div>";
                
                foreach($_POST['formacao_academica'] as $formacao_academica){
                echo "<p id='objetivo_profissional'>$formacao_academica</p>";
                }
            }

            if(isset($_POST["experiencias_profissionais"])){

                echo "<div class='experiencias_profissionais_post' id='experiencias_profissionais_post'>";
                echo "<h3 id='experiencias_profissionais_post'>Experiencias Profissionais</h1>";
                echo "</div>";
                
                foreach($_POST['formacao_academica'] as $formacao_academica){
                echo "<p id='objetivo_profissional'>$formacao_academica</p>";
                }
            }

            if(isset($_POST["referencias_pessoais"])){

                echo "<div class='referencias_pessoais_post' id='referencias_pessoais_post'>";
                echo "<h3 id='referencias_pessoais_post'>Referencias Pessoais</h1>";
                echo "</div>";
                
                foreach($_POST['referencias_pessoais'] as $referencias_pessoais){
                echo "<p id='objetivo_profissional'>$referencias_pessoais</p>";
                }
            }

            if(isset($_POST["formacao_complementar"])){

                echo "<div class='formacao_complementar_post' id='formacao_complementar_post'>";
                echo "<h3 id='formacao_complementar_post'>Formação Complementar</h1>";
                echo "</div>";
                
                foreach($_POST['formacao_complementar'] as $formacao_complementar){
                echo "<p id='objetivo_profissional'>$formacao_complementar</p>";
                }
            }

            echo "</div>";
            
            
        ?>
        
    <div class="botao_imprimir" id="divbotao_imprimir">
        
    <button id ="btn-submit" onclick="imprimir()">Imprimir</button>
    </div>
    
</body>
</html>



