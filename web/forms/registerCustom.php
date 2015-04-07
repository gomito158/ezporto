<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registro de Clientes</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="icon" href="../images/EZPORTO.png">
<style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
	.bs-example{
    	margin: 20px;
    }
    div.col-xs-9{
        width: 30%;
}
    }
   
</style>
</head>
<body
	style='pointer-events: auto;
	 background:
	  url(http://www.stadium.se/is-bin/intershop.static/WFS/Stadium-SwedenB2C-Site/Stadium/sv_SE/stadium/images/Diverse/Banners/Sneakermania_start_bakgrund.jpg) 50% 0% no-repeat;'>
<div class="bs-example">    
    <form class="form-horizontal" method="post" rol="form" style="margin-left: -15px;margin-right: -228px">    
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Correo Electronico:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="email" placeholder="Email" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputPassword">Contrase&ntildea:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="password" placeholder="Password" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="confirmPassword">Confirmar Contrase&ntilde;a:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="rPassword" placeholder="Confirm Password" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="firstName">Nombres:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="firstName" placeholder="First Name" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="lastName">Apellidos:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required="required">
            </div>
        </div>                                            
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="agree" required="required">  Acepta <a href="#">Terminos and Condiciones</a>.
                </label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" name="submit" class="btn btn-primary" value="Registrar">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>
    <?php 
    	if (isset($_POST['submit'])){
    		require '../database/functions.php';    		
    	}
    ?>
</body>
</html>                                		