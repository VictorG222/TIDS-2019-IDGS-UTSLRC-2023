/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaDatos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Hashtable;

public class ADOUsuarios {

        Conexion conector=new Conexion();
        private Statement stm=null;
        private PreparedStatement pstm=null;
        private ResultSet rs=null;
        private Connection reg=null;
    
    public int getIdusuario() {
        return idusuario;
    }

    /**
     * @param idusuario the idusuario to set
     */
    public void setIdusuario(int idusuario) {
        this.idusuario = idusuario;
    }

    /**
     * @return the nombre
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * @param nombre the nombre to set
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * @return the apellido
     */
    public String getApellido() {
        return apellido;
    }

    /**
     * @param apellido the apellido to set
     */
    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    /**
     * @return the password
     */
    public String getPassword() {
        return password;
    }

    /**
     * @param password the password to set
     */
    public void setPassword(String password) {
        this.password = password;
    }

    /**
     * @return the email
     */
    public String getEmail() {
        return email;
    }

    /**
     * @param email the email to set
     */
    public void setEmail(String email) {
        this.email = email;
    }

    /**
     * @return the genero
     */
    public String getGenero() {
        return genero;
    }

    /**
     * @param genero the genero to set
     */
    public void setGenero(String genero) {
        this.genero = genero;
    }

    /**
     * @return the telefono
     */
    public String getTelefono() {
        return telefono;
    }

    /**
     * @param telefono the telefono to set
     */
    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }

    /**
     * @return the domicilio
     */
    public String getDomicilio() {
        return domicilio;
    }

    /**
     * @param domicilio the domicilio to set
     */
    public void setDomicilio(String domicilio) {
        this.domicilio = domicilio;
    }

    /**
     * @return the tipoDeUsuario
     */
    public String getTipoDeUsuario() {
        return tipoDeUsuario;
    }

    /**
     * @param tipoDeUsuario the tipoDeUsuario to set
     */
    public void setTipoDeUsuario(String tipoDeUsuario) {
        this.tipoDeUsuario = tipoDeUsuario;
    }

    /**
     * @return the foto
     */
    public String getFoto() {
        return foto;
    }

    /**
     * @param foto the foto to set
     */
    public void setFoto(String foto) {
        this.foto = foto;
    }
  
    private int idusuario;
    private String nombre;
    private String apellido;
    private String password;
    private String email;
    private String genero;
    private String telefono;
    private String domicilio;
    private String tipoDeUsuario;
    private String foto;
  
    
    public ADOUsuarios(){
        
    }
    
    public ADOUsuarios(int idusuario,String nombre,String apellido,String password,String email,String genero,String telefono,String domicilio,String tipodeusuario,String foto){
        this.setIdusuario(idusuario);
        this.setNombre(nombre);
        this.setApellido(apellido);
        this.setPassword(password);
        this.setEmail(email);
        this.setGenero(genero);
        this.setTelefono(telefono);
        this.setDomicilio(domicilio);
        this.setTipoDeUsuario(tipodeusuario);
        this.setFoto(foto);
    }
   
    
    public int ValidarUsuario(String tipodeusuario,String password) throws SQLException{
        int row=0;
        String sql="Select *From usuarios Where tipodeusuario='"+tipodeusuario+"'and password='"+password+"'Limit 1";
        try {
            reg=conector.getConexion();
            if(reg!=null){
                stm=reg.createStatement();
                rs=stm.executeQuery(sql); 
                rs.next(); 
                row=rs.getRow(); 
            }
          
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Error");
        }
        conector.Desconectar();
        return row;
    }
    
    public int AgregarUsuario(ADOUsuarios user){
        int renglon=0;
        String sql="Insert into usuarios(nombre,apellido,password,email,genero,telefono,domicilio,tipodeusuario,foto)" 
                +"values('"+user.getNombre()+"','"+user.getApellido()+"','"+user.getPassword()+"','"+user.getEmail()+"','"+user.getGenero()+"','"+user.getTelefono()+"','"+user.getDomicilio()+"','"+user.getTipoDeUsuario()+"','"+user.getFoto()+"')";
        try {
            reg=conector.getConexion();
            if(reg!=null){ 
                stm=reg.createStatement();
                stm.executeUpdate(sql); 
                renglon=1;
            }
            
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Error");
        }
        conector.Desconectar();
        return renglon;
    }
  
    
    public ResultSet TablaUsuarios(){
        ResultSet datos=null;
        String sql="Select * From usuarios";
        try {
            reg=conector.getConexion();
            stm=reg.createStatement(); 
            datos=stm.executeQuery(sql); 
            
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Error");
        }
        return datos;
    }
    
    
     
     
    public int BorrarUsuario(int idusuario){
        int renglon= 0;
        String sql= "Delete From usuarios where idusuario="+idusuario;
        try {
            reg=conector.getConexion();
            if(reg!=null){
                stm=reg.createStatement();
                stm.executeUpdate(sql);
                renglon=1;
            }
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Error");
        }
        
        
        return renglon;
    }
    public int CambiosUsuarios(ADOUsuarios user){
        int flag=0;
        String idusuario=String.valueOf(user.getIdusuario());
        
        String sql="UPDATE usuarios set nombre=?,apellido=?,password=?,email=?,genero=?,telefono=?,domicilio=?,tipodeusuario=?,foto=? where idusuario=?";
        try {
            reg=conector.getConexion();
            pstm=reg.prepareStatement(sql);
            pstm.setString(1,user.getNombre());
            pstm.setString(2,user.getApellido());
            pstm.setString(3,user.getPassword());
            pstm.setString(4,user.getEmail());
            pstm.setString(5,user.getGenero());
            pstm.setString(6,user.getTelefono());
            pstm.setString(7,user.getDomicilio());
            pstm.setString(8,user.getTipoDeUsuario());
            pstm.setString(9,user.getFoto());
            pstm.setString(10,idusuario);
            
            flag=pstm.executeUpdate();
            
            
            
            
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Error");
        }
        
        return flag;
    }
}
