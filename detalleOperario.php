
<div id="page-wrapper">

    <section id="banner">
        <h2>Parking Control</h2>
        <p>Un Sistema seguro De Parqueadero</p>
        <ul class="actions">
            <div class="container">
                <div class="col-md-12">
                        <?php      foreach ($this->modelAdmin->queryOperariosId($_REQUEST['id']) as $r){}?>
                    
                        <label><h2 style="color: #ffffff;"><bs>OPERARIO</b></h2></label>
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
             
            </div>
            
            
            
        </ul>

