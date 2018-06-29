
<div id="page-wrapper">

    <section id="banner">
        <h2>Parking Control</h2>
        <p>Un Sistema seguro De Parqueadero</p>
        <ul class="actions">
           
<div class="container">
    <div class="col-md-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="panel-title">
                                        <center><h3><B>OPERARIOS</b></h3></center>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <form class="navbar-form text-left" role="search">
                                    <input class="form-control"  placeholder="Documento,Nombre o Apellido" style="width:80%; background-color: white; border: 1px solid; " name="srch-term" id="srch-term" type="text" onkeyup="queryLikeListOperario(this.value)">
                                    </form>
                                </div> 
                                
                            </div>
                        </div>
                        <div class="panel-body" id="invent"   style="overflow-y: scroll; max-height: 600px;">
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
                                    <?php foreach ($this->modelAdmin->queryOperarios() as $r) { ?>
                                    <tr>                                        
                                            <td align="center">
                                                    <a href="?c=Admin&m=viewDetalleOperario&id=<?php echo $r->usuario_id;?>">Ver<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
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
                            <a href="javascript:history.go(-1)" class="btn btn-primary" id="btnSencillos" >Volver</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div><!-- Trigger the modal with a button -->

</div>


        </ul>
    </section>
</div>





