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
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    
    //METODO MOSTRAR EMPLEADO    
    Empleado MostrarEmpleado= new Empleado("ABC8521","Victor","Hombre","TI");
    
    //IMPRIMIR ATRIBUTOS
    System.out.println(MostrarEmpleado.codigo+" "+MostrarEmpleado.nombre+" "+MostrarEmpleado.genero+" "+MostrarEmpleado.puesto);
      
   
        
    }
    
}
