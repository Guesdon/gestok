<?php 
    if(isset($_POST['deconnect'])){
        session_destroy();
        header('Location: index.php');
	}
?>
<div class="row justify-content-center">   
    <div class="col-12 row container-fluid">
        <div class=row>
            <img src="/component/img/contextMenu/profile.png" alt="profile" id="profile" class="col-xs-6 offset-xs-3 col-sm-6 offset-3 col-md-3 col-lg-3">
            <div class="col-xs-12 offset-xs-3 col-sm-12 offset-3 col-md-9 col-lg-9">
                <p><?php echo($_SESSION['typeUser']); ?></p>
                <p><?php echo($_SESSION['nameUser'] . ' ' . $_SESSION['lastNameUser']); ?></p>
                <form class="form-singout" method="POST" action=""> 
                    <input type="submit" class="btn-xs btn-warning" name="deconnect" value="Se deconnecter">
                </form>
            </div>
        </div>
    </div>
    <hr>
    