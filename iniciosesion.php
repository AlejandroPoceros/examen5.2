<!doctype html>
<html lang="en">
  <head>
    <title>Eco-Mex</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nuestros_estilos.css">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.registrobtn {
  width: auto;
  padding: 10px 18px;
  background-color: #2A769A ;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>

    <?php include 'templates/header.php';?>
    <br>
    <h2 align="center">Inicio de Sesión</h2>




<form action="login.php" method="POST">
  </div>

  <div class="container" style="background-color:#f1f1f1 ;width:50%">
    <label for="email"><b>Correo Electronico</b></label>
    <input type="text" placeholder="Ingrese su correo" name="email" required>

    <label for="password"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingrese su contraseña" name="password" required>
        
    <button name="btningresar" type="submit" style="width:25% " style="display: flex;
  justify-content: center" >Iniciar sesión</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Recuerdame
    </label>
  </div>


  <div class="container" style="background-color:#f1f1f1 ;width:50%">
   
    <button type="button" class="registrobtn" onclick="window.location.href='registro.php'" >Registrarme</button>
    <span class="psw">No tengo cuenta <a href="#"></a></span>
  </div>

  <div class="container" style="background-color:#f1f1f1 ;width:50%">
    <button type="button" class="cancelbtn" onclick="window.location.href='index.php'"  >Cancelar</button>
    <span class="psw">Olvidó su <a href="#">contraseña?</a></span>
  </div>
</form>



    <br>
    <?php include 'templates/footer.php';?>
  </body>
</html>