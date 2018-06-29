<?php

class Admin {
    
    
    private $pdo;
    private $preparedSQL;
    
    public function __construct() {
        try{
            $this->preparedSQL = new PreparedSQL();
            $this->pdo = Database::conectar();
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
        
         public function queryLikeListOperario($user){
       
        try {
            $stm= $this->pdo->prepare(PreparedSQL::QUERY_LIKE_OPERARIO);
            $stm->bindParam(1, $user, PDO::PARAM_STR);
            $stm->bindParam(2, $user, PDO::PARAM_STR);
           $stm->bindParam(3, $user, PDO::PARAM_STR);
                       $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
   
    public function queryUserId($user)
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::SELECT_USER_ID);
           $stm->bindParam(1, $user, PDO::PARAM_INT);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    public function queryOperariosId($id)
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::QUERY_OPERARIOS_ID);
           $stm->bindParam(1, $id,PDO::PARAM_INT);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    public function queryOperarios()
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::QUERY_OPERARIOS);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    
    public function insertOperario($data) {
        try {
            $stm = $this->pdo->prepare(PreparedSQL::INSERT_OPERARIO);
            $stm->bindParam(1, $data['usuario'], PDO::PARAM_INT);
            $stm->bindParam(2, $data['password'], PDO::PARAM_STR);
            $stm->bindParam(3, $data['nombre'], PDO::PARAM_STR);
            $stm->bindParam(4, $data['apellido'], PDO::PARAM_STR);
            $stm->bindParam(5, $data['documento'], PDO::PARAM_INT);
            $stm->bindParam(6, $data['direccion'], PDO::PARAM_STR);
            $stm->bindParam(7, $data['email'], PDO::PARAM_STR);
            $stm->bindParam(8, $data['telefono'], PDO::PARAM_INT);
            $stm->bindParam(9, $data['celular'], PDO::PARAM_INT);
            $stm->bindParam(10, $data['genero'], PDO::PARAM_STR);
            $stm->bindParam(11, $data['tp'], PDO::PARAM_STR);
            $stm->bindParam(12, $date='operario', PDO::PARAM_STR);
            
            $stm->execute();
            $tsm = $this->pdo->prepare(PreparedSQL::INSERT_LOGIN); 
            $tsm->bindParam(1, $data['usuario'], PDO::PARAM_INT);
            $tsm->bindParam(2, $data['password'], PDO::PARAM_STR);
            $tsm->bindParam(3, $dato='operario', PDO::PARAM_STR);
            $tsm->execute();        
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function updateOperario($data) {
        try {
            $stm = $this->pdo->prepare(PreparedSQL::UPDATE_USUARIO_ID);          
            $stm->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $stm->bindParam(2, $data['apellido'], PDO::PARAM_STR);
            $stm->bindParam(3, $data['direccion'], PDO::PARAM_STR);
            $stm->bindParam(4, $data['email'], PDO::PARAM_STR);
            $stm->bindParam(5, $data['telefono'], PDO::PARAM_INT);
            $stm->bindParam(6, $data['celular'], PDO::PARAM_INT);
            $stm->bindParam(7, $data['id'], PDO::PARAM_STR);            
            $stm->execute();
                  
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function updateEstadoOperario($id,$estado) {
        try {
            $stm = $this->pdo->prepare(PreparedSQL::UPDATE_ESTADO_OPERARIO);          
            $stm->bindParam(1, $estado, PDO::PARAM_INT);
            $stm->bindParam(2, $id, PDO::PARAM_INT);
           
          $stm->execute();
                  
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
