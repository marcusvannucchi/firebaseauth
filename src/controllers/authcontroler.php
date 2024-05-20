<?php


namespace APP\controllers;


class authcontroler {

    public function login (){
        echo 'login';
    }
}


$loginName = $_GET['loginName'];
$loginSenha = $_GET['loginSenha'];

print_r($loginName);
print_r($loginSenha);