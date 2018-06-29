<?php

class AdminController {
    
    private $modelAdmin;
    private $modelSecurity;
    private $modelIndex;
    
    
    public function __construct() {
        try{
            
            //Instanciamos las clases del model
            $this->modelIndex = new Index();
            $this->modelAdmin = new Admin();
            $this->modelSecurity = new Security();
        } 
        catch (Exception $e) {
        Die($e->getMessage());
        }
    }
     public function viewReportes()
    {   
        require_once 'view/all/header.php';
        require_once 'view/admin/reportes.php';
        require_once 'view/all/footer.php';
    }
  
    public function viewInsertOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
        require_once 'view/all/header.php';
        require_once 'view/admin/formInsertOperario.php';
        require_once 'view/all/footer.php';
    }
    public function viewUpdateOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
        require_once 'view/all/header.php';
        require_once 'view/admin/formUpdateOperario.php';
        require_once 'view/all/footer.php';
    }
    
    public function viewListOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
        require_once 'view/all/header.php';
        require_once 'view/admin/listOperario.php';
        require_once 'view/all/footer.php';
    }
    public function viewDetalleOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
        require_once 'view/all/header.php';
        require_once 'view/admin/detalleOperario.php';
        require_once 'view/all/footer.php';
    }
    
    public function generarPdf()
    {
     
      $this->modelSecurity->validarSesionAdmin();
      
      require 'controller/PDF.php';
      require 'model/conexion.php';
      
      
     $query= "SELECT * FROM ingreso";
    $resultado=$mysqli->query($query);
 
     $pdf=new PDF();
     $pdf->AliasNbPages();
     $pdf->AddPage();
     
     $pdf->SetFillColor(232,232,232);
     $pdf->SetFont('Arial','B',12);
     $pdf->Cell(20,6,'Id',1,0,'C',1);
     $pdf->Cell(40,6,'Usuario',1,0,'C',1);
     $pdf->Cell(40,6,'hora entrada',1,0,'C',1);
     $pdf->Cell(40,6,'Hora salida',1,1,'C',1);
     
     
     $pdf->SetFont('Arial','',10);
 
     while ($row = $resultado->fetch_assoc())
     {
     $pdf->Cell(20,6,$row['ingreso_id'],1,0,'C',1);
     $pdf->Cell(40,6,$row['ingreso_usuario'],1,0,'C',1);
   
     $pdf->Cell(40,6,$row['ingreso_hora'],1,0,'C',1);
     $pdf->Cell(40,6,$row['ingreso_salida'],1,0,'C',1);
  
    
         
     }
     
     
     $pdf->Output(); //Salida al navegador
     
                       
        
    }

    public function insertOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
        $contraseña = password_hash("A" . $_POST['documento'], PASSWORD_DEFAULT);
        foreach ($this->modelAdmin->queryUserId($_POST['documento']) as $r) {}
        if (!empty($r->login_usuario)&&($r->login_usuario==$_POST['documento'])) {
        ?>
            
        <script>
          alert("Lo sentimos este usuario ya existe");
          location.href="?c=Admin&m=viewInsertOperario";
          </script>
        <?php
        
        }else{
            
            $data = array(
            "usuario" => $_POST['documento'],
            "password" => $contraseña,
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
        $this->modelAdmin->insertOperario($data); ?>
        <script>
            alert("Se ha registrado correctamente el Operario");
            location.href='?c=Index&m=viewHome';
            </script>                  
       <?php }
    }
    public function updateOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
            $data = array(
            "id"=>$_POST['id'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "direccion" => $_POST['direccion'],
            "email" => $_POST['email'],
            "telefono" => $_POST['telefono'],
            "celular" => $_POST['celular'],
           );
        
            $this->modelAdmin->updateOperario($data); ?>
            
            <script>
            alert("Se han modificado los datos correctamente");
            location.href='?c=Admin&m=viewListOperario';
            </script>
      <?php            
            
    }
    public function desactivarOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
          $estado=0;
          $this->modelAdmin->updateEstadoOperario($_REQUEST['id'], $estado) ?>
          <script>
          alert("Se ha desactivo el Operario");
          location.href='?c=Admin&m=viewListOperario';
          </script>
      <?php 
    }
    public function activarOperario()
    {
        $this->modelSecurity->validarSesionAdmin();
           $estado=1;
           $this->modelAdmin->updateEstadoOperario($_REQUEST['id'], $estado) ?>
           <script>
            alert("Se Activo el Operario");
            location.href='?c=Admin&m=viewListOperario';
            </script>
      <?php 
    }
    
    public function queryLikeListOperario()
    { $this->modelSecurity->validarSesionAdmin();?>
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
                                    <?php foreach ($this->modelAdmin->queryLikeListOperario('%' . $_REQUEST['q'] . '%') as $r)  { ?>
                                    <tr>                                        
                                            <td align="center">
                                                
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
