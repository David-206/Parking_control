
<script>
    function vehiculosUsuario(data)
{
   
    var urls="id="+data;
    $.ajax({
            type: 'post',
            url: '?c=Operario&m=vehiculoUsuario',
            data: urls,
            success(response) {
                $('#vehiculos').html(response);
            }
        });
}
    </script>
         <form action="?c=Operario&m=asignarParqueadero" name="formInsertSeller" id="formInsertSeller" method="post" enctype="multipart/form-data" autocomplete="off">
                 <div class="form-group">
                    <label for="usuarios">Parqueadero:</label>
                     <input type="text" name="num" id="num" value="<?php echo $_REQUEST['parqueadero'];?>" readonly=""></input>
                </div>       
                <div class="form-group">
                    <label for="usuarios">Usuarios</label>
                    <select class="form-control" id="usuario" name="usuario" required="">

                        <?php foreach($this->modelOperario->queryUsuariosActivos() as $r){?>
                        <option value="<?php echo $r->usuario_id; ?>" onclick="vehiculosUsuario(this.value)" style="color:black;"><?php echo $r->usuario_id."-".$r->usuario_nombre; ?></option>
                        <?php } ?>

                    </select>
                </div>
               
                <div id="vehiculos">

                </div>

                <br>
                <button type="submit" name="Submit" class="btn btn-primary">Registrar Ingreso</button>
                
            </form>