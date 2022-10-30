/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaDatos;

/**
 *
 * @author acer
 */
public class ADOProductos {

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
     * @return the Cantidad
     */
    public int getCantidad() {
        return Cantidad;
    }

    /**
     * @param Cantidad the Cantidad to set
     */
    public void setCantidad(int Cantidad) {
        this.Cantidad = Cantidad;
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
        private int Cantidad;
        private String foto;
        private int stock;
        private int stockminimo;
        
        public ADOProductos(){
        }
        
        public ADOProductos(int idproducto,String nombre,String descripcion,String proveedor,int costo,int cantidad,String foto,int stock,int stockminimo){
            setCantidad(cantidad);
            setCosto(costo);
            setDescripcion(descripcion);
            setFoto(foto);
            setIdproducto(idproducto);
            setNombre(nombre);
            setProveedor(proveedor);
            setStock(stock);
            setStockminimo(stockminimo);
        }
            
       
    
    public int AgregarProducto( ADOProductos product){
        return 1;
    }
    
    public int BorrarProducto(){
        return 1;
    }
    public int CambiosProducto(){
        return 1;
    }
      
}
        

