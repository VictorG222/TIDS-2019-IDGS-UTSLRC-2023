/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaLogica;

import CapaDatos.ADOUsuarios;
import java.sql.ResultSet;
import java.sql.SQLException;

public class ManejoDeUsuarios {

    ADOUsuarios objusuario= new ADOUsuarios();
    
    public int ValidarUsuario(String tipodeusuario,String password) throws SQLException{
        int flag=0;
        flag=objusuario.ValidarUsuario(tipodeusuario, password);
        if(flag==1 && (tipodeusuario.equals("Administrador"))){
        return flag;
    }if (flag==1 &&(tipodeusuario.equals("Vendedor"))){
        flag=2;
    }
    return flag;
    }
    public int EnviarUsuario(String nombre,String apellidos,String password,String correo,String genero,String domicilio,String telefono,String tipoduduario,String foto){
       int flag=0;
       objusuario.setNombre(nombre);
       objusuario.setApellido(apellidos);
       objusuario.setPassword(password);
       objusuario.setEmail(correo);
       objusuario.setGenero(genero);
       objusuario.setDomicilio(domicilio);
       objusuario.setTelefono(telefono);
       objusuario.setTipoDeUsuario(tipoduduario);
       objusuario.setFoto(foto);
        
       flag=objusuario.AgregarUsuario(objusuario);
       return flag;
    } 
    public ResultSet TablaUsuarios(){
        ResultSet tabla=null;
        tabla=objusuario.TablaUsuarios();
        return tabla;
    
    }
    public int DarBajasUsuarios(int idusuario){
    int flag=objusuario.BorrarUsuario(idusuario);
    return flag;
    }
    
 
    
}
