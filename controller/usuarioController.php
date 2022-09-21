<?php


class UsuarioController extends UsuarioModel {

    function __construct(){
        parent:: __construct();
       }  

    public function ListarC(){
        $Listar = $this->ListarUsuario();
        return  $Listar;
    }
}
