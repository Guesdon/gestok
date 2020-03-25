<main class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 main_component bg-light"  id="bord">
            <div class="container-fluid">
                <?php
                    if($sessionExit){
                        require_once("user.php");
                        require_once("bord.php");
                    }else{
                        require_once("seConnecter.php");
                    }
                ?>
            </div>
        </div>
        <?php
            if($sessionExit){
                require_once("productListe.php");
            }else{
                require_once("connexion.php");
            }
                
        ?>
    </div>
</main>