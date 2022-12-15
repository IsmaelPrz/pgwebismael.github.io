<?php
    session_start();
    if($_POST){
        if(($_POST['usuario']=="ismael") && ($_POST['contrasenia']=="2asirb")){
            $_SESSION['usuario']="ok";
            $_SESSION['nombreUsuario']="Ismael";
            
            header('Location:inicio.php');
        }
        else{
            $mensaje="Error: El usuario o la contraseña es incorrecto/a";
        }
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <title>AE3.1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css"
  </head>
  <body>
      
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <p></p>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <?php   if(isset($mensaje)){?>
                            <div class="alert alert-danger" role="alert">
                                <?php   echo $mensaje; ?>
                            </div>
                            <?php   }?>
                        <form method="POST">
                            <div class = "form-group">
                                <label >Usuario:</label>
                                <input type="text" name="usuario"class="form-control" placeholder="Escriba su usuario" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña:</label>
                                <input type="password" name="contrasenia"class="form-control" placeholder="Escriba su contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <p class="formulario">usuario: ismael</p>
                            <p class="formulario">contraseña: 2asirb</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>