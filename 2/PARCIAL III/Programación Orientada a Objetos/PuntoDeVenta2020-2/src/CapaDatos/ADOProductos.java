/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaDatos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author acer
 */
public class ADOProductos {
        Conexion conector=new Conexion();
        private Statement stm=null;
        private PreparedStatement pstm=null;
        private ResultSet rs=null;
        private Connection reg=null;
    /**
     * @return the idproducto
     */
    public int getIdproducto() {
        return idproducto;
    }

    /**
     * @param idproducto the idproducto to set
     */
    public void setIdproducto(int idproducto) {
        this.idproducto = idproducto;
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
     * @return the descripcion
     */
    public String getDescripcion() {
        return descripcion;
    }

    /**
     * @param descripcion the descripcion to set
     */
    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    /**
     * @return the proveedor
     */
    public String getProveedor() {
        return proveedor;
    }

    /**
     * @param proveedor the proveedor to set
     */
    public void setProveedor(String proveedor) {
        this.proveedor = proveedor;
    }

    /**
     * @return the costo
     */
    public int getCosto() {
        return costo;
    }

    /**
     * @param costo the costo to set
     */
    public void setCosto(int costo) {
        this.costo = costo;
    }

    /**
     * @return the cantidad
     */
    public int getCantidad() {
        return cantidad;
    }

    /**
     * @param cantidad the cantidad to set
     */
    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
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

    /**
     * @return the stock
     */
    public int getStock() {
        return stock;
    }

    /**
     * @param stock the stock to set
     */
    public void setStock(int stock) {
        this.stock = stock;
    }

    /**
     * @return the stockminimo
     */
    public int getStockminimo() {
        return stockminimo;
    }

    /**
     * @param stockminimo the stockminimo to set
     */
    public void setStockminimo(int stockminimo) {
        this.stockminimo = stockminimo;
    }
    private int idproducto;
    private String nombre;
    private String descripcion;
    private String proveedor;
    private int costo;
    private int cantidad;
    private String foto;
    private int stock;
    private int stockminimo;
    
    
    public ADOProductos(){
        
    }
    
    public ADOProductos(int idproducto,String nombre,String descripcion,String proveedor,int costo, int cantidad,String foto, int stock, int stockminimo){
        
        this.setIdproducto(idproducto);
        this.setNombre(nombre);
        this.setDescripcion(descripcion);
        this.setProveedor(proveedor);
        this.setCosto(costo);
        this.setCantidad(cantidad);
        this.setFoto(foto);
        this.setStock(stock);
        this.setStockminimo(stockminimo);
        
    }
    public int AgregarProducto(ADOProductos producto){
        int renglon=0;
        String sql="Insert into productos(nombre,descripcion,proveedor,costo,cantidad,foto,stock,stockminimo)" 
                +"values('"+producto.getNombre()+"','"+producto.getDescripcion()+"','"+producto.getProveedor()+"','"+producto.getCosto()+"','"+producto.getCantidad()+"','"+producto.getFoto()+"','"+producto.getStock()+"','"+producto.getStockminimo()+"')";
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
    
    public ResultSet TablaProductos(){
        ResultSet datos=null;
        String sql="Select * From productos";
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
    public int BorrarProducto(int idproducto){
        int renglon= 0;
        String sql= "Delete From productos where idproducto="+idproducto;
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
     public int CambiosProductos(ADOProductos producto){
        int flag=0;
        String idusuario=String.valueOf(producto.getIdproducto());
        
        String sql="UPDATE productos set nombre=?,descripcion=?,proveedor=?,costo=?,cantidad=?,foto=?,stock=?,stockminimo=? where idproducto=?";
        try {
            reg=conector.getConexion();
            pstm=reg.prepareStatement(sql);
            pstm.setString(1,producto.getNombre());
            pstm.setString(2,producto.getDescripcion());
            pstm.setString(3,producto.getProveedor());
            pstm.setInt(4,producto.getCosto());
            pstm.setInt(5,producto.getCantidad());
            pstm.setString(6,producto.getFoto());
            pstm.setInt(7,producto.getStock());
            pstm.setInt(8,producto.getStockminimo());
            pstm.setInt(9,idproducto);
            
            flag=pstm.executeUpdate();
            
            
            
            
        } catch (SQLException ex) {
            System.out.println(ex);
            System.out.println("Error");
        }
        
        return flag;
    }
        
}
