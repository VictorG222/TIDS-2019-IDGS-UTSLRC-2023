/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package CapaVistas;

import javax.swing.JFrame;

/**
 *
 * @author acer
 */
public class MenuPrincipal extends javax.swing.JFrame {

    /**
     * Creates new form MenuPrincipal
     */
    public MenuPrincipal() {
        initComponents();
        this.setLocationRelativeTo(null);
        this.setExtendedState(JFrame.MAXIMIZED_BOTH);
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jdp1 = new javax.swing.JDesktopPane();
        jMenuBar1 = new javax.swing.JMenuBar();
        jmusuarios = new javax.swing.JMenu();
        jmiAltasUsuarios = new javax.swing.JMenuItem();
        jmiBajasUsuarios = new javax.swing.JMenuItem();
        jmiCambiosUsuarios = new javax.swing.JMenuItem();
        jMenu2 = new javax.swing.JMenu();
        jmiAltasProductos = new javax.swing.JMenuItem();
        jmiBajasProductos = new javax.swing.JMenuItem();
        jmiCambiosProductos = new javax.swing.JMenuItem();
        jMenu1 = new javax.swing.JMenu();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("MENU DEL ADMINISTRADOR");

        jdp1.setBackground(new java.awt.Color(0, 153, 153));

        javax.swing.GroupLayout jdp1Layout = new javax.swing.GroupLayout(jdp1);
        jdp1.setLayout(jdp1Layout);
        jdp1Layout.setHorizontalGroup(
            jdp1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 1023, Short.MAX_VALUE)
        );
        jdp1Layout.setVerticalGroup(
            jdp1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 688, Short.MAX_VALUE)
        );

        jmusuarios.setText("USUARIOS");

        jmiAltasUsuarios.setText("ALTAS");
        jmiAltasUsuarios.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jmiAltasUsuariosActionPerformed(evt);
            }
        });
        jmusuarios.add(jmiAltasUsuarios);

        jmiBajasUsuarios.setText("BAJAS");
        jmiBajasUsuarios.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jmiBajasUsuariosActionPerformed(evt);
            }
        });
        jmusuarios.add(jmiBajasUsuarios);

        jmiCambiosUsuarios.setText("CAMBIOS");
        jmiCambiosUsuarios.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jmiCambiosUsuariosActionPerformed(evt);
            }
        });
        jmusuarios.add(jmiCambiosUsuarios);

        jMenuBar1.add(jmusuarios);

        jMenu2.setText("PRODUCTOS");

        jmiAltasProductos.setText("ALTAS");
        jmiAltasProductos.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jmiAltasProductosActionPerformed(evt);
            }
        });
        jMenu2.add(jmiAltasProductos);

        jmiBajasProductos.setText("BAJAS");
        jmiBajasProductos.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jmiBajasProductosActionPerformed(evt);
            }
        });
        jMenu2.add(jmiBajasProductos);

        jmiCambiosProductos.setText("CAMBIOS");
        jmiCambiosProductos.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jmiCambiosProductosActionPerformed(evt);
            }
        });
        jMenu2.add(jmiCambiosProductos);

        jMenuBar1.add(jMenu2);

        jMenu1.setText("REPORTES");
        jMenuBar1.add(jMenu1);

        setJMenuBar(jMenuBar1);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jdp1)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jdp1)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jmiAltasUsuariosActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jmiAltasUsuariosActionPerformed
       
        AltasUsuarios objAltas = new AltasUsuarios();
        jdp1.add(objAltas);
       objAltas.setVisible(true);
        
    }//GEN-LAST:event_jmiAltasUsuariosActionPerformed

    private void jmiBajasUsuariosActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jmiBajasUsuariosActionPerformed
        
        BajasUsuarios objbajas= new BajasUsuarios();
        jdp1.add(objbajas);
        objbajas.setVisible(true);
    }//GEN-LAST:event_jmiBajasUsuariosActionPerformed

    private void jmiCambiosUsuariosActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jmiCambiosUsuariosActionPerformed
        
        CambiosUsuarios objcambios= new CambiosUsuarios();
        jdp1.add(objcambios);
        objcambios.setVisible(true);
    }//GEN-LAST:event_jmiCambiosUsuariosActionPerformed

    private void jmiAltasProductosActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jmiAltasProductosActionPerformed
        AltasProductos objaltas= new AltasProductos();
        jdp1.add(objaltas);
        objaltas.setVisible(true);
    }//GEN-LAST:event_jmiAltasProductosActionPerformed

    private void jmiBajasProductosActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jmiBajasProductosActionPerformed
        BajasProductos objbajas= new BajasProductos();
        jdp1.add(objbajas);
        objbajas.setVisible(true);
    }//GEN-LAST:event_jmiBajasProductosActionPerformed

    private void jmiCambiosProductosActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jmiCambiosProductosActionPerformed
        CambioProductos objcambios= new CambioProductos();
        jdp1.add(objcambios);
        objcambios.setVisible(true);
    }//GEN-LAST:event_jmiCambiosProductosActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(MenuPrincipal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(MenuPrincipal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(MenuPrincipal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(MenuPrincipal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new MenuPrincipal().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JMenu jMenu1;
    private javax.swing.JMenu jMenu2;
    private javax.swing.JMenuBar jMenuBar1;
    private javax.swing.JDesktopPane jdp1;
    private javax.swing.JMenuItem jmiAltasProductos;
    private javax.swing.JMenuItem jmiAltasUsuarios;
    private javax.swing.JMenuItem jmiBajasProductos;
    private javax.swing.JMenuItem jmiBajasUsuarios;
    private javax.swing.JMenuItem jmiCambiosProductos;
    private javax.swing.JMenuItem jmiCambiosUsuarios;
    private javax.swing.JMenu jmusuarios;
    // End of variables declaration//GEN-END:variables
}
