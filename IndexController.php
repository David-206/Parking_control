<?php

class IndexController {
    
    private $modelIndex;
    private $modelAdmin;
    private $modelSecurity;

    public function __construct() {
        try{
            //Instanciamos las clases del model
            $this->modelIndex = new Index();
            $this->modelAdmin= new Admin();
            $this->modelSecurity = new Security();
    
        } catch (Exception $e) {
          Die($e->getMessage());
        }
    }
    
    public function viewIndex()
    {
        require_once 'view/all/header.php';
        require_once 'view/index/index.php';
        require_once 'view/all/footer.php';
    }
    public function viewHome()
    {
        require_once 'view/all/header.php';
        require_once 'view/index/home.php';
        require_once 'view/all/footer.php';
    }
  
    public function validarData()
    {
        ECHO $usuario=$_POST['user'];
        ECHO $password=$_POST['password'];
        ECHO $rol=$_POST['rol'];
        foreach ($this->modelIndex->queryUserId($usuario) as $r);
        if ((@$r->login_cargo=="operario")||(@$r->login_cargo=="admin"))
        {
            foreach ($this->modelIndex->queryOperarioId($usuario) as $ra){}
            $estado=$ra->usuario_estado;
        }
        else
        {
            $estado=0;
        }
        if((@$r->login_usuario==$usuario)&& (@$r->login_password==$password) &&(@$r->login_cargo=='admin')&&($estado==1))
        {
            $data=array("USUARIO"=>$usuario,"PASSWORD"=>$password,"CARGO"=>$rol);
            $this->modelSecurity->iniciarSesion($data);
            header('location:?c=Index&m=viewHome');
                
        }
        else
        { ?>
            <script>
                alert('Lo sentimos datos incorrectos');
                location.href='?c=Index&m=viewIndex';
            </script>
         
        <?php }
        if((@$r->login_usuario==$usuario)&& (password_verify($password, @$r->login_password)) &&(@$r->login_cargo=='operario')&&($estado==1))
        {
            $data=array("USUARIO"=>$usuario,"PASSWORD"=>$password,"CARGO"=>$rol);
            $this->modelSecurity->iniciarSesion($data);
            header('location:?c=Index&m=viewHome');
                
        }
        else
        { ?>
            <script>
                alert('Lo sentimos datos incorrectos');
                location.href='?c=Index&m=viewIndex';
            </script>
         
        <?php }
        
    }
    
}
