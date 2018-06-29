<?php

class SecurityController {
    private $modelSecurity;
    public function __construct() {
        try {
         $this->modelSecurity= new Security();   
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
    
    public function cerrarSesion()
    {
        $this->modelSecurity->destruir();
        header("location:?c=Index&m=viewIndex");
    }
}
