<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        
        echo "Nao existem pessoas para editar.";
     }
        else{
            $id = $_REQUEST["id"];
            $nome = $_REQUEST["nome"];
            $sexo = $_REQUEST["sexo"];
            
            $pessoa = array();
            $pessoa["nome"] = $nome;
            $pessoa["sexo"] = $sexo;
    
            $cadastros =& $_SESSION["cadastros"];
            $cadastros[$id] = $pessoa;
        echo "Ediçao efetuada com sucesso!";

        
        }
    

?>
