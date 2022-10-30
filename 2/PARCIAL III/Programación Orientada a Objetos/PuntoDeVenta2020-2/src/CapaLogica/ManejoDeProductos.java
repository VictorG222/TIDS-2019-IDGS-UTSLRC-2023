/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaLogica;

import CapaDatos.ADOProductos;
import java.sql.ResultSet;

/**
 *
 * @author acer
 */
public class ManejoDeProductos {
    ADOProductos objproducto= new ADOProductos();
    
    
    public int EnviarProducto(String nombre,String descripcion,String proveedor,int costo,int cantidad,String foto,int stock,int stockminimo){
        int bandera=0;
        objproducto.setNombre(nombre);
        objproducto.setDescripcion(descripcion);
        objproducto.setProveedor(proveedor);
        objproducto.setCosto(costo);
        objproducto.setCantidad(cantidad);
        objproducto.setFoto(foto);
        objproducto.setStock(stock);
        objproducto.setStockminimo(stockminimo);
        
        bandera=objproducto.AgregarProducto(objproducto);
        
        return bandera;
    }
      
    public ResultSet TablaProductos(){
        ResultSet tabla= null;
        tabla=objproducto.TablaProductos();
        return tabla;
    }
     public int DarBajaProdcutos(int idproducto){
        int flag=objproducto.BorrarProducto(idproducto);
        return flag;
    }
    public int ActualizarProducto(int idproducto,String nombre,String descripcion,String proveedor,int costo,int cantidad,String foto,int stock,int stockminimo){
        int flag=0;
        objproducto.setIdproducto(idproducto);
        objproducto.setNombre(nombre);
        objproducto.setDescripcion(descripcion);
        objproducto.setProveedor(proveedor);
        objproducto.setCosto(costo);
        objproducto.setCantidad(cantidad);
        objproducto.setFoto(foto);
        objproducto.setStock(stock);
        objproducto.setStockminimo(stockminimo);

        flag=objproducto.CambiosProductos(objproducto);
        return flag;
    }
}
