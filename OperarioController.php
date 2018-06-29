<?php

class OperarioController {
    
    private $modelOperario;
    private $modelSecurity;
    private $modelIndex;
    
    public function __construct() {
        try{
            //Instanciamos las clases del model
            $this->modelOperario = new Operario();
            $this->modelIndex = new Index();
            $this->modelSecurity = new Security();
        } catch (Exception $e) {
            Die($e->getMessage());
        }
    }
 

    public function viewInsertEstudiante()
    {
         $this->modelSecurity->validarSesionOperario();
        require_once 'view/all/header.php';
        require_once 'view/operario/formInsertEstudiante.php';
        require_once 'view/all/footer.php';
    }
    public function viewInsertVehiculo()
    {
        $this->modelSecurity->validarSesionOperario();
        require_once 'view/all/header.php';
        require_once 'view/operario/formInsertVehiculo.php';
        require_once 'view/all/footer.php';
    }
    public function viewUpdateUsuario()
    {
        $this->modelSecurity->validarSesionOperario();
        require_once 'view/all/header.php';
        require_once 'view/operario/formUpdateUsuario.php';
        require_once 'view/all/footer.php';
    }
    public function viewInsertIngreso()
    {
        $this->modelSecurity->validarSesionOperario();
        require_once 'view/all/header.php';
        require_once 'view/operario/formInsertIngreso.php';
        require_once 'view/all/footer.php';
    }
    
    public function viewListUsuarios()
    {
        $this->modelSecurity->validarSesionOperario();
        require_once 'view/all/header.php';
        require_once 'view/operario/listEstudiante.php';
        require_once 'view/all/footer.php';
    }
     public function viewDetalleUsuario()
    {
         $this->modelSecurity->validarSesionOperario();
        require_once 'view/all/header.php';
        require_once 'view/operario/detalleUsuario.php';
        require_once 'view/all/footer.php';
    }
    
    
    public function insertEstudiante()
    {
        $this->modelSecurity->validarSesionOperario();
        foreach ($this->modelOperario->queryUsuariosId($_POST['documento']) as $r) {}
        if (@$r->usuario_id === $_POST["documento"]) {
            ?>
            <script>
                alert("Lo sentimos este usuario ya existe");
                location.href="?c=Operario&m=viewInsertEstudiante";
            </script>
            <?php
        }else{
        
            $data = array(
                "usuario" => $_POST['documento'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "tp" => $_POST['tp'],
            "documento" => $_POST['documento'],
            "direccion" => $_POST['direccion'],
            "email" => $_POST['email'],
            "telefono" => $_POST['telefono'],
            "celular" => $_POST['celular'],
            "genero" => $_POST['genero'],
        );
        $this->modelOperario->insertUsuario($data);?>
        <script>
            alert("Se ha registrado correctamente el Usuario");
            location.href='?c=Index&m=viewHome';
            </script>                  
       <?php          
        }
     
    }
   
     public function insertVehiculo()
    {
         $this->modelSecurity->validarSesionOperario();
       $data = array(
                "placa" => $_POST['placa'],
            "usuario" => $_POST['usuario'],
            "color" => $_POST['color'],
            "tipo" => $_POST['tipo'],           
        );
        $this->modelOperario->insertVehiculo($data); ?>
             <script>
                alert("Se han registrado el vehiculo correctamente");
                location.href='?c=Index&m=viewHome'; //  mirar por favor de modifico
                </script>                    
       <?php          
        
     
    }
    public function updateUsuario()
    {
        $this->modelSecurity->validarSesionOperario();
            $data = array(
            "id"=>$_POST['id'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "direccion" => $_POST['direccion'],
            "email" => $_POST['email'],
            "telefono" => $_POST['telefono'],
            "celular" => $_POST['celular'],
           );
        $this->modelOperario->updateUsuario($data); ?>
            <script>
                alert("Se han modificado los datos correctamente");
                location.href='?c=Operario&m=viewListUsuarios'; //  mirar por favor de modifico
                </script>
      <?php            
            
    }
    public function desactivarUsuario()
    {
        $this->modelSecurity->validarSesionOperario();
            $estado=0;
        $this->modelOperario->updateEstadoUsuario($_REQUEST['id'], $estado) ?>
            <script>
                alert("Se han desactivo el Usuario");
                location.href='?c=Operario&m=viewListUsuarios'; // mirar por fa se modifico
                </script>
      <?php 
    }
    public function activarUsuario()
    {
        $this->modelSecurity->validarSesionOperario();
            $estado=1;
        $this->modelOperario->updateEstadoUsuario($_REQUEST['id'], $estado) ?>
            <script>
                alert("Se han Activado el Usuario");
                location.href='?c=Operario&m=viewListUsuarios'; // mirar ubicacion se modifico
                </script>
      <?php 
    }
    public function formAsignarParqueadero()
    {   
        $this->modelSecurity->validarSesionOperario();
        require_once 'view/operario/formAsignarParqueadero.php';
    }
    public function vehiculoUsuario()
    { $this->modelSecurity->validarSesionOperario();?>
                <div class="form-group">
                    <label for="usuarios">Vehiculos</label>
                    <select class="form-control" id="placa" name="placa" required="">
                        <?php foreach($this->modelOperario->queryUsuarioVehiculo($_REQUEST['id']) as $r){?>
                        <option value="<?php echo $r->vehiculo_id; ?>" style="color:black;"><?php echo $r->vehiculo_id; ?></option>
                        <?php } ?>

                    </select>
                </div>
   <?php }
    
    public function formSalidaParqueadero()
    {     $this->modelSecurity->validarSesionOperario();  
        foreach ($this->modelOperario->queryParqueaderoEstado($_REQUEST['parqueadero'],$estado=0) as $r){}?>
        <form action="?c=Operario&m=salidaParqueadero" name="formInsertSeller" id="formInsertSeller" method="post" enctype="multipart/form-data" autocomplete="off">
             <div class="form-group">
                    <label for="usuarios">Ingreso Id:</label>
                     <input type="hidden" name="id" id="id" value="<?php echo $r->ingreso_id;?>" readonly=""></input>
                </div> 
                 <div class="form-group">
                    <label for="usuarios">Parqueadero:</label>
                     <input type="text" name="num" id="num" value="<?php echo $r->ingreso_parqueadero;?>" readonly=""></input>
                </div> 
                <div class="form-group">
                    <label for="usuarios">Usuario:</label>                    
                     <input type="text" name="usuario" id="usuario" value="<?php echo $r->ingreso_usuario.'-'.$r->usuario_nombre;?>" readonly=""></input>
                </div> 
                <div class="form-group">
                    <label for="usuarios">Vehiculo:</label>
                     <input type="text" name="placa" id="placa" value="<?php echo $r->ingreso_vehiculo;?>" readonly=""></input>
                </div> 
                <div class="form-group">
                    <label for="usuarios">Fecha y hora de Ingreso:</label>
                        <input type="text" name="ingreso" id="ingreso" value="<?php echo $r->ingreso_hora;?>" readonly=""></input>
                </div> 
                 <br>
                <button type="submit" name="Submit" class="btn btn-primary">Registrar Salida</button>
                
            </form>
   <?php }
   
   public function salidaParqueadero()
   {    $this->modelSecurity->validarSesionOperario();
       $id=$_POST['id'];
       $estado=1;
       $this->modelOperario->updateParqueaderoEstado($id, $estado);
       header('location:?c=Operario&m=viewInsertIngreso');
   }
    
    public function asignarParqueadero()
    {
        $this->modelSecurity->validarSesionOperario();
            $data = array(
            "vehiculo"=>$_POST['placa'],
            "usuario" => $_POST['usuario'],
           "num"=>$_POST['num'],
          
           );
        $this->modelOperario->asignarParqueadero($data); ?>
            <script>
                
                location.href='?c=Operario&m=viewInsertIngreso'; //  mirar por favor de modifico
                </script>
      <?php            
            
    }
    
    public function queryLikeListUsuario()
    { $this->modelSecurity->validarSesionOperario();?>
        <table id="mytable" class="table table-striped table-bordered table-list" >
                                <thead>
                                    <tr>
                                        <th class="col-tools text-center"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                        </th>
                                        <th class="hidden-xs text-center">Usuario</th>
                                        <th class="col-text text-center">Nombre</th>
                                        <th class="col-text text-center">Apellido</th>
                                        <th class="col-text text-center">Email</th>
                                        <th class="col-text text-center">Telefono</th>
                                        <th class="col-text text-center">Celular</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->modelOperario->queryLikeListUsuario('%' . $_REQUEST['q'] . '%') as $r)  { ?>
                                    <tr>                                        
                                            <td align="center">
                                                <a href="?c=Operario&m=viewDetalleUsuario&id=<?php echo $r->usuario_id;?>">Ver<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                                    <a href="?c=Admin&m=viewUpdateOperario&id=<?php echo $r->usuario_id;?>">Modificar<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                                    <?php if ($r->usuario_estado==1){?>
                                                    <a href="?c=Admin&m=desactivarOperario&id=<?php echo $r->usuario_id;?>">Desactivar<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                                    <?php }  else { ?>
                                                      <a href="?c=Admin&m=activarOperario&id=<?php echo $r->usuario_id;?>">Activar<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>     
                                                       <?php } ?>
                                            </td>                                       
                                            <td style="color:black;"class="hidden-xs"><?php echo $r->usuario_id; ?></td>
                                            <td style="color:black;"><?php echo $r->usuario_nombre; ?></td>
                                            <td style="color:black;"><?php echo $r->usuario_apellido; ?></td> 
                                            <td style="color:black;"><?php echo $r->usuario_email; ?></td>
                                            <td style="color:black;"><?php echo $r->usuario_telefono; ?></td> 
                                            <td style="color:black;"><?php echo $r->usuario_celular; ?></td>                                     
                                        </tr>
                                    <?php } ?>
                                                                
                                </tbody>
                            </table>
   <?php }
    
    
    
        
    
}
