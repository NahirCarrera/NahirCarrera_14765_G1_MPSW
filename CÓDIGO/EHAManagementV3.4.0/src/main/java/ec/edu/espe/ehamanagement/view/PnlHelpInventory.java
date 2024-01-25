package ec.edu.espe.ehamanagement.view;

/**
 *
 * @author Jairo Bonilla, Gaman GeekLords, DCCO-ESPE
 */
public class PnlHelpInventory extends javax.swing.JPanel {

    public PnlHelpInventory() {
        initComponents();
        
    }
    
   

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        btnGrupProducts = new javax.swing.ButtonGroup();
        btnGroupSearch = new javax.swing.ButtonGroup();
        pnlContent = new javax.swing.JPanel();
        lblTableTitle = new javax.swing.JLabel();
        lblContent = new javax.swing.JLabel();
        lblContent1 = new javax.swing.JLabel();
        jScrollPane2 = new javax.swing.JScrollPane();
        jTextArea1 = new javax.swing.JTextArea();
        jScrollPane3 = new javax.swing.JScrollPane();
        jTextArea2 = new javax.swing.JTextArea();
        lblContent2 = new javax.swing.JLabel();
        jScrollPane4 = new javax.swing.JScrollPane();
        jTextArea3 = new javax.swing.JTextArea();
        lblContent3 = new javax.swing.JLabel();
        jScrollPane5 = new javax.swing.JScrollPane();
        jTextArea4 = new javax.swing.JTextArea();
        lblContent4 = new javax.swing.JLabel();
        jScrollPane6 = new javax.swing.JScrollPane();
        jTextArea5 = new javax.swing.JTextArea();
        lblContent5 = new javax.swing.JLabel();
        jScrollPane7 = new javax.swing.JScrollPane();
        jTextArea6 = new javax.swing.JTextArea();

        pnlContent.setBackground(new java.awt.Color(255, 255, 255));

        lblTableTitle.setFont(new java.awt.Font("Segoe UI", 1, 30)); // NOI18N
        lblTableTitle.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblTableTitle.setText("Inventory");

        lblContent.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        lblContent.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        lblContent.setText("Añadir un nuevo Producto");
        lblContent.setAlignmentX(0.5F);

        lblContent1.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        lblContent1.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        lblContent1.setText("Acceder a Inventario de Productos");
        lblContent1.setAlignmentX(0.5F);

        jTextArea1.setColumns(20);
        jTextArea1.setRows(5);
        jTextArea1.setText("1. Ubicarse en la barra de navegación del aplicativo \n2. Dar click en Actions \n3. De la lista de opciones dar click en Inventory\n4. Podrá observar un menú con las opciones de añadir \nproducto y retornar, una tabla que contiene los productos \nregistrados y la opción de búsqueda. ");
        jTextArea1.setFocusable(false);
        jTextArea1.setOpaque(false);
        jScrollPane2.setViewportView(jTextArea1);

        jTextArea2.setColumns(20);
        jTextArea2.setRows(5);
        jTextArea2.setText("1. Ubicarse en la opción Add product, que se \nencuentra en la parte izquierda de la ventana. \n2. Dar click en Add producto \n3. Llenar los siguientes campos:  \n   Product’s Name (Nombre del producto)  \n  Quantity: Units (Cantidad: Unidades) \n  Working time: Hours (Tiempo de trabajo: Horas) \n  Description(Descripcion) \n4. Seleccionar de la lista desplegable uno de \nlos materiales que componen el producto \n5. Ingresar la cantidad del material  \n6. Dar click en Add \n7. Se observará los materiales que se ingresan \nel recuadro purpura de la parte inferior de la ventana \n8. Para ingresar varios materiales repetir el paso \n7), 8) y 9) \n9. Para eliminar un material no deseado: \n    9.1 Seleccionar el material a eliminar  \n    9.2 Dar click en Delete \n10. Dar click en Save para guardar el producto  \n11. En la ventana emergente preguntará: Are \nyou sure you want to save this producto? \n(¿Estás seguro de que quieres guardar este producto?). \n12. Dar clik en yes \n13. En la ventana emergente saldrá: Your \nchanges have been successfully saved! \n(¡Sus cambios han sido guardados con éxito!) \n14. Dar click en Ok  ");
        jTextArea2.setFocusable(false);
        jTextArea2.setOpaque(false);
        jScrollPane3.setViewportView(jTextArea2);

        lblContent2.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        lblContent2.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        lblContent2.setText("Organizar Productos");
        lblContent2.setAlignmentX(0.5F);

        jTextArea3.setColumns(20);
        jTextArea3.setRows(5);
        jTextArea3.setText("1. Ubicarse en la opción All Products, que se \nencuentra en la parte superior de la ventana \nde la aplicación. \n2. Por defecto está marcada la opción All Products,\n muestra todos los productos registrados \n3. Ubicarse en la opción Products in stock, \nque se encuentra en la parte superior de la ventana \nde la aplicación. \n4. Dar clik en Products in stock \n5. Se mostrar en recuadro purpura los productos \ndisponibles en stok \n6. Ubicarse en la opción Products in shortage, \nque se encuentra en la parte superior de la ventana \nde la aplicación. \n7. Dar click en Products in shortage \nSe mostrará en recuadro purpura los productos \nque se encuentran escasos");
        jTextArea3.setFocusable(false);
        jTextArea3.setOpaque(false);
        jScrollPane4.setViewportView(jTextArea3);

        lblContent3.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        lblContent3.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        lblContent3.setText("Buscar un Producto");
        lblContent3.setAlignmentX(0.5F);

        jTextArea4.setColumns(20);
        jTextArea4.setRows(5);
        jTextArea4.setText("1. Ubicarse en la parte inferior de la ventana \ndel aplicativo \n2. Seleccionar el tipo de búsqueda  \nA. Dar click en By ID \n      a. Ingresar el ID del producto \n      b. Dar click en Search \n      c. Se mostrará los detalles del producto encontrado  \nB. Dar click en By Name \n     a. Ingresar el nombre del producto \n     b. Dar click en Search \n    c. Se mostrará los detalles del producto encontrado  ");
        jTextArea4.setFocusable(false);
        jTextArea4.setOpaque(false);
        jScrollPane5.setViewportView(jTextArea4);

        lblContent4.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        lblContent4.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        lblContent4.setText("Actualizar Productos");
        lblContent4.setAlignmentX(0.5F);

        jTextArea5.setColumns(20);
        jTextArea5.setRows(5);
        jTextArea5.setText("1. Realizar el proceso de búsqueda \n2. Ubicarse en la opción Update, que se encuentra \nen la parte inferior derecha de la venta del aplicativo \n3. Dar click en Update \n4. Se habilitarán los campos a editar  \n5. Editar  los siguientes campos:  \n    Product’s Name (Nombre del producto) \n    Quantity: Units (Cantidad: Unidades) \n    Working time: Hours (Tiempo de trabajo: Horas) \n    Description(Descripcion) \n6. Seleccionar de la lista desplegable uno de los \nmateriales que componen el producto \n7. Editar la cantidad del material  \n8. Dar click en Add \n9. Se observará los materiales que se ingresan el \nrecuadro purpura de la parte inferior de la ventana \n10. Para ingresar varios materiales repetir el paso 6), 7) y 8) \n11. Para eliminar un material no deseado: \n      11.1 Seleccionar el material a eliminar  \n      11.2 Dar click en Delete \n 12.  Dar click en Save, para guardar los cambios \nen el producto  \n 13. En la ventana emergente preguntará: Are you \nsure you want to update this producto?\n (¿Estás seguro de que quieres actualizar este producto?). \n14. Dar clik en yes \n15. En la ventana emergente saldrá: Your changes have \nbeen successfully saved! (¡Sus cambios han sido \nguardados con éxito!) \n16. Dar click en Ok  ");
        jTextArea5.setFocusable(false);
        jTextArea5.setOpaque(false);
        jScrollPane6.setViewportView(jTextArea5);

        lblContent5.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        lblContent5.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        lblContent5.setText("Eliminar Productos");
        lblContent5.setAlignmentX(0.5F);

        jTextArea6.setColumns(20);
        jTextArea6.setRows(5);
        jTextArea6.setText("1. Realizar el proceso de búsqueda \n2. Ubicarse en la opción Delete, que se encuentra \nen la parte inferior derecha de la venta del aplicativo \n3. Dar click en Delete \n4. En la ventana emergente preguntará: Are you sure \nyou want to delete this producto? \n(¿Estás seguro de que quieres eliminar este producto?). \n5. Dar clik en yes \n6. En la ventana emergente saldrá: Product deleted \nsuccessfully! (¡Producto eliminado con exito!) \n7. Dar click en Ok ");
        jTextArea6.setFocusable(false);
        jTextArea6.setOpaque(false);
        jScrollPane7.setViewportView(jTextArea6);

        javax.swing.GroupLayout pnlContentLayout = new javax.swing.GroupLayout(pnlContent);
        pnlContent.setLayout(pnlContentLayout);
        pnlContentLayout.setHorizontalGroup(
            pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlContentLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(pnlContentLayout.createSequentialGroup()
                        .addGap(6, 6, 6)
                        .addComponent(jScrollPane6, javax.swing.GroupLayout.PREFERRED_SIZE, 332, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(18, 18, 18)
                        .addComponent(jScrollPane7, javax.swing.GroupLayout.PREFERRED_SIZE, 332, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                    .addGroup(pnlContentLayout.createSequentialGroup()
                        .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(lblTableTitle, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addGroup(pnlContentLayout.createSequentialGroup()
                                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addGroup(pnlContentLayout.createSequentialGroup()
                                        .addGap(6, 6, 6)
                                        .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                            .addGroup(pnlContentLayout.createSequentialGroup()
                                                .addComponent(lblContent1, javax.swing.GroupLayout.PREFERRED_SIZE, 342, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                                .addComponent(lblContent, javax.swing.GroupLayout.PREFERRED_SIZE, 333, javax.swing.GroupLayout.PREFERRED_SIZE))
                                            .addGroup(pnlContentLayout.createSequentialGroup()
                                                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                                    .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 332, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                    .addComponent(jScrollPane4, javax.swing.GroupLayout.PREFERRED_SIZE, 332, javax.swing.GroupLayout.PREFERRED_SIZE))
                                                .addGap(22, 22, 22)
                                                .addComponent(jScrollPane3, javax.swing.GroupLayout.PREFERRED_SIZE, 332, javax.swing.GroupLayout.PREFERRED_SIZE))))
                                    .addGroup(pnlContentLayout.createSequentialGroup()
                                        .addComponent(lblContent2, javax.swing.GroupLayout.PREFERRED_SIZE, 342, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                        .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                            .addGroup(pnlContentLayout.createSequentialGroup()
                                                .addGap(6, 6, 6)
                                                .addComponent(jScrollPane5, javax.swing.GroupLayout.PREFERRED_SIZE, 332, javax.swing.GroupLayout.PREFERRED_SIZE))
                                            .addComponent(lblContent3, javax.swing.GroupLayout.PREFERRED_SIZE, 342, javax.swing.GroupLayout.PREFERRED_SIZE)))
                                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, pnlContentLayout.createSequentialGroup()
                                        .addComponent(lblContent4, javax.swing.GroupLayout.PREFERRED_SIZE, 342, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                        .addComponent(lblContent5, javax.swing.GroupLayout.PREFERRED_SIZE, 342, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addGap(10, 10, 10)))
                                .addGap(0, 2, Short.MAX_VALUE)))
                        .addContainerGap())))
        );
        pnlContentLayout.setVerticalGroup(
            pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlContentLayout.createSequentialGroup()
                .addGap(23, 23, 23)
                .addComponent(lblTableTitle)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblContent1)
                    .addComponent(lblContent))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 7, Short.MAX_VALUE)
                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jScrollPane2)
                    .addComponent(jScrollPane3))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblContent2)
                    .addComponent(lblContent3))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jScrollPane4)
                    .addComponent(jScrollPane5))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblContent4)
                    .addComponent(lblContent5))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(pnlContentLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jScrollPane6, javax.swing.GroupLayout.DEFAULT_SIZE, 109, Short.MAX_VALUE)
                    .addComponent(jScrollPane7))
                .addContainerGap(63, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(pnlContent, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(pnlContent, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
    }// </editor-fold>//GEN-END:initComponents


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.ButtonGroup btnGroupSearch;
    private javax.swing.ButtonGroup btnGrupProducts;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JScrollPane jScrollPane4;
    private javax.swing.JScrollPane jScrollPane5;
    private javax.swing.JScrollPane jScrollPane6;
    private javax.swing.JScrollPane jScrollPane7;
    private javax.swing.JTextArea jTextArea1;
    private javax.swing.JTextArea jTextArea2;
    private javax.swing.JTextArea jTextArea3;
    private javax.swing.JTextArea jTextArea4;
    private javax.swing.JTextArea jTextArea5;
    private javax.swing.JTextArea jTextArea6;
    private javax.swing.JLabel lblContent;
    private javax.swing.JLabel lblContent1;
    private javax.swing.JLabel lblContent2;
    private javax.swing.JLabel lblContent3;
    private javax.swing.JLabel lblContent4;
    private javax.swing.JLabel lblContent5;
    private javax.swing.JLabel lblTableTitle;
    private javax.swing.JPanel pnlContent;
    // End of variables declaration//GEN-END:variables
}
