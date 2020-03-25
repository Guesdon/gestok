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

        

    // Sécurisation des vars reçus
    $arrayVar = Controllers::secureArray($_REQUEST);

    unset($_SESSION['user']);
    unset($_SESSION['action']);

    if (isset($_SESSION['action']) && !empty($_SESSION['action'])){
        if($_SESSION['action']=="auth"){
            //compare la saisie du formulaire
            Controllers::verifUserIfExist();

            //verifie si l'utilisateur a un id
            $sessionExit = Controllers::verifConnexionUser();
        }else{
            $sessionExit=false;
        }
    }else{
        $sessionExit=false;
    }
    //var_dump($arrayVar);

    // $param = "?ctrl=getUsers";
    // $resultGetCurl = Controllers::getCurlRest($param);
    // $resultGetCurl =json_decode($resultGetCurl);

    // if ($resultGetCurl->status=="failed") {
    //     die ("Une erreur est survenue ! Veuillez contacter le support technique!");
    // } elseif($resultGetCurl->status=="success") {
    //     // echo "<pre>";
    //     // var_dump($resultGetCurl->result);
    //     // echo "</pre>";
    //     // //echo $resultGetCurl->result->email;
    // } else {
    //     die("Erreur critique");
    // }
    //echo $resultGetCurl->status;
    // var_dump($resultGetCurl);

    //appel header general

    require_once("header.php");
    require_once("main.php");
    require_once("footer.php");
