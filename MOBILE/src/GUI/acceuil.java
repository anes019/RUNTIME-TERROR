/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Stroke;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.RoundRectBorder;
import com.codename1.ui.plaf.Style;
import java.io.IOException;

/**
 *
 * @author hazem
 */
public class acceuil extends Form {

    Form current;

    public acceuil(int id) {
        current = this;
        setTitle("Acceuil");
        setLayout(BoxLayout.y());
        Style loginStyle = getAllStyles();
            // System.out.println("id="+id);
        ImageViewer BG = null;
        try {
            BG = new ImageViewer(Image.createImage("/bg.jpg"));
        } catch (IOException ex) {
        }
        loginStyle.setBgImage(BG.getImage());
        /**
         * ***********************************************************************************************
         */

        ImageViewer Logo = null;
        try {
            Logo = new ImageViewer(Image.createImage("/logo3.png"));
        } catch (IOException ex) {
        }
        Style logostyle = Logo.getAllStyles();
         logostyle.setMarginUnit(Style.UNIT_TYPE_DIPS);
        logostyle.setMargin(Component.BOTTOM, 3);

        logostyle.setMargin(Component.TOP, 10);
        
        /**
         * ***********************************************************************************************
         */
            Button btRESERVATION = new Button("RESERVATION TAXI");
        Style butStyle = btRESERVATION.getAllStyles();
        butStyle.setBorder(RoundRectBorder.create().
                strokeColor(0xCD853F).
                strokeOpacity(120)
        );

        butStyle.setBgTransparency(255);
        butStyle.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle.setMargin(Component.BOTTOM, 3);

        butStyle.setMargin(Component.TOP, 1);

        butStyle.setMargin(Component.LEFT, 10);
        butStyle.setMargin(Component.RIGHT, 10);
        /**
         * ***********************************************************************************************
         */
        
        Button btCOURSES = new Button("RESERVATION COURSES");
        Style butStyle1 = btCOURSES.getAllStyles();
        butStyle1.setBorder(RoundRectBorder.create().
                strokeColor(0xCD853F).
                strokeOpacity(120)
        );

        butStyle1.setBgTransparency(255);
        butStyle1.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle1.setMargin(Component.BOTTOM, 3);

        butStyle1.setMargin(Component.TOP, 1);

        butStyle1.setMargin(Component.LEFT, 10);
        butStyle1.setMargin(Component.RIGHT, 10);
        /**
         * ***********************************************************************************************
         */
        Button btABOONNEMENTS = new Button("ABOONNEMENTS");
        Style butStyle2 = btABOONNEMENTS.getAllStyles();
        butStyle2.setBorder(RoundRectBorder.create().
                strokeColor(0xCD853F).
                strokeOpacity(120)
        );
 
        butStyle2.setBgTransparency(255);
        butStyle2.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle2.setMargin(Component.BOTTOM, 3);

        butStyle2.setMargin(Component.TOP, 1);

        butStyle2.setMargin(Component.LEFT, 10);
        butStyle2.setMargin(Component.RIGHT, 10);
        /**
         * ***********************************************************************************************
         */
        Button btFEEDBACK = new Button("FEEDBACK");
        Style butStyle3 = btFEEDBACK.getAllStyles();
        butStyle3.setBorder(RoundRectBorder.create().
                strokeColor(0xCD853F).
                strokeOpacity(120)
        );

        butStyle3.setBgTransparency(255);
        butStyle3.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle3.setMargin(Component.BOTTOM, 3);

        butStyle3.setMargin(Component.TOP, 1);

        butStyle3.setMargin(Component.LEFT, 10);
        butStyle3.setMargin(Component.RIGHT, 10);
        /**
         * ***********************************************************************************************
         */
        Button btProfil = new Button("Profil");
        Style butStyle4 = btProfil.getAllStyles();
        butStyle4.setBorder(RoundRectBorder.create().
                strokeColor(0xCD853F).
                strokeOpacity(120)
        );
      
        butStyle4.setBgTransparency(255);
        butStyle4.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle4.setMargin(Component.BOTTOM, 3);

        butStyle4.setMargin(Component.TOP, 1);

        butStyle4.setMargin(Component.LEFT, 10);
        butStyle4.setMargin(Component.RIGHT, 10);
        /**
         * ***********************************************************************************************
         */

        /**
         * ***********************************************************************************************
         */
        addAll(Logo, btProfil,btRESERVATION, btCOURSES, btABOONNEMENTS, btFEEDBACK);

        /**
         * ***********************************************************************************************
         */
        btProfil.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

            }
        });
        btRESERVATION.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

                new Reservation().start(id);

            }
        });
        btCOURSES.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new CoursesGUI().start(id);

            }
        });
        btABOONNEMENTS.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

            }
        });
        btFEEDBACK.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

            }
        });

        /**
         * ***********************************************
         */
        getToolbar().addCommandToOverflowMenu("se déconnecter",
                null, ev -> {
                    try {
                        new LOGIN().show();
                    } catch (IOException ex) {

                    }
                });
        getToolbar().addCommandToOverflowMenu("Exit",
                null, ev -> {
                    Display.getInstance().exitApplication();
                });

    }
}
