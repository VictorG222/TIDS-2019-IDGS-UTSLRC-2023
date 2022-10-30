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
public class Cars {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    
    //vamos a crear un objeto de la clase automovil
    
    automovil bochito=new automovil();
    bochito.modelo="Beetle";
    bochito.marca="VW";
    bochito.color="Azul";
    bochito.year=2001;
    bochito.cajuela=true;
    
    System.out.println(bochito.modelo+" "+bochito.marca+" "+bochito.color+" "+bochito.year+" "+bochito.cajuela);
    
    bochito.prender(true);
    }
    
}
