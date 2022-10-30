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
        if(flag==1 &&(tipodeusuario.equals("Administrador"))){
            flag=1;
        }
        if(flag==1 &&(tipodeusuario.equals("Vendedor"))){
            flag=2;
        }
        return flag;
    }
    
    public int EnviarUsuario(String nombre,String apellidos,String password,String correo,String genero,String domicilio,String telefono,String tipousuario,String foto){
        int bandera=0;
        objusuario.setNombre(nombre);
        objusuario.setApellido(apellidos);
        objusuario.setPassword(password);
        objusuario.setEmail(correo);
        objusuario.setGenero(genero);
        objusuario.setDomicilio(domicilio);
        objusuario.setTelefono(telefono);
        objusuario.setTipoDeUsuario(tipousuario);
        objusuario.setFoto(foto);
        
        bandera=objusuario.AgregarUsuario(objusuario);
        
        return bandera;
    }
    
    public ResultSet TablaUsuarios(){
        ResultSet tabla= null;
        tabla=objusuario.TablaUsuarios();
        return tabla;
    }
    
    public int DarBajaUsuarios(int idusuario){
        int flag=objusuario.BorrarUsuario(idusuario);
        return flag;
    }
    public int ActualizarUsuario(int idusuario,String nombre,String apellidos,String password,String correo,String genero,String domicilio,String telefono,String tipousuario,String foto){
        int flag=0;
        objusuario.setIdusuario(idusuario);
        objusuario.setNombre(nombre);
        objusuario.setApellido(apellidos);
        objusuario.setPassword(password);
        objusuario.setEmail(correo);
        objusuario.setGenero(genero);
        objusuario.setDomicilio(domicilio);
        objusuario.setTelefono(telefono);
        objusuario.setTipoDeUsuario(tipousuario);
        objusuario.setFoto(foto);
        flag=objusuario.CambiosUsuarios(objusuario);
        return flag;
    }
}
