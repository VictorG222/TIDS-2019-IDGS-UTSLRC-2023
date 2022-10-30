/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication1;

/**
 *
 * @author acer
 */
public class main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        System.out.println("HELLO WORLD !!!!!1!!!");
        
        //instanciar la clase persona
        persona people=new persona();
        people.nombre="Victor ";
        people.apellido="Galvan ";
        people.edad=19;
        System.out.println(people.nombre + people.apellido + people.edad);
        
         // Hacer llamado a constructor de la clase persona que tiene parametros
        persona Personita1= new persona("Guadalupe","Reyes",20);
        System.out.println(Personita1.nombre+Personita1.apellido+Personita1.edad);
    }
   
}
