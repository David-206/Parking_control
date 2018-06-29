<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PARKING CONTROL</title>
        <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html">  
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" >
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
        
      
 
    </head>
    <body class="landing">
        
        <header id="header" class="alt">

            <font face="times new roman" size="6" color="white" >      
        Parking Control - Sistema De Parqueo </font> 
        
        <nav id="nav">
            <ul>
                <?php if(isset($_SESSION['CARGO'])){?>
                <li><a href="">Bienvenido <?php echo $_SESSION['CARGO']; ?></a></li>
                <?PHP } ?>
                <li>

                    <!--Aqui empezaremos a relizar los respectivos enlazes para los diferentes tipos de registro-->

                    <li><a  href="?c=Index&m=viewHome" class="button"> Menu</a></li>
                    
                </li>
                <?PHP if(isset($_SESSION['USUARIO'])){?>
                <li><a href="?c=Security&m=cerrarSesion" class="button">Cerrar Sesion</a></li>
                <?php } ?>
            </ul>
        </nav>


    </header>