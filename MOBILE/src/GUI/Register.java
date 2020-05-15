/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import ENTITE.User;
import Services.userService;

/**
 *
 * @author yanisinfo
 */
public class Register extends Form{
       Form current;
    public Register(){
    current=this;
    
        Container c0 = new Container(BoxLayout.x());
        Label lbemail = new Label("Email : ");
        TextField txemail = new TextField("", "Email");
        c0.add(lbemail);
        c0.add(txemail);
    
        Container c1 = new Container(BoxLayout.x());
        Label lbusername = new Label("Username : ");
        TextField txusername = new TextField("", "Username");
        c1.add(lbusername);
        c1.add(txusername);
        
        Container c2 = new Container(BoxLayout.x());
        Label lbpsw = new Label("Password : ");
        TextField txpsw = new TextField("", "Password");
        txpsw.setConstraint(TextField.PASSWORD);
        c2.add(lbpsw);
        c2.add(txpsw);
        
        Container c3 = new Container(BoxLayout.x());
        Label lbnom = new Label("Nom : ");
        TextField txnom = new TextField("", "Nom");
        c3.add(lbnom);
        c3.add(txnom);
        
        Container c4 = new Container(BoxLayout.x());
        Label lbprenom = new Label("Prenom : ");
        TextField txprenom = new TextField("", "Prenom");
        c4.add(lbprenom);
        c4.add(txprenom);
        
        Container c5 = new Container(BoxLayout.x());
        Label lbtelephone = new Label("Telephone : ");
        TextField txtelephone = new TextField("", "Telephone");
        c5.add(lbtelephone);
        c5.add(txtelephone);
        
        Container c_f = new Container(BoxLayout.y());
        c_f.addAll(c0,c3,c4,c2,c5,c1);
        
                Button btValider = new Button("Valider");
        
             btValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((txpsw.getText().length()==0)||(txusername.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                       
                  String Role="ROLE_CLIENT";
                      User t = new User(txusername.getText(),txemail.getText(),Role,txnom.getText(),txprenom.getText(),txpsw.getText(),txtelephone.getText());
                        System.out.println(".actionPerformed()1");
                        if( userService.getInstance().createUser(t)){
                            System.out.println(".actionPerformed()2");
                            Dialog.show("Success","Connection accepted",new Command("OK"));
                            new acceuil(t.getId()).show();
                        }
                               
                        else
                            System.out.println(".actionPerformed()3");
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "telephone must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }


        }); 
       c_f.add(btValider);
        
        add(c_f);
    }
}
