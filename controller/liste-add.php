<?php
include_once('session_create.ctrl.php');
require_once('../model/DAO.class.php');
$idM = $_SESSION[idM];
$elem = $_POST['souhait'];
var_dump($elem);
$dao->addListeSouhait($idM, $elem);
?>
