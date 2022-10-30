/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package evaluacionpractica;

/**
 *
 * @author acer
 */
public class Empleado {
   // CARACTERISTICAS Y ATRIBUTOS
    String codigo;
    String nombre;
    String genero;
    String puesto;
    
    // CONSTRUCTOR VACIO
    public Empleado(){}
    
    // CONSTRUCTOR CON PARAMETROS
    public Empleado(String codigo,String nombre,String genero,String puesto){
    this.codigo=codigo;
    this.nombre=nombre;
    this.genero=genero;
    this.puesto=puesto;
           
    }   
}

