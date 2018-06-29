
<div id="page-wrapper">

    <section id="banner">
        <h2>Parking Control</h2>
        <p>Un Sistema seguro De Parqueadero</p>
        <ul class="actions">
            <div class="container">
                <div class="col-md-6">
                        <?php      foreach ($this->modelOperario->queryUsuariosIdLike($_REQUEST['id']) as $r){}?>
                    
                        <label><h2 style="color: #ffffff;"><bs>USUARIO</b></h2></label>
                        <br>
                        <form action="?c=Admin&m=updateOperario" name="formInsertSeller" id="formInsertSeller" method="post" enctype="multipart/form-data" autocomplete="off">
                           <input class="form-control"  style="color:black;" type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id'];?>">
                            <div class="form-group">
                                <label for="user" style="color: #ffffff;">Nombres</label>
                                <input value="<?php echo $r->usuario_nombre;?>"class="form-control"  style="color:black;" readonly="">
                             </div>

                            <div class="form-group">
                                <label for="user" style="color: #ffffff;"> Apellidos</label>
                                <input value="<?php echo $r->usuario_apellido;?>"class="form-control" style="color:black;" readonly="">
                             </div>
                            <div class="form-group">
                                <label for="Direccion" style="color: #ffffff;">Dirección</label>
                                <input class="form-control"  value="<?php echo $r->usuario_direccion;?>" style="color:black;" readonly="">
                             </div>

                            <div class="form-group">
                                <label for="Email" style="color: #ffffff;">E-mail</label>
                                <input  value="<?php echo $r->usuario_email;?>"type="email" style="color:black;" class="form-control" readonly="">
                             </div>
                            <div class="form-group">
                                <label for="tel" style="color: #ffffff;">Telefono</label>
                                <input  value="<?php echo $r->usuario_telefono;?>"class="form-control" style="color:black;" readonly="">
                             </div>
                            

                            <div class="form-group">
                                <label for="cel" style="color: #ffffff;">Celular</label>
                                <input  value="<?php echo $r->usuario_celular;?>"class="form-control" style="color:black;" readonly="">
                             </div>
                            
                           
                            <a href="javascript:history.go(-1)" class="btn btn-primary" id="btnSencillos" >Volver</a>
                            </form>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="panel-title">
                                        <center><h3><B>VEHICULOS</b></h3></center>
                                    </div>
                                </div>
                                 
                                
                            </div>
                        </div>
                        <div class="panel-body" id="invent"   style="overflow-y: scroll; max-height: 600px;">
                            <table id="mytable" class="table table-striped table-bordered table-list" >
                                <thead>
                                    <tr>
                                        <th class="col-tools text-center"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                        </th>
                                        <th class="hidden-xs text-center">Placa</th>
                                        <th class="col-text text-center">Color</th>
                                        <th class="col-text text-center">Tipo</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->modelOperario->queryUsuarioVehiculo($_REQUEST['id']) as $r) { ?>
                                    <tr>                                        
                                            <td align="center">
                                                    
                                            </td>                                       
                                            <td style="color:black;"class="hidden-xs"><?php echo $r->vehiculo_id; ?></td>
                                            <td style="color:black;"><?php echo $r->vehiculo_color; ?></td>
                                            <td style="color:black;"><?php echo $r->categoria_nombre; ?></td> 
                                                                   
                                        </tr>
                                    <?php } ?>
                                                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </ul>

