<?php

include_once 'db.php';

class Users extends DB {

    private $nombre;
    private $ap_paterno;
    private $ap_materno;
    private $username;
    private $rol;
    private $funcion;
    
    public function userExit($user, $pass) {
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE users = :user AND pass = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setuser($user) {
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE users = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nomb'];
            $this->ap_paterno = $currentUser['ap_mat'];
            $this->ap_materno = $currentUser['ap_pat'];
            $this->username = $currentUser['users'];
            $this->rol = $currentUser['rol'];
        }
    }

    public function getnombre() {

        return $this->nombre . " " . $this->ap_paterno . " " . $this->ap_materno;
    }

    public function getrol() {
        if ($this->rol == 1) {
            return "ADMINISTRADOR";
        } else {
            return "CAJERO";
        }
    }
    
    public function setfuncX($accion) {
        $this->funcion = $accion;
    }

    public function getfuncX() {
        return $this->funcion;
    }
}
