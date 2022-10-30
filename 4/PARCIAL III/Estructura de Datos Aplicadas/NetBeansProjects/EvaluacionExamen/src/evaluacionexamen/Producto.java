/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package evaluacionexamen;

/**
 *
 * @author acer
 */
public class Producto {
    //ATRIBUTOS
    int codigoProducto;
    String nombreProducto;
    String sizeProducto;
    double precioProducto;
    
    //CONSTRUCTOR VACIO
    public Producto(){
    }
    //CONSTRUCTOR CON PARAMETROS
    public Producto(int codigoProducto,String nombreProducto,String sizeProducto,double precioProducto){
    this.codigoProducto=codigoProducto;
    this.nombreProducto=nombreProducto;
    this.sizeProducto=sizeProducto;
    this.precioProducto=precioProducto;
    }
    //METODOS
    //hacer que imprima todos los atributos del producto creado
    public void ImprimirProducto(){
    System.out.println(codigoProducto+" "+nombreProducto+" "+sizeProducto+" "+precioProducto+" ");
    }
    public void ComprarProducto(int cantidad){
        double costoTotal;
        costoTotal=cantidad*precioProducto;
        // dada la cantidad del producto a comprar multiplicar por su precio y mostrar en consola el costo total
        System.out.println("$"+costoTotal);
    }  
}
