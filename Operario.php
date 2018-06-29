<?php

class Operario {
    
    
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
    public function queryLikeListUsuario($user){
       
        try {
            $stm= $this->pdo->prepare(PreparedSQL::QUERY_LIKE_USUARIO);
            $stm->bindParam(1, $user, PDO::PARAM_STR);
            $stm->bindParam(2, $user, PDO::PARAM_STR);
           $stm->bindParam(3, $user, PDO::PARAM_STR);
                       $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
     public function queryUsuariosIdLike($id)
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::QUERY_USUARIOS_ID);
           $stm->bindParam(1, $id,PDO::PARAM_INT);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
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
    public function queryVehiculosId($id)
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::SELECT_VEHICULO_ID);
           $stm->bindParam(1, $id,PDO::PARAM_STR);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    public function queryVehiculos()
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::SELECT_VEHICULOS);
        
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    public function queryUsuariosActivos()
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::QUERY_USUARIOS_ACTIVOS);
           $stm->bindParam(1, $cargo='usuario',PDO::PARAM_STR);
                $stm->bindParam(2, $estado=1,PDO::PARAM_INT);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    public function queryEstudiante()
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::QUERY_USUARIOS);
           $stm->bindParam(1, $data='usuario',PDO::PARAM_STR);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    public function queryParqueadero($parqueadero)
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::QUERY_PARQUEADERO);
           $stm->bindParam(1, $parqueadero, PDO::PARAM_INT);      
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    
    public function updateParqueaderoEstado($parqueadero,$estado)
    {
         try{
           $stm=$this->pdo->prepare(PreparedSQL::UPDATE_PARQUEADERO_ESTADO);
           $stm->bindParam(1, $estado, PDO::PARAM_INT);
           $stm->bindParam(2, $parqueadero, PDO::PARAM_INT);            
           $stm->execute();           
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    
    public function queryUsuarioVehiculo($id)
    {
        try{
            $stm=$this->pdo->prepare(PreparedSQL::QUERY_USUARIO_VEHICULO);
           $stm->bindParam(1, $id, PDO::PARAM_INT);           
           $stm->execute();           
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    public function queryParqueaderoEstado($parqueadero,$estado)
    {
        try{
           $stm=$this->pdo->prepare(PreparedSQL::QUERY_PARQUEADERO_ESTADO);
           $stm->bindParam(1, $parqueadero, PDO::PARAM_INT);
            $stm->bindParam(2, $estado, PDO::PARAM_INT);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            Die ($e->getMessage());
        }
    }
    
    public function insertVehiculo($data) {
        try {
            $stm = $this->pdo->prepare(PreparedSQL::INSERT_VEHICULO);
            $stm->bindParam(1, $data['placa'], PDO::PARAM_STR);
            $stm->bindParam(2, $data['usuario'], PDO::PARAM_INT);
            $stm->bindParam(3, $data['color'], PDO::PARAM_STR);
            $stm->bindParam(4, $data['tipo'], PDO::PARAM_INT);            
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function insertUsuario($data) {
        try {
            $stm = $this->pdo->prepare(PreparedSQL::INSERT_USUARIO);
            $stm->bindParam(1, $data['usuario'], PDO::PARAM_INT);
            $stm->bindParam(2, $data['nombre'], PDO::PARAM_STR);
            $stm->bindParam(3, $data['apellido'], PDO::PARAM_STR);
            $stm->bindParam(4, $data['documento'], PDO::PARAM_INT);
            $stm->bindParam(5, $data['direccion'], PDO::PARAM_STR);
            $stm->bindParam(6, $data['email'], PDO::PARAM_STR);
            $stm->bindParam(7, $data['telefono'], PDO::PARAM_INT);
            $stm->bindParam(8, $data['celular'], PDO::PARAM_INT);
            $stm->bindParam(9, $data['genero'], PDO::PARAM_STR);
            $stm->bindParam(10, $data['tp'], PDO::PARAM_STR);        
            $stm->bindParam(11, $date='usuario', PDO::PARAM_STR);   
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function updateUsuario($data)
    {
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
    public function asignarParqueadero($data) {
        try {
            $stm = $this->pdo->prepare(PreparedSQL::INSERT_INGRESO);
            $stm->bindParam(1, $data['usuario'], PDO::PARAM_INT);
            $stm->bindParam(2, $data['vehiculo'], PDO::PARAM_STR);
            $stm->bindParam(3, $data['num'], PDO::PARAM_INT);
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
 
    public function updateEstadoUsuario($id,$estado) {
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
