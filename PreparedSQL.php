<?php

final class PreparedSQL {
   
    
    //LOGIN
    const SELECT_USER_ID="SELECT * FROM login WHERE login_usuario=?";
    const INSERT_LOGIN="INSERT INTO login(login_usuario,login_password,login_cargo)VALUES(?,?,?)";

    
    //INSERTAR USUARIO
    const QUERY_OPERARIOS="SELECT * FROM login inner join usuario WHERE login.login_cargo='operario' && login.login_usuario=usuario.usuario_id";
    const INSERT_OPERARIO="INSERT INTO usuario(usuario_id,usuario_password,usuario_nombre,usuario_apellido,usuario_documento,usuario_direccion,usuario_email,usuario_telefono,usuario_celular,usuario_genero,usuario_tp,usuario_ingreso,usuario_cargo) VALUES (?,?,?,?,?,?,?,?,?,?,?,now(),?)";
    const SELECT_USUARIO_ID="SELECT * FROM usuario WHERE usuario_id=?";
    const QUERY_OPERARIOS_ID="SELECT * FROM login inner join usuario WHERE login.login_cargo='operario' && login.login_usuario=? && login.login_usuario=usuario.usuario_id";
    const QUERY_USUARIOS_ID="SELECT * FROM usuario WHERE usuario_cargo='usuario' && usuario_id=?";
    const UPDATE_USUARIO_ID="UPDATE usuario SET usuario_nombre=?,usuario_apellido=?,usuario_direccion=?,usuario_email=?,usuario_telefono=?,usuario_celular=? WHERE usuario_id=?";
    const UPDATE_ESTADO_OPERARIO="UPDATE usuario SET usuario_estado=? WHERE usuario_id=?";
    const INSERT_USUARIO="INSERT INTO usuario(usuario_id,usuario_nombre,usuario_apellido,usuario_documento,usuario_direccion,usuario_email,usuario_telefono,usuario_celular,usuario_genero,usuario_tp,usuario_ingreso,usuario_cargo) VALUES (?,?,?,?,?,?,?,?,?,?,now(),?)";
     const QUERY_USUARIOS="SELECT * FROM usuario WHERE usuario_cargo=?";
     const QUERY_USUARIOS_ACTIVOS="SELECT * FROM usuario WHERE usuario_cargo=? && usuario_estado=?";
     const SELECT_VEHICULO_ID="SELECT * FROM vehiculo WHERE vehiculo_id=?";
     const SELECT_VEHICULOS="SELECT * FROM vehiculo";
     const QUERY_LIKE_OPERARIO= "SELECT * FROM usuario WHERE usuario_cargo='operario' && (usuario_nombre LIKE ? OR usuario_apellido LIKE ?  OR usuario_id LIKE ?)";
     const QUERY_LIKE_USUARIO= "SELECT * FROM usuario WHERE usuario_cargo='usuario' && (usuario_nombre LIKE ? OR usuario_apellido LIKE ?  OR usuario_id LIKE ?)";
     
     
     const QUERY_USUARIO_VEHICULO="SELECT * FROM vehiculo inner join usuario inner join categoria WHERE usuario.usuario_id=? AND usuario.usuario_id=vehiculo.vehiculo_usuario AND vehiculo.vehiculo_tipo=categoria.categoria_id";
      const QUERY_PARQUEADERO="SELECT * FROM ingreso WHERE ingreso_parqueadero=?";
      const UPDATE_PARQUEADERO_ESTADO="UPDATE ingreso SET ingreso_estado=?, ingreso_salida=now() WHERE ingreso_id=?";
       const QUERY_PARQUEADERO_ESTADO="SELECT * FROM ingreso inner join usuario WHERE ingreso.ingreso_parqueadero=? && ingreso.ingreso_estado=? && ingreso.ingreso_usuario=usuario.usuario_id";
     const INSERT_INGRESO="INSERT INTO ingreso (ingreso_usuario,ingreso_vehiculo,ingreso_hora,ingreso_parqueadero) VALUES (?,?,now(),?)";
     const INSERT_VEHICULO="INSERT INTO vehiculo(vehiculo_id,vehiculo_usuario,vehiculo_color,vehiculo_tipo)VALUES(?,?,?,?)";
}



