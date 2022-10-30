/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaDatos;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Conexion {
    
    private static Connection conn;
    private static final String driver="com.mysql.cj.jdbc.Driver"; 
    private static final String user="root";
    private static final String password="root"; 
    private static final String url="jdbc:mysql://localhost/ventas2020";
    
    public Conexion(){
    conn=null;
        try {
            Class.forName(driver);
            conn=(Connection)DriverManager.getConnection(url,user,password);
            if(conn!=null){
                System.out.println("Conexion Exitosa");
            }
            
        } catch (ClassNotFoundException | SQLException e) {
            System.out.println("Error de Conexion "+e);
            
        }
}
    public Connection getConexion(){
        return conn;
    }
    public void Desconectar()
    {
        conn=null;
        if(conn==null){
            System.out.println("Conexion terminada.");
        }
    }
}
