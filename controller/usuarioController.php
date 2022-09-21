<?php
include_once './model/usuarioModel.php';
class UsuarioController extends UsuarioModel
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ListarC()
    {
        $Listar = $this->ListarUsuario();
        return $Listar;
    }

    // funciones de encriptamiento

    public function encryption($string)
    {
        $output = false;
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 32);
        $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }

    public function decryption($string)
    {
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 32);
        $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

}
