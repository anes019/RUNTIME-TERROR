/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import ENTITE.User;
import Services.userService;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Font;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Stroke;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.RoundRectBorder;
import com.codename1.ui.plaf.Style;
import java.io.IOException;
import org.mindrot.jbcrypt.BCrypt;

/**
 *
 * @author hazem
 */
public class LOGIN extends Form {

    Form current;

    public LOGIN() throws IOException {
        current = this;
        setTitle("Se connecter");
        setLayout(BoxLayout.y());
        Style loginStyle = getAllStyles();
        loginStyle.setBgColor(0x72a1ed);
        Container cnt1 = new Container(new FlowLayout(Container.CENTER));
        Container cnt4 = new Container(new FlowLayout(Container.CENTER));
        Container cnt5 = new Container(new FlowLayout(Container.CENTER));

        Container cnt2 = new Container(new FlowLayout(Container.CENTER));
        Container cnt3 = new Container(new FlowLayout(Container.CENTER));
        ImageViewer Logo = null;
        try {
            Logo = new ImageViewer(Image.createImage("/logo3.png"));
        } catch (IOException ex) {
        }

        /**
         * ***********************************************************************************************
         */
        Style logoStyle = Logo.getAllStyles();
        logoStyle.setMargin(Component.TOP, 20);
        Font largeBoldSystemFont = Font.createSystemFont(Font.FACE_MONOSPACE, Font.STYLE_BOLD, Font.SIZE_LARGE);

        /**
         * ***********************************************************************************************
         */
        TextField Username = new TextField("", "username");
        Style userStyle = Username.getAllStyles();
        Stroke borderStroke = new Stroke(2, Stroke.CAP_SQUARE, Stroke.JOIN_MITER, 1);
        userStyle.setBorder(RoundRectBorder.create().
                strokeColor(0).
                strokeOpacity(120).
                stroke(borderStroke));
        userStyle.setBgColor(0xffffff);
        userStyle.setBgTransparency(255);
        userStyle.setMarginUnit(Style.UNIT_TYPE_DIPS);
        userStyle.setMargin(Component.BOTTOM, 3);
        userStyle.setMargin(Component.TOP, 10);
        /**
         * ***********************************************************************************************
         */
        TextField tpassword = new TextField();
        Style passwordStyle = tpassword.getAllStyles();
        passwordStyle.setBorder(RoundRectBorder.create().
                strokeColor(0).
                strokeOpacity(50).
                stroke(borderStroke));
        passwordStyle.setBgColor(0xffffff);
        passwordStyle.setBgTransparency(255);

        tpassword.setHint("mot de passe");
        tpassword.setConstraint(TextField.PASSWORD);
        cnt2.addAll(Username);
        cnt3.add(tpassword);
        cnt1.add(Logo);
        /**
         * ***********************************************************************************************
         */
        Button btnval = new Button("Se connecter ");
        Style butStyle = btnval.getAllStyles();
        butStyle.setBorder(RoundRectBorder.create().
                strokeColor(0x00000).
                strokeOpacity(120).
                stroke(borderStroke));
        
  
        butStyle.setFgColor(0x474747);

      
        butStyle.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle.setMargin(Component.BOTTOM, 3);
        butStyle.setMargin(Component.TOP, 10);
        butStyle.setMargin(Component.LEFT, 10);
        butStyle.setMargin(Component.RIGHT, 10);
        //cnt5.add(btnval);

        /**
         * ***********************************************************************************************
         */
        Button motOublier = new Button("Mot de passe oublié ?");
        Style butStyle1 = motOublier.getAllStyles();

      //  butStyle1.setBgColor(0xCD853F);
        butStyle1.setFgColor(0xffffff);
        butStyle1.setBgTransparency(0);
        butStyle1.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle1.setMargin(Component.TOP, 10);

 
        cnt5.add(motOublier);
        /**
         * ***********************************************************************************************
         */
        Button inscrire = new Button("s'inscrire");
        Style butStyle2 = inscrire.getAllStyles();

     butStyle2.setFgColor(0xffffff);
        butStyle2.setBgTransparency(0);
        butStyle2.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle2.setMargin(Component.TOP, 0);
        /**
         * ***********************************************************************************************
         */
        addAll(cnt1, cnt2, cnt3, btnval, cnt5, inscrire);
        /**
         * ***********************************************************************************************
         */
        btnval.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((Username.getText().length() == 0) || (tpassword.getText().length() == 0)) {
                    Dialog.show("Alert", "vous devez saisir votre username et mot de passe", new Command("OK"));
                } else {
                    try {

                        User u = userService.getInstance().getUser(Username.getText());
                        String pw = u.getPassword();
                        if(pw!=null)
                        {
                        String pw1 = pw.substring(4);
                      
                        String pw11 = "$2a$" + pw1;
                        System.out.println("password1 = " + pw1);
                             System.out.println("password2 = " + pw11);
                             
                          }
                        String hashpw = BCrypt.hashpw(tpassword.getText(), BCrypt.gensalt());
                       // System.out.println("password = " + pw);
                   
                    
                  
              
                         if (u.getId()==null)
                        {   Dialog.show("ERROR", "User not found", new Command("OK"));}
                       
                                  /* else if (BCrypt.checkpw(tpassword.getText(), pw) == false) {
                            Dialog.show("ERROR", "Mot de passe invalide", new Command("OK"));

                        }*/
                         else  {
                   
                        
                              new acceuil(u.getId()).show();
                
         // System.out.println("user id = " +u.getId());
                        }

                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }

                }

            }
        });
        /**
         * ***********************************************************************************************
         */
        getToolbar().addCommandToOverflowMenu("Exit",
                null, ev -> {
                    Display.getInstance().exitApplication();
                });

    }

}
