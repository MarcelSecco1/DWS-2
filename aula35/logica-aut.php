<?php

function autenticado()
{
    if (!isset($_SESSION["email"]) || empty($_SESSION["email"])) {
        return false;
    }else{
        return true;
    }
}
function redireciona($pagina){
    if(empty($pagina)){
        $pagina = "index.php";
    }
    header("Location: ". $pagina);
}
function nome_usuario(){
    return $_SESSION["nome"];
}
function email_usuario(){
    return $_SESSION["email"];
}