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
public class Cajero {
    String usuario="Victor";
    String password="12345";
    double saldo=20000.0;
    String usuarioName="Victor Galvan";
    
    public Cajero(){
    }
    
    
    public boolean Validar(String user,String password){
        boolean flag=true;
        if((user.equals(this.usuario))&&(password.equals(this.password))){
            flag=true;
        }
        else{
            flag=false;
        }
        return flag;
    }
    
    public double ConsultarSaldo(){
        return this.saldo;
    }
}
