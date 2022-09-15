
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
    if ($rol == "ADMINISTRADOR") {
        $urlDirection = "caja_inicio";
        include_once 'view/caja/caja.php';
    } else {
        include_once 'view/admin/admin.php';
    }
} elseif (isset($_POST['username']) && isset($_POST['pass'])) {
    //echo 'validacion de login';
    $userFrom = $_POST['username'];
    $passFrom = $_POST['pass'];

    if ($user->userExit($userFrom, $passFrom)) {
        //echo"usuario validado";
        $userSession->setCurrentUser($userFrom);
        //almaceno datos a mi sesion
        $user->setuser($userFrom);
        //detecto los datos para direccionar por rol
        $rol = $user->getrol();
        if ($rol == "ADMINISTRADOR") {
            //administrador
            $urlDirection = "caja_inicio";
            include_once 'view/caja/caja.php';
        } else {
            //caja
            include_once 'view/admin/admin.php';
        }
    } else {
        //echo 'datos incorrectos';
        $errorLogin = "Error en sus Credenciales, Ingrese sus datos Correctos...";
        $visivilidad = "visibility: visible;";
        include_once 'view/login.php';
    }
} else {
    //echo "login";
    include_once 'view/login.php';
}

//===================
//verificamos información por roles
?>
