<?php

session_start();
session_unset();
session_destroy();
//destruction de la session


//redirection page d'acceuil
header('Location: main.php');
exit;

?>