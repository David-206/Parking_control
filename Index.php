<?php

class Index {
   
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
     public function queryUsuariosId($id)
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::SELECT_USUARIO_ID);
           $stm->bindParam(1, $id,PDO::PARAM_INT);
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
    public function queryOperarioId($user) 
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::SELECT_USUARIO_ID);
           $stm->bindParam(1, $user, PDO::PARAM_INT);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    
}
