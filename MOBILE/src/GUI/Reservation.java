/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import ENTITE.RESERVATION;
import ENTITE.User;
import Services.ReservationService;
import Services.userService;
import com.codename1.charts.models.Point;
import com.codename1.components.MultiButton;
import com.codename1.components.OnOffSwitch;
import com.codename1.io.Log;
import com.codename1.ui.Button;
import static com.codename1.ui.CN.CENTER;
import static com.codename1.ui.CN.addNetworkErrorListener;
import static com.codename1.ui.CN.getCurrentForm;
import static com.codename1.ui.CN.updateNetworkThreadCount;
import com.codename1.ui.CheckBox;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.list.GenericListCellRenderer;
import com.codename1.ui.plaf.RoundRectBorder;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.TWASALNI;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;



/**
 *
 * @author anest
 */
public class Reservation extends TWASALNI  {
     private Form current;
    private Resources theme;

    public void init(Object context) {
        // use two network threads instead of one
        updateNetworkThreadCount(2);

        theme = UIManager.initFirstTheme("/theme");

        // Enable Toolbar on all Forms by default
        Toolbar.setGlobalToolbar(true);

        // Pro only feature
        Log.bindCrashProtection(true);

        addNetworkErrorListener(err -> {
            // prevent the event from propagating
            err.consume();
            if(err.getError() != null) {
                Log.e(err.getError());
            }
            Log.sendLogAsync();
            Dialog.show("Connection Error", "There was a networking error in the connection to " + err.getConnectionRequest().getUrl(), "OK", null);
        });        
    }
        private Map<String, Object> createListEntry(String name, String date) {
    Map<String, Object> entry = new HashMap<>();
    entry.put(name,"Line ");
    entry.put("Line2", date);
    return entry;
}
    
    public void start(int id) {
  
        // System.out.println("user id = " +id);
        Form reservation =new Form ("reservation");
     

 
        
                reservation.getToolbar().addMaterialCommandToSideMenu("AJOUTER RESERVATION",FontImage.MATERIAL_NEW_RELEASES, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            new Reservation().start();
            }
        });
                
            reservation.getToolbar().addMaterialCommandToSideMenu("MES RESERVATION",FontImage.MATERIAL_LIST, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            new LISTReservation().start(id);
            }
        });
            
       
         String icon = null;
    
                 reservation.getToolbar().addCommandToOverflowMenu("se déconnecter",
                null, ev -> {
                    try {
                        new LOGIN().show();
                    } catch (IOException ex) {

                    }
                });
        reservation.getToolbar().addCommandToOverflowMenu("Retour au menu",
                null, ev -> {
        new acceuil(id).show();
                });
         
  
           Label message=new Label("Formulaire de reservation", icon);
        Label vide=new Label("", icon);
      
           TextField point_achat = new TextField(""," point d'achat");
            TextField achats = new TextField("","list d'achat ");
                   TextField destination = new TextField("","destination ");
                    Picker date = new Picker();
                         TextField remarques = new TextField("","remarques ");
                Container C = new Container (BoxLayout.x());
          //COMBOBOX
                  ComboBox<Map<String, Object>> c = new ComboBox<>(createListEntry("0","Choisir un  partenaire"));
         
         
        Picker p= new Picker();

        
        ArrayList<User> list2=new ArrayList<>();
        userService us= new userService();
        
        list2=us.getPartenaires();
        for(User u:list2)
        {
            c.addItem(createListEntry(Integer.toString(u.getId()),u.getNom()));
            
            
        }
          c.setRenderer(new GenericListCellRenderer<>(new MultiButton(), new MultiButton()));
          //ENDCOMBOBOX
              
                Button btvalider= new Button("valider");
                Button btreset= new Button("reset");
                C.add(btvalider);
                C.add(btreset);
                reservation.add(c);
                reservation.add(message);
                reservation.add(vide);
                reservation.add(point_achat);
                reservation.add(achats);
                reservation.add(destination);
                reservation.add(date);
                reservation.add(remarques);
                reservation.add(C);
               btvalider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((destination.getText().length()==0)||(point_achat.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                                            int w=66;
                        for(Map.Entry<String,Object> x:c.getSelectedItem().entrySet())
                        {
                            w=Integer.parseInt(x.getKey());
                            break;
                        }
                           System.out.println(w);
                        if(w==0)
                        {
                        Dialog.show("Alert", "Choisissez un partenaire svp", new Command("OK"));
                        return;
                        }
                        System.out.println("Partenaire id: "+w);
              
                        

        RESERVATION R = new RESERVATION(2,w,point_achat.getText(),destination.getText(),date.getDate(),achats.getText(),remarques.getText(),"non traite");
                        if( ReservationService.getInstance().addReservation(R))
                        {
                            Dialog.show("Success","Reservation ajouté",new Command("OK"));
                          new LISTReservation().start(id);}
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    
                    
                }
                
                
            }
        });            
             
                  
        
               
        if(current != null){
            current.show();
            return;
        }
   
        reservation.show();
    }

    public void stop() {
        current = getCurrentForm();
        if(current instanceof Dialog) {
            ((Dialog)current).dispose();
            current = getCurrentForm();
        }
    }
    
    public void destroy() {
    }

    
}
