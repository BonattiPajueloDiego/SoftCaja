<?php


include_once 'includes/users.php';
include_once 'includes/user_session.php';
include_once 'config/config.php';
//inicialzar los objetos de las clases
$userSession = new User_Session();
$user = new Users();

if (isset($_SESSION['user'])) {

    $user->setuser($userSession->getCurrentUser());
    $rol = $user->getrol();

    if ($rol == "ADMINISTRADOR") {
        $urlDirection = "usuarios/reportes";
        include_once 'view/caja/caja.php';
    } else {
        include_once 'view/admin/admin.php';
    }
} else{
      header('Location: ./index.php') ;
}
