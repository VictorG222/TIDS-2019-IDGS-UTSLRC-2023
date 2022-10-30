/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package geometria;

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
    
    AreaGeometrica circulo= new AreaGeometrica();
    Scanner lector= new Scanner(System.in);
    double radio;
    
    System.out.println(" Vamos a calcular el area de un circulo: ");
    System.out.println(" Proporciona el radio del circulo: ");
    radio=lector.nextDouble();
    
    circulo.AreaCirculo(radio);
    
    AreaGeometrica cuadrado= new AreaGeometrica();
    int lado;    
    System.out.println(" Vamos a calcular el area de un cuadrado: ");
    System.out.println(" Proporciona el lado del cuadrado: ");
    lado=lector.nextInt();
    cuadrado.AreaCuadrado(lado);
    
    AreaGeometrica rectangulo= new AreaGeometrica();
    int base;
    int altura;
    System.out.println(" Vamos a calcular el area de un rectangulo: ");
    System.out.println(" Proporciona la base del cuadrado: ");
    base=lector.nextInt();
    System.out.println(" Proporciona la altura del rectangulo: ");
    altura=lector.nextInt();
    rectangulo.AreaRectangulo(base, altura);
    
    //AGREGAR EL AREA DE UN TRIANGULO
    
    AreaGeometrica triangulo= new AreaGeometrica();
    double baseTriangulp;
    double alturaTriangulo;
    System.out.println(" Vamos a calcular el area de un triangulo: ");
    System.out.println(" Proporciona la base del triangulo: ");
    base=lector.nextInt();
    System.out.println(" Proporciona la altura del triangulo: ");
    altura=lector.nextInt();
    triangulo.AreaTriangulo(base,altura );
    
    }
    
    
}
