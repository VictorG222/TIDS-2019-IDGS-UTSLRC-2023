/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package geometria;

/**
 *
 * @author acer
 */
public class AreaGeometrica {
    // declarar una constante en java
    final double PI=3.1416;
    
    //constructor vacio
    public AreaGeometrica(){}
    
    //metodo para calcular el area de un circulo
     public void AreaCirculo(double radio){
         double area;
         area=PI*(radio*radio);
         System.out.println(" El area del circulo es: "+area);
    }
    
    public void AreaCuadrado(int lado){
        int area;
        area=lado*lado;
        System.out.println(" El area del cuadrado es: "+area);
    }
    public void AreaRectangulo(int base,int altura){
        int area;
        if(base==altura){
        System.out.println(" LA FIGURA ES UN CUADRADO");
        System.out.println(" Su area es "+base*altura);
        }else{
        area=base*altura;
        System.out.println(" El area del rectangulo es: "+area);
        }
    }
    public void AreaTriangulo(double base,double altura){
        double area;
        
        area=base*altura;
        area/=2;
        System.out.println(" El area del triangulo es: "+area);
        
    
    
}
}
