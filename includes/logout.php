<?php
//cerrar sesión
include_once 'user_session.php';

$userSession = new User_Session();
$userSession->closeSession();

header("Location:../index.php");
