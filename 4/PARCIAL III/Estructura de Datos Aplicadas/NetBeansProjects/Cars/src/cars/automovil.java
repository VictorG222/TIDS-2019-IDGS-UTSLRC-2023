/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cars;

/**
 *
 * @author acer
 */
public class automovil {
    
    String modelo;
    String marca;
    String color;
    int year;
    boolean cajuela;
    
    //definir el constructor vacio
    public automovil(){}
    
    //deninir constructor con parametros
    public automovil (String modelo,String marca,String color,int year,boolean cajuela){
    this.modelo=modelo;
    this.marca=marca;
    this.color=color;
    this.year=year;
    this.cajuela=cajuela;
    
    }
    public void prender (boolean key){
    if(key=true){
    System.out.println("Ya encendi con todo. !!!!!!!!!!");
    }
    
    }
    
}
