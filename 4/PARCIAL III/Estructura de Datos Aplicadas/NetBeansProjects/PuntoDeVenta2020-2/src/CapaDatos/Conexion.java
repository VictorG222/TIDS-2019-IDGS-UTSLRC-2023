/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaDatos;

import com.mysql.jdbc.Driver;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
/**
 *
 * @author acer
 */
public class Conexion {
    private static Connection conn;
    private static final String driver="com.mysql.jdbc.Driver";
    private static final String user="root";
    private static final String password="root";
    private static final String url="jdbc:mysql://localhost/ventas2020?useTimezone=true&serverTimezone=UTC";
    
    public Conexion(){
    conn=null;
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            conn=(Connection)DriverManager.getConnection(url, user, password);
            if(conn!=null){
                System.out.println("Conexion exitosa!");
            }
        } catch (ClassNotFoundException | SQLException e) {
            System.out.println("Error de conexion: "+e);
        }
    }
        public Connection getConexion(){
         return conn;   
        }
        public void Desconectar (){
            conn=null;
            if(conn==null){
                    System.out.println("Conexion terminada!");
            }
        }
        //?useTimezone=true&serverTimezone=UTC
}

