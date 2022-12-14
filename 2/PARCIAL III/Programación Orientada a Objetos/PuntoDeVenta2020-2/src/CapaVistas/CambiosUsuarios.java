/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaVistas;

import CapaLogica.ManejoDeUsuarios;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author acer
 */
public class CambiosUsuarios extends javax.swing.JInternalFrame {

    ManejoDeUsuarios objm= new ManejoDeUsuarios();
     String path=null;
    public CambiosUsuarios() {
        initComponents();
        MostrarTablaUsuarios();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jtxtidusuario = new javax.swing.JTextField();
        jtxtnombre = new javax.swing.JTextField();
        jtxtapellidos = new javax.swing.JTextField();
        jtxtpassword = new javax.swing.JTextField();
        jtxtemail = new javax.swing.JTextField();
        jtxtgenero = new javax.swing.JTextField();
        jtxtdomicilio = new javax.swing.JTextField();
        jtxttelefono = new javax.swing.JTextField();
        jtxttipodeusuario = new javax.swing.JTextField();
        jtxtfoto = new javax.swing.JTextField();
        jbtactualizar = new javax.swing.JButton();
        jbtnrefresh = new javax.swing.JButton();
        jbtncancelar = new javax.swing.JButton();
        jPanel2 = new javax.swing.JPanel();
        jScrollPane1 = new javax.swing.JScrollPane();
        jtusuarios = new javax.swing.JTable();

        setClosable(true);
        setTitle("CAMBIOS USUARIOS");

        jPanel1.setBackground(new java.awt.Color(0, 153, 153));

        jbtactualizar.setText("ACTUALIZAR");
        jbtactualizar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtactualizarActionPerformed(evt);
            }
        });

        jbtnrefresh.setText("ACTUALIZAR TABLA");
        jbtnrefresh.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnrefreshActionPerformed(evt);
            }
        });

        jbtncancelar.setText("CANCELAR");
        jbtncancelar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtncancelarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jtxtidusuario, javax.swing.GroupLayout.PREFERRED_SIZE, 121, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtnombre, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtapellidos, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtpassword, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtemail, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtgenero, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtdomicilio, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxttelefono, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxttipodeusuario, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtfoto, javax.swing.GroupLayout.PREFERRED_SIZE, 420, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 91, Short.MAX_VALUE)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jbtactualizar, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jbtnrefresh, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jbtncancelar, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addGap(317, 317, 317))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jtxtidusuario, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jbtactualizar, javax.swing.GroupLayout.PREFERRED_SIZE, 51, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jtxtnombre, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jtxtapellidos, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jtxtpassword, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(3, 3, 3)
                        .addComponent(jbtnrefresh, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jtxtemail, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jtxtgenero, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jtxtdomicilio, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(3, 3, 3)
                        .addComponent(jbtncancelar, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jtxttelefono, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jtxttipodeusuario, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jtxtfoto, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(51, Short.MAX_VALUE))
        );

        jPanel2.setBackground(new java.awt.Color(0, 153, 153));

        jtusuarios.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null},
                {null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4"
            }
        ));
        jtusuarios.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jtusuariosMouseClicked(evt);
            }
        });
        jScrollPane1.setViewportView(jtusuarios);

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 679, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, Short.MAX_VALUE))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jbtactualizarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtactualizarActionPerformed
        int idusuario=Integer.parseInt(jtxtidusuario.getText());
        String nombre=jtxtnombre.getText();
        String apellidos=jtxtapellidos.getText();
        String password=jtxtpassword.getText();
        String correo=jtxtemail.getText();
        String genero=jtxtgenero.getText();
        String domicilio=jtxtdomicilio.getText();
        String telefono=jtxttelefono.getText();
        String tipodeusuario=jtxttipodeusuario.getText();
        String foto=jtxtfoto.getText();
        int flag=objm.ActualizarUsuario(idusuario, nombre, apellidos, password, correo, genero, domicilio, telefono, tipodeusuario, foto);
        if(flag==1){
            JOptionPane.showMessageDialog(null,"Datos actualizados correctamente.!!!");
        }
        if(flag==0){
            JOptionPane.showMessageDialog(null,"Datos NO actualizados !!!"); 
        }
    }//GEN-LAST:event_jbtactualizarActionPerformed

    private void jtusuariosMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jtusuariosMouseClicked
        int seleccionar=jtusuarios.rowAtPoint(evt.getPoint());
        jtxtidusuario.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 0)));
        jtxtnombre.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 1)));
        jtxtapellidos.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 2)));
        jtxtpassword.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 3)));
        jtxtemail.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 4)));
        jtxtgenero.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 5)));
        jtxttelefono.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 6)));
        jtxtdomicilio.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 7)));
        jtxttipodeusuario.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 8)));
        jtxtfoto.setText(String.valueOf(jtusuarios.getValueAt(seleccionar, 9)));
    }//GEN-LAST:event_jtusuariosMouseClicked

    private void jbtnrefreshActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnrefreshActionPerformed
        MostrarTablaUsuarios();
    }//GEN-LAST:event_jbtnrefreshActionPerformed

    private void jbtncancelarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtncancelarActionPerformed
        this.dispose();
    }//GEN-LAST:event_jbtncancelarActionPerformed
    public void MostrarTablaUsuarios(){
            DefaultTableModel modelo= new DefaultTableModel();
            ResultSet rs=objm.TablaUsuarios();
            String[] columnas={"IdUsuarios","Nombre","Apellidos","Password","Email","Genero","Telefono",
                "Domicilio","TipoDeUsuario","Foto"};
            modelo.setColumnIdentifiers(columnas);
            
            try {
               
                while(rs.next()){
                    modelo.addRow(new Object[]{rs.getString("idusuario"),rs.getString("nombre"),rs.getString("apellido"),rs.getString("password"),rs.getString("email"),rs.getString("genero"),rs.getString("telefono"),
                        rs.getString("domicilio"),rs.getString("tipodeusuario"),rs.getString("foto")
                    });
                }
                jtusuarios.setModel(modelo);
            } catch (SQLException e) {
            }
            
            }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JButton jbtactualizar;
    private javax.swing.JButton jbtncancelar;
    private javax.swing.JButton jbtnrefresh;
    private javax.swing.JTable jtusuarios;
    private javax.swing.JTextField jtxtapellidos;
    private javax.swing.JTextField jtxtdomicilio;
    private javax.swing.JTextField jtxtemail;
    private javax.swing.JTextField jtxtfoto;
    private javax.swing.JTextField jtxtgenero;
    private javax.swing.JTextField jtxtidusuario;
    private javax.swing.JTextField jtxtnombre;
    private javax.swing.JTextField jtxtpassword;
    private javax.swing.JTextField jtxttelefono;
    private javax.swing.JTextField jtxttipodeusuario;
    // End of variables declaration//GEN-END:variables
}
