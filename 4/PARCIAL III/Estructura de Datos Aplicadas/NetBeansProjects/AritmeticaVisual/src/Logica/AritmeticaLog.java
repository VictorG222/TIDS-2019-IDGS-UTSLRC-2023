/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Logica;

/**
 *
 * @author acer
 */
public class AritmeticaLog {
        int num1;
        int num2;
    
    public AritmeticaLog(){
    }
    
    public int Sumar(int num1,int num2){
        int resultado;
        resultado=num1+num2;
        return resultado;
    }
    public int Restar(int num1,int num2){
        int resultado;
        resultado=num1-num2;
        return resultado;
    }
    public int Multiplicar(int num1,int num2){
        int resultado;
        resultado=num1*num2;
        return resultado;
    }
    public int Dividir(int num1,int num2){
        return num1/num2;
        
    }
}

