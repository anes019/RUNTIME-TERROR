/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import ENTITE.Courses;
import ENTITE.User;
import Services.CoursesService;
import Services.userService;
import com.codename1.components.MultiButton;
import com.codename1.io.Log;
import com.codename1.ui.Button;
import static com.codename1.ui.CN.addNetworkErrorListener;
import static com.codename1.ui.CN.getCurrentForm;
import static com.codename1.ui.CN.updateNetworkThreadCount;
import com.codename1.ui.ComboBox;
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
import com.codename1.ui.list.GenericListCellRenderer;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;

/**
 *
 * @author Arbi
 */
public class CoursesGUI {
    private Form current;
    private Resources theme;
    Form f;
    Form affich;
    Form del;
    
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
    
        public void addItem(int id,String Depart,String Destination, float prix)
    {
        Container c=new Container(BoxLayout.x());
        Label lID=new Label(Integer.toString(id));
        Label lDEPART=new Label(Depart);
        Label lDESTINATION=new Label(Destination);
        Label lPRIX= new Label(Float.toString(prix));
        
            c.add(lID);
            c.add(lDEPART);
            c.add(lDESTINATION);
            c.add(lPRIX);
            
            
            lDEPART.addPointerPressedListener((ActionListener) (ActionEvent evt) -> {
            Dialog.show("INFO","Id:"+Integer.toString(id)+" Depart: "+Depart+" Destination: "+Destination+" Prix: "+prix,new Command("OK"));
            });
            lDESTINATION.addPointerPressedListener((ActionListener) (ActionEvent evt) -> {
            Dialog.show("INFO","Id:"+Integer.toString(id)+" Depart: "+Depart+" Destination: "+Destination+" Prix: "+prix,new Command("OK"));
            });
            lPRIX.addPointerPressedListener((ActionListener) (ActionEvent evt) -> {
            Dialog.show("INFO","Id:"+Integer.toString(id)+" Depart: "+Depart+" Destination: "+Destination+" Prix: "+prix,new Command("OK"));
            });
            affich.add(c);
    }
    
    public void start() {
        if(current != null){
            current.show();
            return;
        }
        
        
        
        f= new Form("Ajouter une course",BoxLayout.y());
        affich= new Form("Afficher mes courses",BoxLayout.y());
        del= new Form("Supprimer une course",BoxLayout.y());
                Toolbar tb= f.getToolbar();
        tb.addMaterialCommandToLeftSideMenu("Affichage", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    affich.show();
            }
        });
        tb.addMaterialCommandToLeftSideMenu("Ajout", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    f.show();
            }
        });
        tb.addMaterialCommandToLeftSideMenu("Suppression", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    del.show();
            }
        });
        
        
                        Toolbar tbAff= affich.getToolbar();
        tbAff.addMaterialCommandToLeftSideMenu("Affichage", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    affich.show();
            }
        });
        tbAff.addMaterialCommandToLeftSideMenu("Ajout", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    f.show();
            }
        });
        tbAff.addMaterialCommandToLeftSideMenu("Suppression", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    del.show();
            }
        });
        
        
                                Toolbar tbDel= del.getToolbar();
        tbDel.addMaterialCommandToLeftSideMenu("Affichage", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    affich.show();
            }
        });
        tbDel.addMaterialCommandToLeftSideMenu("Ajout", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    f.show();
            }
        });
        tbDel.addMaterialCommandToLeftSideMenu("Suppression", FontImage.MATERIAL_WEB, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    del.show();
            }
        });
        
        
        CoursesService cs=new CoursesService();
        ArrayList<Courses>list= new ArrayList<>();
        list=cs.getCs();
        //for(int i=0;i<6;i++)
        for(Courses c:list)
        {
            addItem(c.getId(),c.getDepart(),c.getDestination(),c.getPrix());
            //addItem(1,c.getDepart(),c.getDestination(),5);
            //addItem(1,"aaaaaa","bbbb",666);
        }
        
        
                TextField tfID= new TextField("","ID");
        Button btValiderSupp=new Button("Valider");
        btValiderSupp.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
             if (tfID.getText()=="")
                       {
                        Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                        
                        
                       
                       }
             else
             {
                 
                  try
                  {
                      if( CoursesService.getInstance().deleteCourse(Integer.parseInt(tfID.getText())))
                        {
                            Dialog.show("Success","Course Supprimée",new Command("OK"));
                         // new LISTReservation().start(id);
                        }
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                  }
                  catch(Exception ex)
                  {
                      Dialog.show("Alert", "L'ID doit etre un nombre", new Command("OK"));
                  }
             }
            
            
            }
        });    
        del.add(tfID);
        del.add(btValiderSupp);
        
        
        
        
        
        
        
        
        
        
        
       
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
        
        TextField tfDepart= new TextField("","Depart");
        TextField tfDestination= new TextField("","Destination");
        Picker dateCourse = new Picker();
        Button bt= new Button("Valider");
        bt.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                       if ((tfDepart.getText().length()==0)||(tfDestination.getText().length()==0))
                       {
                        Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                        
                        
                       
                       }
                      
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
                       
                       

        Courses C = new Courses(0,tfDepart.getText(),tfDestination.getText(),dateCourse.getDate(),200,2,w);
                        if( CoursesService.getInstance().addCourse(C))
                        {
                            Dialog.show("Success","Course ajoutée",new Command("OK"));
                         // new LISTReservation().start(id);
                        }
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                   
                    System.out.println(C.toString());
                }
            }
        });
        
        
        Container con = new Container(BoxLayout.y());
        con.addAll(c,tfDepart,tfDestination,dateCourse,bt);
        
        f.add(con);
        f.show();
       
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
