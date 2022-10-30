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
public class Metodos {
    // aqui van las variables globales o instancias globales
    
    public Metodos(){
    }
    public int Sumar(int num1,int num2){
        int resultado;
        resultado=num1+num2;
        return resultado;
    }
    public double Dividir(double num1,double num2){
            double resultado;
            resultado=num1/num2;
            return resultado;
    }
    public boolean Comparar(int num1,int num2){
        boolean flag=true;
        if(num1>num2){
            flag=true;
        }
        if(num1<num2){
            flag=false;
        }
        return flag;
    }
    public String NombreCompuesto(String nombre,String apellido){
    String nombrec;
    nombrec=nombre+" "+apellido;
    return nombrec;
    }
}
