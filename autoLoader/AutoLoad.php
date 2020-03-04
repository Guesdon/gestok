<?php
  /**
   * Sert à charger tous les controllers
   *
   * @param string $class => Nom du controller
   * @return none
   * Charge par require_once le bon script php
   */
  
    function app_autoloader($class) {
        $PathFind = false;
        for ($i = 1; $i <= 5; $i++) {
            var_dump($i);
            if ($i <= 1) {
                $Path = "";
            } else {
                $Path = $Path . "../";
            }
            // Classes
            if (file_exists($Path . "classes/$class.php")) {
                require_once($Path . "classes/$class.php");
                $PathFind = true;
            }
            // Controllers
            if (file_exists($Path . "controllers/$class.php")) {
                require_once($Path . "controllers/$class.php");
                $PathFind = true;
            }
        }
        if ($PathFind = false) {
            $lastError = error_get_last();
            trigger_error("Autoloader message => Class not found : $class - needed in " . $lastError["file"] . "(" . $lastError["line"] . ")", E_USER_ERROR);
        }
    }

    spl_autoload_register('app_autoloader');
