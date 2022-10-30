    /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cajeroautomaticova;

import java.util.Scanner;

/**
 *
 * @author acer
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Cajero objc=new Cajero();
        Scanner lector=new Scanner(System.in);
        
        System.out.println(" Propociona tu usario: ");
        String usuario=lector.nextLine();
        System.out.println(" Proporciona tu contraseña: ");
        String pass=lector.nextLine();
       
       boolean flag=objc.Login(usuario, pass);
        
       if(flag){
       objc.MenuDeOpciones();
       }
       else{
       System.out.println("Credenciales Incorrectas.. !!!!");
       }
        
    }
    
}
