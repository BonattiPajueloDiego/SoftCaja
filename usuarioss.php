<?php

include_once 'includes/users.php';
include_once 'includes/user_session.php';
include_once 'config/config.php';

//inicialzar los objetos de las clases
$userSession = new User_Session();
$user = new Users();

if (isset($_SESSION['user'])) {
    //echo "hay sesion";

    $user->setuser($userSession->getCurrentUser());
    $rol = $user->getrol();
    $variables = $user->getfuncX();

    if ($rol == "ADMINISTRADOR") {
        $option = $_REQUEST['var'];
        include_once '../controller/usuarioController.php';
        // $userController = new UsuarioController();
        if ($option == "select") {
            $param = "datosxxxx";
            $urlDirection = "usuarios/usuarios";
            include_once 'view/caja/caja.php';
        }

//los datos tiene que navegar con reques , get o post atento en la distribucion
    } else {
        include_once 'view/admin/admin.php';
    }
} else {
    header('Location: ./index.php');
}
