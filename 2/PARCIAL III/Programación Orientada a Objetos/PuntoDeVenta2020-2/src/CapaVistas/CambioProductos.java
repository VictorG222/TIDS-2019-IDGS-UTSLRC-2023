/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaVistas;

import CapaLogica.ManejoDeProductos;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author acer
 */
public class CambioProductos extends javax.swing.JInternalFrame {
    ManejoDeProductos objm= new ManejoDeProductos();
    String path=null;
    /**
     * Creates new form CambioProductos
     */
    public CambioProductos() {
        initComponents();
        MostrarTablaProductos();
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
        jtxtidproducto = new javax.swing.JTextField();
        jtxtnombre = new javax.swing.JTextField();
        jtxtdescripcion = new javax.swing.JTextField();
        jtxtproveedor = new javax.swing.JTextField();
        jtxtcosto = new javax.swing.JTextField();
        jtxtcantidad = new javax.swing.JTextField();
        jtxtfoto = new javax.swing.JTextField();
        jtxtstock = new javax.swing.JTextField();
        jtxtstockminimo = new javax.swing.JTextField();
        jbtactualizar = new javax.swing.JButton();
        jbtnrefresh = new javax.swing.JButton();
        jbtncancelar = new javax.swing.JButton();
        jScrollPane4 = new javax.swing.JScrollPane();
        jtproductos = new javax.swing.JTable();

        setClosable(true);
        setTitle("CAMBIO PRODUCTOS");

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
                    .addComponent(jtxtidproducto, javax.swing.GroupLayout.PREFERRED_SIZE, 121, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtnombre, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtdescripcion, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtproveedor, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtcosto, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtcantidad, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtfoto, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtstock, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jtxtstockminimo, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 141, Short.MAX_VALUE)
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
                    .addComponent(jtxtidproducto, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jbtactualizar, javax.swing.GroupLayout.PREFERRED_SIZE, 51, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jtxtnombre, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jtxtdescripcion, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jtxtproveedor, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(3, 3, 3)
                        .addComponent(jbtnrefresh, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jtxtcosto, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jtxtcantidad, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jtxtfoto, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(3, 3, 3)
                        .addComponent(jbtncancelar, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jtxtstock, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jtxtstockminimo, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(85, Short.MAX_VALUE))
        );

        jtproductos.setModel(new javax.swing.table.DefaultTableModel(
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
        jtproductos.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jtproductosMouseClicked(evt);
            }
        });
        jScrollPane4.setViewportView(jtproductos);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane4, javax.swing.GroupLayout.DEFAULT_SIZE, 893, Short.MAX_VALUE)
                .addContainerGap())
            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(layout.createSequentialGroup()
                    .addContainerGap()
                    .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addContainerGap()))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(439, Short.MAX_VALUE)
                .addComponent(jScrollPane4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(layout.createSequentialGroup()
                    .addContainerGap()
                    .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addContainerGap(437, Short.MAX_VALUE)))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jbtactualizarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtactualizarActionPerformed
        int idproducto=Integer.parseInt(jtxtidproducto.getText());
        String nombre=jtxtnombre.getText();
        String descripcion=jtxtdescripcion.getText();
        String proveedor=jtxtproveedor.getText();
        int costo=Integer.parseInt(jtxtcosto.getText());
        int cantidad=Integer.parseInt(jtxtcantidad.getText());
        String foto=jtxtfoto.getText();
        int stock=Integer.parseInt(jtxtstock.getText());
        int stockminimo=Integer.parseInt(jtxtstockminimo.getText());
        int flag=objm.ActualizarProducto(idproducto, nombre, descripcion, proveedor, costo, cantidad, foto, stock, stockminimo);
        if(flag==1){
            JOptionPane.showMessageDialog(null,"Datos actualizados.");
        }
        if(flag==0){
            JOptionPane.showMessageDialog(null,"Datos no actualizados.");
        }
    }//GEN-LAST:event_jbtactualizarActionPerformed

    private void jbtnrefreshActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnrefreshActionPerformed
        MostrarTablaProductos();
    }//GEN-LAST:event_jbtnrefreshActionPerformed

    private void jbtncancelarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtncancelarActionPerformed
        this.dispose();
    }//GEN-LAST:event_jbtncancelarActionPerformed

    private void jtproductosMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jtproductosMouseClicked
        int seleccionar=jtproductos.rowAtPoint(evt.getPoint());
        jtxtidproducto.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 0)));
        jtxtnombre.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 1)));
        jtxtdescripcion.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 2)));
        jtxtproveedor.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 3)));
        jtxtcosto.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 4)));
        jtxtcantidad.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 5)));
        jtxtfoto.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 6)));
        jtxtstock.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 7)));
        jtxtstockminimo.setText(String.valueOf(jtproductos.getValueAt(seleccionar, 8)));
    }//GEN-LAST:event_jtproductosMouseClicked
        public void MostrarTablaProductos(){
            DefaultTableModel modelo= new DefaultTableModel();
            ResultSet rs=objm.TablaProductos();
            String[] columnas={"IdUsuarios","Nombre","Descripcion","Proveedor","Costo","Cantidad","Genero",
                "Stock","Stock Minimo"};
            modelo.setColumnIdentifiers(columnas);
            
            try {
                
                while(rs.next()){
                    modelo.addRow(new Object[]{rs.getString("idproducto"),rs.getString("nombre"),rs.getString("descripcion"),rs.getString("proveedor"),rs.getString("costo"),rs.getString("cantidad"),rs.getString("foto"),
                        rs.getString("stock"),rs.getString("stockminimo")
                    });
                }
                jtproductos.setModel(modelo);
            } catch (SQLException e) {
            }
            
            }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JPanel jPanel1;
    private javax.swing.JScrollPane jScrollPane4;
    private javax.swing.JButton jbtactualizar;
    private javax.swing.JButton jbtncancelar;
    private javax.swing.JButton jbtnrefresh;
    private javax.swing.JTable jtproductos;
    private javax.swing.JTextField jtxtcantidad;
    private javax.swing.JTextField jtxtcosto;
    private javax.swing.JTextField jtxtdescripcion;
    private javax.swing.JTextField jtxtfoto;
    private javax.swing.JTextField jtxtidproducto;
    private javax.swing.JTextField jtxtnombre;
    private javax.swing.JTextField jtxtproveedor;
    private javax.swing.JTextField jtxtstock;
    private javax.swing.JTextField jtxtstockminimo;
    // End of variables declaration//GEN-END:variables
}
