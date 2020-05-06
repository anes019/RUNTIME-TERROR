/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;

/**
 * GUI builder created Form
 *
 * @author anest
 */
public class LOGIN extends com.codename1.ui.Form {

    public LOGIN() {
        this(com.codename1.ui.util.Resources.getGlobalResources());
    }
    
    public LOGIN(com.codename1.ui.util.Resources resourceObjectInstance) {
        initGuiBuilderComponents(resourceObjectInstance);
    }

//-- DON'T EDIT BELOW THIS LINE!!!
    protected com.codename1.ui.Label gui_Label = new com.codename1.ui.Label();
    protected com.codename1.ui.TextField gui_email = new com.codename1.ui.TextField();
    protected com.codename1.ui.TextField gui_pass = new com.codename1.ui.TextField();
    protected com.codename1.ui.Button gui_LOGIN = new com.codename1.ui.Button();
    protected com.codename1.ui.Button gui_inscrit = new com.codename1.ui.Button();


// <editor-fold defaultstate="collapsed" desc="Generated Code">                          
    private void guiBuilderBindComponentListeners() {
        EventCallbackClass callback = new EventCallbackClass();
        gui_LOGIN.addActionListener(callback);
    }

    class EventCallbackClass implements com.codename1.ui.events.ActionListener, com.codename1.ui.events.DataChangedListener {
        private com.codename1.ui.Component cmp;
        public EventCallbackClass(com.codename1.ui.Component cmp) {
            this.cmp = cmp;
        }

        public EventCallbackClass() {
        }

        public void actionPerformed(com.codename1.ui.events.ActionEvent ev) {
            com.codename1.ui.Component sourceComponent = ev.getComponent();

            if(sourceComponent.getParent().getLeadParent() != null && (sourceComponent.getParent().getLeadParent() instanceof com.codename1.components.MultiButton || sourceComponent.getParent().getLeadParent() instanceof com.codename1.components.SpanButton)) {
                sourceComponent = sourceComponent.getParent().getLeadParent();
            }

            if(sourceComponent == gui_LOGIN) {
                onLOGINActionEvent(ev);
            }
        }

        public void dataChanged(int type, int index) {
        }
    }
    private void initGuiBuilderComponents(com.codename1.ui.util.Resources resourceObjectInstance) {
        guiBuilderBindComponentListeners();
        setLayout(new com.codename1.ui.layouts.LayeredLayout());
        setInlineStylesTheme(resourceObjectInstance);
        setRTL(true);
        setScrollableY(false);
                setInlineStylesTheme(resourceObjectInstance);
        setTitle("LOGIN");
        setName("LOGIN");
        addComponent(gui_Label);
        addComponent(gui_email);
        addComponent(gui_pass);
        addComponent(gui_LOGIN);
        addComponent(gui_inscrit);
                gui_Label.setInlineStylesTheme(resourceObjectInstance);
        gui_Label.setName("Label");
        gui_Label.setIcon(resourceObjectInstance.getImage("logo3.png"));
        ((com.codename1.ui.layouts.LayeredLayout)gui_Label.getParent().getLayout()).setInsets(gui_Label, "7.1428556mm auto auto auto").setReferenceComponents(gui_Label, "-1 -1 -1 -1").setReferencePositions(gui_Label, "0.0 0.0 0.0 0.0");
        gui_email.setPreferredSizeStr("69.04762mm inherit");
        gui_email.setHint("email");
        gui_email.setUIID("email");
                gui_email.setInlineStylesTheme(resourceObjectInstance);
        gui_email.setName("email");
        gui_email.setHintIcon(com.codename1.ui.FontImage.createMaterial("\ue158".charAt(0), gui_email.getUnselectedStyle()));
        ((com.codename1.ui.layouts.LayeredLayout)gui_email.getParent().getLayout()).setInsets(gui_email, "auto auto 10.05291mm auto").setReferenceComponents(gui_email, "0 -1 2 -1").setReferencePositions(gui_email, "1.0 0.0 0.0 0.0");
        gui_pass.setPreferredSizeStr("69.04762mm inherit");
        gui_pass.setHint("mot de passe");
        gui_pass.setUIID("pass");
                gui_pass.setInlineStylesTheme(resourceObjectInstance);
        gui_pass.setName("pass");
        gui_pass.setHintIcon(com.codename1.ui.FontImage.createMaterial("\ue897".charAt(0), gui_pass.getUnselectedStyle()));
        ((com.codename1.ui.layouts.LayeredLayout)gui_pass.getParent().getLayout()).setInsets(gui_pass, "10.05291mm auto auto auto").setReferenceComponents(gui_pass, "0 -1 -1 -1").setReferencePositions(gui_pass, "1.0 0.0 0.0 0.0");
        gui_LOGIN.setPreferredSizeStr("34.920635mm inherit");
        gui_LOGIN.setText("se connecter");
        gui_LOGIN.setUIID("LOGIN");
                gui_LOGIN.setInlineStylesTheme(resourceObjectInstance);
        gui_LOGIN.setInlineAllStyles("bgColor:2a7ab; fgColor:fff7f7; transparency:255; opacity:255; alignment:center;");
        gui_LOGIN.setName("LOGIN");
        ((com.codename1.ui.layouts.LayeredLayout)gui_LOGIN.getParent().getLayout()).setInsets(gui_LOGIN, "6.084656mm auto auto auto").setReferenceComponents(gui_LOGIN, "2 -1 -1 -1").setReferencePositions(gui_LOGIN, "1.0 0.0 0.0 0.0");
        gui_inscrit.setPreferredSizeStr("43.121693mm inherit");
        gui_inscrit.setText("s'inscrire");
        gui_inscrit.setUIID("s'inscrire");
                gui_inscrit.setInlineStylesTheme(resourceObjectInstance);
        gui_inscrit.setInlineAllStyles("fgColor:91a6;");
        gui_inscrit.setName("inscrit");
        ((com.codename1.ui.layouts.LayeredLayout)gui_inscrit.getParent().getLayout()).setInsets(gui_inscrit, "4.497358mm 34.391533mm auto auto").setReferenceComponents(gui_inscrit, "3 -1 -1 -1").setReferencePositions(gui_inscrit, "1.0 0.0 0.0 0.0");
    }// </editor-fold>

//-- DON'T EDIT ABOVE THIS LINE!!!
    public void onLOGINActionEvent(com.codename1.ui.events.ActionEvent ev) {
       new Reservation().start();
    }

}
