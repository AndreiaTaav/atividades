<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        
        echo "Nao existem pessoas para editar";
     }
        else{
            $id = $_REQUEST["id"];
            $nome = $_REQUEST["nome"];
    
            $cadastros =& $_SESSION["cadastros"];
            $cadastros[$id] = $nome;
        echo "Ediçao efetuada com sucesso!";

        
        }
    

?>
