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
public class Cajero {
    // definir las variables globales
    Scanner Lector=new Scanner(System.in);
    String usuario="Victor";
    String password="12345";
    int no_cuenta=78523;
    double saldo=20000;
    
    // constructores
    public Cajero(){
    }
    public boolean Login(String user,String pass){
        boolean flag=true;
        if((user.equals(this.usuario))&&(pass.equals(this.password))){
        flag=true;
        }
        else{
            flag=false;}
        return flag;
    }
    public void MenuDeOpciones(){
        
        int opcion=0;
        System.out.println(" BIENVENIDO ");
        System.out.println("Proporciona una opcion");
        System.out.println("1.-Consultar tu saldo: ");
        System.out.println("2.-Retirar dinero: ");
        System.out.println("3.-Depositar dinero ");
        System.out.println("4.-Salir ");
        opcion=Lector.nextInt();
        
        Do()while();
        switch(opcion){
            case 1:
                ConsultarSaldo();
                break;
                
            case 2:
                Retirar();
                break;
            case 3:
                Depositar();
                break;
            case 4:
                break;}
    }

    public void ConsultarSaldo() {
       System.out.println(" Su saldo al dia de hoy es: "+this.saldo);
       
    }
    public void Retirar() {
        System.out.println(" Su saldo al dia de hoy es: "+this.saldo);
        System.out.println(" Proporcia la cantidad a retirar: ");
        double cantidad=Lector.nextDouble();
        if(cantidad<this.saldo){
        this.saldo-=Lector.nextDouble();
        }else{
        System.out.println(" Favor de ingresar una cantidad menor a su saldo!!!!!");
        }
        
        System.out.println(" Su saldo al dia de hoy es: "+this.saldo);
        
    }
    public void Depositar() {
        System.out.println(" Su saldo al dia de hoy es: "+this.saldo);
        System.out.println(" Proporcia la cantidad a depositar: ");
        double deposito=Lector.nextDouble();
        this.saldo+=Lector.nextDouble();
        
        System.out.println(" Su saldo al dia de hoy es: "+this.saldo);
    }  

    private void Do() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
