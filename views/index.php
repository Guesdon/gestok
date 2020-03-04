<?php

    // Lancement de la session
    session_start();
    // Encodage de la page
    header ("Content-Type: text/html; charset=utf-8");
    // Conf générale
    require_once ("../conf/generalConf.php");
    // Autoloader global
    require_once (PATH_MACHINE."autoLoader/AutoLoad.php");

    //echo EMAIL_SUPPORT_TECH;

    // Test
    // if (MODE_TEST==1) {
    //     echo "Test activé <br>";
    //     error_reporting(E_ALL);
    //     ini_set("display_errors", 1);
    // } 

    //appel header general

    require_once("header.php");
    require_once("body.php");
    require_once("footer.php");
