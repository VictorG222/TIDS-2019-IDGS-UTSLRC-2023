/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author acer
 */
public class Main extends javax.swing.JFrame {

   
    
    public Main() {
        initComponents();
        setLocationRelativeTo(null);
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jlblNombre = new javax.swing.JLabel();
        jlblCiudad = new javax.swing.JLabel();
        jbtnOcultarNombre = new javax.swing.JButton();
        jbtnVisuCiudad = new javax.swing.JButton();
        jbtnOcultarCiudad = new javax.swing.JButton();
        jbtnVisuNombre = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Practica_1_del_Parcial_2");

        jlblNombre.setText("VICTOR MANUEL GALVAN COVARRUBIAS");

        jlblCiudad.setText("SAN LUIS RIO COLORADO");

        jbtnOcultarNombre.setText("Ocultar Nombre");
        jbtnOcultarNombre.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnOcultarNombreActionPerformed(evt);
            }
        });

        jbtnVisuCiudad.setText("Visualizar Ciudad");
        jbtnVisuCiudad.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnVisuCiudadActionPerformed(evt);
            }
        });

        jbtnOcultarCiudad.setText("Ocultar Ciudad");
        jbtnOcultarCiudad.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnOcultarCiudadActionPerformed(evt);
            }
        });

        jbtnVisuNombre.setText("Visualizar Nombre");
        jbtnVisuNombre.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnVisuNombreActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(97, 97, 97)
                        .addComponent(jlblNombre))
                    .addGroup(layout.createSequentialGroup()
                        .addGap(138, 138, 138)
                        .addComponent(jlblCiudad)))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addContainerGap(49, Short.MAX_VALUE)
                        .addComponent(jbtnOcultarNombre)
                        .addGap(94, 94, 94))
                    .addGroup(layout.createSequentialGroup()
                        .addGap(53, 53, 53)
                        .addComponent(jbtnOcultarCiudad)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jbtnVisuCiudad)
                    .addComponent(jbtnVisuNombre))
                .addGap(39, 39, 39))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(20, 20, 20)
                .addComponent(jlblNombre)
                .addGap(18, 18, 18)
                .addComponent(jlblCiudad)
                .addGap(53, 53, 53)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jbtnOcultarNombre)
                    .addComponent(jbtnVisuNombre))
                .addGap(82, 82, 82)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jbtnOcultarCiudad)
                    .addComponent(jbtnVisuCiudad))
                .addContainerGap(47, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jbtnVisuCiudadActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnVisuCiudadActionPerformed
        jlblCiudad.setVisible(true);
    }//GEN-LAST:event_jbtnVisuCiudadActionPerformed

    private void jbtnOcultarNombreActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnOcultarNombreActionPerformed
        jlblNombre.setVisible(false);
    }//GEN-LAST:event_jbtnOcultarNombreActionPerformed

    private void jbtnVisuNombreActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnVisuNombreActionPerformed
        jlblNombre.setVisible(true);
    }//GEN-LAST:event_jbtnVisuNombreActionPerformed

    private void jbtnOcultarCiudadActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnOcultarCiudadActionPerformed
        jlblCiudad.setVisible(false);
    }//GEN-LAST:event_jbtnOcultarCiudadActionPerformed

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
            java.util.logging.Logger.getLogger(Main.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Main.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Main.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Main.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Main().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jbtnOcultarCiudad;
    private javax.swing.JButton jbtnOcultarNombre;
    private javax.swing.JButton jbtnVisuCiudad;
    private javax.swing.JButton jbtnVisuNombre;
    private javax.swing.JLabel jlblCiudad;
    private javax.swing.JLabel jlblNombre;
    // End of variables declaration//GEN-END:variables
}
