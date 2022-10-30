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
/**
 *
 * @author acer
 */
public class ADOUsuarios {
            Conexion conector=new Conexion();
            private Statement stm=null;
            private PreparedStatement pstm=null;
            private ResultSet rs=null;
            private Connection reg=null;
    /**
     * @return the idusuario
     */
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
            reg = conector.getConexion();
            if(reg!=null){
            stm=reg.createStatement();
            rs=stm.executeQuery(sql);
            rs.next();
            row=rs.getRow();
            }
                
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Que con este error!");
        }
        conector.Desconectar();
        return row;
    }
    
    public int AgregarUsuario(ADOUsuarios user){
        int renglon=0;
        String sql="Insert into usuarios(nombre, apellido, password, email, genero, telefono, domicilio, tipodeusuario, foto)"
                + "values('"+user.getNombre()+"','"+user.getApellido()+"','"+user.getPassword()+"','"+user.getEmail()+"','"+user.getGenero()+"','"+user.getTelefono()+"','"+user.getDomicilio()+"','"+user.getTipoDeUsuario()+"','"+user.getFoto()+"')";
        try {
            reg=conector.getConexion();
            if(reg!=null){
            stm=reg.createStatement();
            stm.executeUpdate(sql);
            renglon=1;
            }
        } catch (SQLException ex) {
            System.out.println("Que rollo con esto...!!!!????"+ex);
        }
        conector.Desconectar();
        return renglon;
  }
    public ResultSet TablaUsuarios(){
        ResultSet datos=null;
        String sql="SELECT * FROM usuarios";
        try {
            reg=conector.getConexion();
            stm=reg.createStatement();
            datos=stm.executeQuery(sql);
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Que con este error!");
        }
        return datos;
    }
    
    public int BorrarUsuario(int idusuario){
        int renglon=0;
        String sql="DELETE FROM usuarios WHERE iddeusuarios="+idusuario;
        try {
            reg=conector.getConexion();
            if(reg!=null){
            stm=reg.createStatement();
            stm.executeUpdate(sql);
            renglon=1;
            }
        } catch (Exception e) {
        }
        
        return renglon;
    }
    public int CambiosUsuarios(){
        return 1;
    }
    
}

