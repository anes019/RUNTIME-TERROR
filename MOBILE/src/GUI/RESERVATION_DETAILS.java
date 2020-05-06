/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Services.ReservationService;
import com.codename1.io.Log;
import com.codename1.ui.Button;
import static com.codename1.ui.CN.addNetworkErrorListener;
import static com.codename1.ui.CN.getCurrentForm;
import static com.codename1.ui.CN.updateNetworkThreadCount;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;

/**
 *
 * @author anest
 */
public class RESERVATION_DETAILS  {
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
    
    public void start(int i ,String pt_achat,String dest,String listachat,int id,String rq,String etat,int part) {
       
        Form reservation =new Form ("reservation");
        Toolbar tb=reservation.getToolbar();
      
       
   
        
                tb.addMaterialCommandToSideMenu("AJOUTER RESERVATION",FontImage.MATERIAL_NEW_RELEASES, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            new Reservation().start();
            }
        });
                
            tb.addMaterialCommandToSideMenu("MES RESERVATIONS",FontImage.MATERIAL_LIST, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            new LISTReservation().start();
            }
        });
            
                 tb.addMaterialCommandToSideMenu("LOGIN",FontImage.MATERIAL_LOCK, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
            new LOGIN().show();
            }
        });
         String icon = null;
        
           Label message=new Label("Detail de reservation"+ " " +i);
             Label vide=new Label("", icon);
           Container C1 = new Container (BoxLayout.y());
           TextField point_achat = new TextField("","");
           Label pt=new Label("point_achat :");
           Label pt1=new Label("List achat :");
           Label pt2=new Label("destination :");
           Label space =new Label(" ");
             Label space1 =new Label(" ");
               Label space2 =new Label(" ");
                 Label space3 =new Label(" ");
            TextField achats = new TextField("","");
                 TextField destination = new TextField("","");
                 Picker date = new Picker();
                TextField remarques = new TextField("","remarques ");
               point_achat.setText(pt_achat);
               destination.setText(dest);
               achats.setText(listachat);
               
               System.out.println("list achats:"+listachat);
               System.out.println("remarques:"+rq);
                   System.out.println("etat:"+etat);
                  System.out.println("partenaire:"+part);

               remarques.setText(rq);
                Container C = new Container (BoxLayout.x());
            
                Button btmodifier= new Button("modifier");
                Button btsupp= new Button("supprimer");
                Button btannuler= new Button("annuler");
                C.add(btmodifier);
                C.add(btsupp);
            
                reservation.add(message);
                reservation.add(vide);
                C1.add(space);
                C1.add(pt);
                C1.add(point_achat);
                C1.add(space1);
                C1.add(pt1);
                C1.add(achats);
               C1.add(space2);
                C1.add(pt2);
                 C1.add(destination);
                C1.add(space3);
                C1.add(date);
                C1.add(remarques);
                C1.add(C);
                C1.add(btannuler);
                reservation.add(C1);
              
                     
                    btsupp.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

              
                 
                        if( ReservationService.getInstance().DeleteReservation(id))
                        {
                            Dialog.show("Success","Reservation supprimé",new Command("OK"));
                                new LISTReservation().start();}
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    
                
                
                
            }
        });     
                  
                       btannuler.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {              
                                new LISTReservation().start();}
  
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
