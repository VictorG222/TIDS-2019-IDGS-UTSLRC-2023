/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package manejodemetodos;

/**
 *
 * @author acer
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Metodos obj= new Metodos();
        int result; 
        result=obj.Sumar(5, 5);
        System.out.println(" La suma es: "+result);
        
        double r;
        r=obj.Dividir(5, 5);
        System.out.println(" La divicion es: "+r);
        
        boolean resultado;
        resultado=obj.Comparar(10, 5);
        System.out.println(" El resultado es: "+resultado);
        
        String  nom;
        nom=obj.NombreCompuesto("Victor", "Galvan");
        System.out.println("Su nmbre completo es: "+nom);
    }
    
}
