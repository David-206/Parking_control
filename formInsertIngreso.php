<style>
    #Casilla
    {
        padding: 10px;
    }
    #ocupado
    {
         background-color: transparent;
         min-height: 80px; 
        width: 80px;
        border: 3px solid transparent;
        background-color: #d34c50;
        border-radius: 25px;
         
    }

    #disponible
    {
        
         background-color: transparent;
         min-height: 80px; 
        width: 80px;
        color:black;
        background-color: #d7cc5e;
        border: 3px solid transparent;
        border-radius: 25px;
    }
</style>
<script>
    function asignarParqueadero(data)
    {
        var urls = "parqueadero=" + data;
        $.ajax({
            type: 'post',
            url: '?c=Operario&m=formAsignarParqueadero',
            data: urls,
            success(response)
            {
                $('#resultAsignarParqueadero').html(response);
            }

        });
        $('#asignarParqueadero').modal('show');
    }

    function salidaParqueadero(data)
    {
        var urls = "parqueadero=" + data;
        $.ajax({
            type: 'post',
            url: '?c=Operario&m=formSalidaParqueadero',
            data: urls,
            success(response)
            {
                $('#resultAsignarParqueadero').html(response);
            }

        });
        $('#asignarParqueadero').modal('show');
    }
</script>
<div id="page-wrapper">

    <div id="banner">
        <h1>Parking Control</h1>
        <p>Un Sistema seguro De Parqueadero</p>
             
        <ul class="actions">
          
            <div class="container" >
                <div class="col-md-6" >
                    <div class="container-fluid col-md-12" style="color:white; font-weight: bold; font-size: 40px; font-family:  arial,verdana,helvetica,sans-serif;">
                        MOTOS
                    </div>
                    <div class="container-fluid col-md-12">              
                        <?php for ($i = 1; $i <= 6; $i++) { ?>
                            <div class="col-md-2" id="Casilla">
                                <?php
                                foreach ($this->modelOperario->queryParqueadero($i) as $r) {}
                                if ((isset($r->ingreso_id)) && ($r->ingreso_parqueadero == $i) && ($r->ingreso_estado == 0)) {
                                    ?>
                                <button type="button" id="ocupado" value="<?php echo $i; ?>" onclick="salidaParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></button>
                                <?php } else { ?> 
                                <button type="button" id="disponible" value="<?php echo $i; ?>" onclick="asignarParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></h2></button>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>                
                    </div>
                    <div class="container-fluid col-md-12">              
                        <?php for ($i = 7; $i <= 12; $i++) { ?>
                            <div class="col-md-2" id="Casilla">
                                <?php
                                foreach ($this->modelOperario->queryParqueadero($i) as $r) {}
                                if ((isset($r->ingreso_id)) && ($r->ingreso_parqueadero == $i) && ($r->ingreso_estado == 0)) {
                                    ?>
                                <button type="button" id="ocupado" value="<?php echo $i; ?>" onclick="salidaParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></button>
                                <?php } else { ?> 
                                <button type="button" id="disponible" value="<?php echo $i; ?>" onclick="asignarParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></h2></button>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>                
                    </div>
                    <div class="container-fluid col-md-12">              
                        <?php for ($i = 13; $i <= 18; $i++) { ?>
                            <div class="col-md-2" id="Casilla">
                                <?php
                                foreach ($this->modelOperario->queryParqueadero($i) as $r) {}
                                if ((isset($r->ingreso_id)) && ($r->ingreso_parqueadero == $i) && ($r->ingreso_estado == 0)) {
                                    ?>
                                <button type="button" id="ocupado" value="<?php echo $i; ?>" onclick="salidaParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></button>
                                <?php } else { ?> 
                                <button type="button" id="disponible" value="<?php echo $i; ?>" onclick="asignarParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></h2></button>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>                
                    </div>
                </div>
                <div class="col-md-6" >
                     <div class="container-fluid col-md-12" style="color:white; font-weight: bold; font-size: 40px; font-family:  arial,verdana,helvetica,sans-serif;">
                        BICICLETAS
                    </div>
                    <div class="container-fluid col-md-12">              
                        <?php for ($i = 19; $i <= 24; $i++) { ?>
                            <div class="col-md-2" id="Casilla">
                                <?php
                                foreach ($this->modelOperario->queryParqueadero($i) as $r) {}
                                if ((isset($r->ingreso_id)) && ($r->ingreso_parqueadero == $i) && ($r->ingreso_estado == 0)) {
                                    ?>
                                <button type="button" id="ocupado" value="<?php echo $i; ?>" onclick="salidaParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></button>
                                <?php } else { ?> 
                                <button type="button" id="disponible" value="<?php echo $i; ?>" onclick="asignarParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></h2></button>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>                
                    </div>
                    <div class="container-fluid col-md-12">              
                        <?php for ($i = 25; $i <= 30; $i++) { ?>
                            <div class="col-md-2" id="Casilla">
                                <?php
                                foreach ($this->modelOperario->queryParqueadero($i) as $r) {}
                                if ((isset($r->ingreso_id)) && ($r->ingreso_parqueadero == $i) && ($r->ingreso_estado == 0)) {
                                    ?>
                                <button type="button" id="ocupado" value="<?php echo $i; ?>" onclick="salidaParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></button>
                                <?php } else { ?> 
                                <button type="button" id="disponible" value="<?php echo $i; ?>" onclick="asignarParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></h2></button>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>                
                    </div>
                    <div class="container-fluid col-md-12">              
                        <?php for ($i = 31; $i <= 36; $i++) { ?>
                            <div class="col-md-2" id="Casilla">
                                <?php
                                foreach ($this->modelOperario->queryParqueadero($i) as $r) {}
                                if ((isset($r->ingreso_id)) && ($r->ingreso_parqueadero == $i) && ($r->ingreso_estado == 0)) {
                                    ?>
                                <button type="button" id="ocupado" value="<?php echo $i; ?>" onclick="salidaParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></button>
                                <?php } else { ?> 
                                <button type="button" id="disponible" value="<?php echo $i; ?>" onclick="asignarParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></h2></button>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>                
                    </div>
                    <div class="container-fluid col-md-12">              
                        <?php for ($i = 37; $i <= 42; $i++) { ?>
                            <div class="col-md-2" id="Casilla">
                                <?php
                                foreach ($this->modelOperario->queryParqueadero($i) as $r) {}
                                if ((isset($r->ingreso_id)) && ($r->ingreso_parqueadero == $i) && ($r->ingreso_estado == 0)) {
                                    ?>
                                <button type="button" id="ocupado" value="<?php echo $i; ?>" onclick="salidaParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></button>
                                <?php } else { ?> 
                                <button type="button" id="disponible" value="<?php echo $i; ?>" onclick="asignarParqueadero(this.value)"><h2 style="color: white; font-weight: bold;"><?php echo $i; ?></h2></button>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>                
                    </div>
                </div>
            </div>
            
            
           
            <div style=" z-index: 100000;" class="modal fade" id="asignarParqueadero" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>Asignar Parqueadero</b></h4>
                        </div>
                        <div class="modal-body" style="text-align: justify;">
                            <div id="resultAsignarParqueadero">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>

</div>
