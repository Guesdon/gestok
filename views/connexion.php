<?php 
    if(isset($_POST['connect'])){
        $_SESSION['action']="auth";
        header('Location: index.php');
	}
?>
<section class="col-xs-12 col-sm-8 col-md-9 col-lg-10 main_component">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">S'identifier</h5>
                        <form class="form-signin text-center" method="POST" action="auth"> 
                            <input name="email" type="email" id="inputEmail" class="form-control my-3" placeholder="Email" required autofocus>
                            <input name="mdp" type="password" id="inputMdp" class="form-control my-3" placeholder="Mot de passe" required>
                            <input class="btn btn-primary text-uppercase mx-auto" type="submit" name="connect">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
