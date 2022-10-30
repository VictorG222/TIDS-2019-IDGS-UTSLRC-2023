/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aritmetica2;

 /**
 *
 * @author acer
 */
public class Aritmetica2 {
       int num1;
       int num2;

public Aritmetica2(){}

public Aritmetica2(int num1,int num2){
this.num1=num1;
this.num2=num2;
}
        
public void Sumar(){
int resultado;
resultado=num1+num2;
System.out.println(" El resultado de la suma es: "+resultado);
}
public void Restar(){
int resultado;
resultado=num1-num2;
System.out.println(" El resultado de la resta es: "+resultado);
}
public void Multiplicar(){
int resultado;
resultado=num1*num2;
System.out.println(" El resultado de la multiplicacion es: "+resultado);
}
public void Dividir(){
double resultado;
resultado=num1/num2;
System.out.println(" El resultado de la division es: "+resultado);
}
}
