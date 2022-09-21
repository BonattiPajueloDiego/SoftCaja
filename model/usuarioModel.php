<?php
require_once './includes/mysql.php';
class UsuarioModel extends Mysql
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ListarUsuario()
    {
        $sql = "SELECT * FROM usuarios";
        $listar = $this->SelectAll($sql);
        return $listar;
    }

}
