<script>
    function validar_formulario()
    {
        //En este if, van todos los valores de los elementos del formulario
        if (
                (document.formInsertSeller.nombre.value === "")
                || (document.formInsertSeller.apellido.value === "")
                || (document.formInsertSeller.documento.value === "")
                || (document.formInsertSeller.direccion.value === "")
                || (document.formInsertSeller.email.value === "")
                || (document.formInsertSeller.telefono.value === "")
                || (document.formInsertSeller.celular.value === "")
                || (document.formInsertSeller.genero.value === "")
                || (document.formInsertSeller.zona.value === "")
                )
        {
            alert("Debe completar todos los Campos del Formulario");
        }
        if (
                (document.formInsertSeller.nombre.value !== "")
                && (document.formInsertSeller.apellido.value !== "")
                && (document.formInsertSeller.documento.value !== "")
                && (document.formInsertSeller.direccion.value !== "")
                && (document.formInsertSeller.email.value !== "")
                && (document.formInsertSeller.telefono.value !== "")
                && (document.formInsertSeller.celular.value !== "")
                && (document.formInsertSeller.genero.value !== "")
                && (document.formInsertSeller.zona.value !== "")
                )
        {
            document.formInsertSeller.submit();
        }
    }
//*************************************************************************************
    function validar_nombres(letra)
    {
        if (!/^([A-ZÑÁÉÍÓÚ0-9 ])*$/.test(letra))
        {
            document.formInsertSeller.nombre.value = "";
            alert("El formato de Nombre " + letra + " NO es valido!.");
        }
    }
//*************************************************************************************
    function validar_apellidos(letra)
    {
        if (!/^([A-ZÑÁÉÍÓÚ ])*$/.test(letra))
        {
            document.formInsertSeller.apellido.value = "";
            alert("El formato de Apellido " + letra + " NO es valido!.");
        }
    }
//*************************************************************************************
    function validar_documento(letra)
    {
        if (!/^([0-9])*$/.test(letra))
        {
            document.formInsertSeller.documento.value = "";
            alert("El formato de documento " + letra + " NO es valido!.");
        } else
        {
            numeroDocumento = document.getElementById("documento").value;
            numero = numeroDocumento.length;
            if (numero < 8)
            {
                document.formInsertSeller.documento.value = "";
                alert("El formato de documento " + letra + " NO es valido!.");
            } else if (numero > 10)
            {
                document.formInsertSeller.documento.value = "";
                alert("El formato de documento " + letra + " NO es valido!.");
            }
        }
    }
//*************************************************************************************
    function validar_direccion(letra)
    {
        if (!/^([0-9a-zA-ZÁáÉéÍíÓóÚú#-. ])*$/.test(letra))
        {
            document.formInsertSeller.direccion.value = "";
            alert("El formato de direccion " + letra + " NO es valido!.");
        }
    }
//*************************************************************************************
    function validar_correo(letra)
    {
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!expr.test(letra))
        {
            document.formInsertSeller.email.value = "";
            alert("La dirección de correo " + letra + " es incorrecta.");
        }
    }
//*************************************************************************************
    function validar_telefono(letra)
    {
        if (!/^([0-9])*$/.test(letra))
        {
            document.formInsertSeller.telefono.value = "";
            alert("El formato de telefono " + letra + " NO es valido!.");
        } else {
            numeroDocumento = document.getElementById("telefono").value;
            numero = numeroDocumento.length;
            if (numero < 7 || numero > 8)
            {
                document.formInsertSeller.telefono.value = "";
                alert("El formato de telefono " + letra + " NO es valido!.");
            }
        }
    }
//*************************************************************************************
    function validar_celular(letra)
    {
        if (!/^([0-9])*$/.test(letra))
        {
            document.formInsertSeller.celular.value = "";
            alert("El formato de celular " + letra + " NO es valido!.");
        } else
        {
            numeroDocumento = document.getElementById("celular").value;
            numero = numeroDocumento.length;
            if (numero !== 10)
            {
                document.formInsertSeller.celular.value = "";
                alert("El formato de celular " + letra + " NO es valido!.");
            }
        }
    }

</script>


<div id="page-wrapper">

    <section id="banner">
        <h1>Parking Control</h1>
        <p>Un Sistema seguro De Parqueadero</p>
        
        <ul class="actions">
            <div class="container-fluid ">
                
                    <div class="container">
                        <label><h2 style="color: #ffffff;"><bs>Registrar Vehiculo</b></h2></label>
                        <br>
                        <form action="?c=Operario&m=insertVehiculo" name="formInsertSeller" id="formInsertSeller" method="post" enctype="multipart/form-data" autocomplete="off">
                                                        
                            <div class="form-group">
                                <label for="user" style="color: #ffffff;">Placa o documento</label>
                                <input class="form-control"  style="color:black;" type="text" name="placa" id="placa" placeholder="Placa o Documento" size="50" required="" onchange="validar_nombres(this.value)" pattern="^[a-zA-Z0-9 áéíóúñÑÁÉÍÓÚ ]*$">
                                <small class="form-text text-muted" style="color: #ffffff;">Diligenciar en MAYÚSCULAS.</small>
                            </div>
                            
                             <div class="form-group">
                                <label for="usuarios" style="color: #ffffff;">Usuarios</label>
                                <select class="form-control" id="usuario" name="usuario">
                                    <option value="">Seleccione...</option>
                                    <?php foreach($this->modelOperario->queryUsuariosActivos() as $r){?>
                                    <option value="<?php echo $r->usuario_id; ?>" style="color:black;"><?php echo $r->usuario_id.' - '.$r->usuario_nombre.' '.$r->usuario_apellido; ?></option>
                                    <?php } ?>
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="user" style="color: #ffffff;"> Color</label>
                                <input class="form-control" style="color:black;" type="text" name="color" id="color" placeholder="Color" size="50" required="" onchange="validar_apellidos(this.value)" pattern="^[a-zA-Z áéíóúñÑÁÉÍÓÚ ]*$">
                                <small class="form-text text-muted" style="color: #ffffff;">Diligenciar en MAYÚSCULAS.</small>
                            </div>
                             <div class="form-group">
                                <label for="egenero" style="color: #ffffff;">Tipo</label>
                                <select class="form-control" id="tipo" name="tipo">
                                    <option value="">Seleccione...</option>
                                    <option value="1" style="color:black;">Moto</option>
                                    <option value="2" style="color:black;">Bicicleta</option>
                                </select>
                            </div>
                         
                            <br>
                            <button type="submit" name="Submit" class="btn btn-primary">Registrar</button>
                            <button type="reset" class="btn btn-primary" id="btnSencillos">Limpiar</button>
                            <a href="javascript:history.go(-1)" class="btn btn-primary" id="btnSencillos" >Volver</a>
                        </form>


                    </div>           
            </div>



        </ul>
    </section>
</div>