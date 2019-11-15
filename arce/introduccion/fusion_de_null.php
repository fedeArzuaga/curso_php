<?php

$user = $_GET['usuario'];

if(isset($user)){
    print $user;
}else{
    $user = "Anonimo";
    print $user;
}

?>