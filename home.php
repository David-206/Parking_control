<div id="page-wrapper">

    <section id="banner">
        <h2>Parking Control</h2>
        <p>Un Sistema seguro De Parqueadero</p>
        <ul class="actions">
            <div class="container">
                <div class="col-md-6">
                    <?php      foreach ($this->modelIndex->queryUsuariosId($_SESSION['USUARIO']) as $r){}?>
                    
                        <label><h2 style="color: #ffffff;"><bs>PERFIL</b></h2></label>
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
                            

                            <br>
                            
                            </form>
                </div>
                 <div class="col-md-6">
                    <center>
                <?php if($_SESSION['CARGO']=='admin'){?>
                <button class="button special" onclick="viewRuta(this.value)" value="?c=Admin&m=viewInsertOperario"><a href="?c=Admin&m=viewInsertOperario">Nuevo Operario</a></button><br><br>
                <button class="button special" onclick="viewRuta(this.value)" value="?c=Admin&m=viewListOperario"><a href="?c=Admin&m=viewListOperario">Operarios</a></button><br><br>
                <button class="button special" onclick="viewRuta(this.value)" value="?c=Admin&m=generarPdf"><a href="?c=Admin&m=generarPdf">Reportes</a></button>
                <?php }
                else
                { ?>
                    <button class="button special" onclick="viewRuta(this.value)" value="?c=Operario&m=viewInsertEstudiante"><a href="?c=Operario&m=viewInsertEstudiante">Nuevo Usuario</a></button><br><br>
                     <button class="button special" onclick="viewRuta(this.value)" value="?c=Operario&m=viewListUsuarios"><a href="?c=Operario&m=viewListUsuarios">Listado Usuarios</a></button><br><br>
                    <button class="button special" onclick="viewRuta(this.value)" value="?c=Operario&m=viewInsertVehiculo"><a href="?c=Operario&m=viewInsertVehiculo">Registrar Vehiculo</a></button><br><br>
                    <button class="button special" onclick="viewRuta(this.value)" value="?c=Operario&m=viewInsertIngreso"><a href="?c=Operario&m=viewInsertIngreso">Parqueadero</a></button><br><br>
                   
                <?php } ?>
            </center>
                </div>
            </div>
            
            
            
            
            
            
        </ul>
    </section>
</div>
