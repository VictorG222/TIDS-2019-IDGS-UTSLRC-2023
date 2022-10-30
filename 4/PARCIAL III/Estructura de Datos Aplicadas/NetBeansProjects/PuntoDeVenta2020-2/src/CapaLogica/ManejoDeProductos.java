/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaLogica;

import CapaDatos.ADOProductos;
/**
 *
 * @author acer
 */
public class ManejoDeProductos {
    ADOProductos objproducto= new ADOProductos();
    
   
    public int EnviarProducto(String nombre,String descripcion,String proveedor,String costo, String cantidad, String stockMinimo, String foto){
       int flag=0;
       objproducto.setNombre(nombre);
       objproducto.setDescripcion(descripcion);
       objproducto.setProveedor(proveedor);
       objproducto.setCosto(Integer.parseInt(costo));
       objproducto.setCantidad(Integer.parseInt(cantidad));
       objproducto.setStockminimo(Integer.parseInt(stockMinimo));
       objproducto.setFoto(foto);
    
     
        
       flag=objproducto.AgregarProducto(objproducto);
       return flag;
    } 
}
