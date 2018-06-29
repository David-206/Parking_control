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
        if (!/^([A-ZÑÁÉÍÓÚ ])*$/.test(letra))
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
        <h1> Parking Control</h1>
        <p>Un Sistema seguro De Parqueadero</p>
        
        <ul class="actions">
            <div class="container-fluid ">
                
                    <div class="container">
                        <label><h2 style="color: #ffffff;"><bs>Registrar Operario</b></h2></label>
                        <br>
                        <form action="?c=Admin&m=insertOperario" name="formInsertSeller" id="formInsertSeller" method="post" enctype="multipart/form-data" autocomplete="off">
                            
                             
                            <div class="form-group">
                                <label for="user" style="color: #ffffff;">Nombres</label>
                                <input class="form-control"  style="color:black;" type="text" name="nombre" id="nombre" placeholder="Nombres del Operario" size="50" required="" onchange="validar_nombres(this.value)" pattern="^[a-zA-Z áéíóúñÑÁÉÍÓÚ ]*$">
                                <small class="form-text text-muted" style="color: #ffffff;">Diligenciar en MAYÚSCULAS.</small>
                            </div>

                            <div class="form-group">
                                <label for="user" style="color: #ffffff;"> Apellidos</label>
                                <input class="form-control" style="color:black;" type="text" name="apellido" id="apellido" placeholder="Apellidos del Operario" size="50" required="" onchange="validar_apellidos(this.value)" pattern="^[a-zA-Z áéíóúñÑÁÉÍÓÚ ]*$">
                                <small class="form-text text-muted" style="color: #ffffff;">Diligenciar en MAYÚSCULAS.</small>
                            </div>
                            <div class="form-group">
                                <label for="egenero" style="color: #ffffff;">Tipo de documento</label>
                                <select class="form-control" id="tp" name="tp">
                                    <option value="">Seleccione...</option>
                                    <option value="cc" style="color:black;">Cedula de ciudadania</option>
                                    <option value="ti" style="color:black;">Tarjeta de identidad</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Documento" style="color: #ffffff;">Numero de Documento</label>
                                <input class="form-control" style="color:black;" type="text" name="documento" id="documento" placeholder="Documento" size="12" required="" onchange="validar_documento(this.value)" pattern="^[0-9]*$">
                                <small class="form-text text-muted" style="color: #ffffff;" >Debe contener mas de 8 caracteres y sin espacio.</small>
                            </div>

                            <div class="form-group">
                                <label for="Direccion" style="color: #ffffff;">Dirección</label>
                                <input class="form-control"  style="color:black;" type="text" name="direccion" id="direccion" placeholder="Dirección" size="100" required="" onchange="validar_direccion(this.value)" pattern="^[0-9A-Za-z-#. ]*$">
                            </div>

                            <div class="form-group">
                                <label for="Email" style="color: #ffffff;">E-mail</label>
                                <input type="email" style="color:black;" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail" onchange="validar_correo(this.value)" required="">
                                <small id="emailHelp" style="color: white" class="form-text text-muted">Nunca compartiremos tu e-mail con ningúna persona.</small>
                            </div>

                            <div class="form-group">
                                <label for="tel" style="color: #ffffff;">Telefono</label>
                                <input class="form-control" style="color:black;" type="text" name="telefono" id="telefono" placeholder="Telefono" size="8" required="" onchange="validar_telefono(this.value)" pattern="^[0-9]*$">
                                <small style="color: white" class="form-text text-muted">Formato sin espacios.</small>
                            </div>

                            <div class="form-group">
                                <label for="cel" style="color: #ffffff;">Celular</label>
                                <input class="form-control" style="color:black;" type="text" name="celular" id="celular" placeholder="Celular" size="11" required="" onchange="validar_celular(this.value)" pattern="^[0-9]*$">
                                <small style="color: white" class="form-text text-muted">Formato sin espacios.</small>
                            </div>

                            <div class="form-group">
                                <label for="egenero" style="color: #ffffff;">Genero</label>
                                <select class="form-control" id="genero" name="genero">
                                    <option value="">Seleccione...</option>
                                    <option value="F" style="color:black;">Femenino</option>
                                    <option value="M" style="color:black;">Masculino</option>
                                </select>
                            </div>

                            <br>
                            <button type="submit" name="Submit" class="btn btn-primary">Registrar</button>
                            
                            <script>
                            <script type="text/javascript">alert('lo que quieras');</script>                                        
                            </script>
                            
                            <button type="reset" class="btn btn-primary" id="btnSencillos">Limpiar</button>
                        </form>


                    </div>           
            </div>



        </ul>
    </section>
</div>
