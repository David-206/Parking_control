<?php

class Security {
    private $pdo;
    public function __construct() {
        try {
            $this->pdo=database::conectar();
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
    
    public function iniciarSesion($user)
    {
        $_SESSION['USUARIO']=$user['USUARIO'];
        $_SESSION['PASSWORD']=$user['PASSWORD'];
        $_SESSION['CARGO']=$user['CARGO']; 
        
    }    
    
    
    public function destruir()
    {
        unset($_SESSION['USUARIO']);
        unset($_SESSION['PASSWORD']);
        unset($_SESSION['CARGO']);       
        session_destroy();
    }
    public function validarCompra()
    {
       if (isset($_SESSION['cant']) && isset($_SESSION['precio']) && isset($_SESSION['nombre'])
            && isset($_SESSION['id']) && isset($_SESSION['subtotal'])&& isset($_SESSION['imagen']))
       {
           
       }
       else 
        {
          header('location:?c=index&m=viewCarrito');
        }    
    }
    public function validarSesion()
    {
        if (isset($_SESSION['USUARIO'])&& isset($_SESSION['PASSWORD']) && isset($_SESSION['ROL']))
        {
            
        }
        else 
        {
          header('location:?c=index&m=viewIndex');
        }
    }
    public function validarSesionAdmin()
    {
        if($_SESSION['CARGO']=='admin' && isset($_SESSION['USUARIO']))
        {
            
        }
        elseif(!isset ($_SESSION['CARGO'])) {
            header('location:?c=Index&m=viewIndex');
        }
        else
        { ?>
            <script>
                alert('ACCESO DENEGADO');
                location.href='?c=Index&m=viewHome';
            </script>
        <?php }
    }
    public function validarSesionOperario()
    {
       if($_SESSION['CARGO']=='operario' && isset($_SESSION['USUARIO']))
        {
            
        }
        elseif(!isset ($_SESSION['CARGO'])) {
            header('location:?c=Index&m=viewIndex');
        }
        else
        { ?>
            <script>
                alert('ACCESO DENEGADO');
                location.href='?c=Index&m=viewHome';
            </script>
        <?php }
    }
}