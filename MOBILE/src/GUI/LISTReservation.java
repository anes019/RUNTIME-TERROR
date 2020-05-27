/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import ENTITE.RESERVATION;
import ENTITE.User;
import Services.ReservationService;
import static com.codename1.charts.util.ColorUtil.red;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.io.Log;
import com.codename1.ui.Button;
import static com.codename1.ui.CN.addNetworkErrorListener;
import static com.codename1.ui.CN.getCurrentForm;
import static com.codename1.ui.CN.updateNetworkThreadCount;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.RoundBorder;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import java.io.IOException;
import java.util.ArrayList;


/**
 *
 * @author anest
 */
public class LISTReservation {

    private Form current;
    private Resources theme;
    private int i = 0;
    Form LISTreservation;

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
            if (err.getError() != null) {
                Log.e(err.getError());
            }
            Log.sendLogAsync();
            Dialog.show("Connection Error", "There was a networking error in the connection to " + err.getConnectionRequest().getUrl(), "OK", null);
        });
    }

    public void start(int id) {
        LISTreservation = new Form("Mes reservations", BoxLayout.y());

        Toolbar tb = LISTreservation.getToolbar();

        tb.addMaterialCommandToSideMenu("AJOUTER RESERVATION", FontImage.MATERIAL_NEW_RELEASES, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new Reservation().start();
            }
        });

        tb.addMaterialCommandToSideMenu("MES RESERVATIONS", FontImage.MATERIAL_LIST, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new LISTReservation().start(id);
            }
        });


        
         LISTreservation.getToolbar().addCommandToOverflowMenu("se déconnecter",
                null, ev -> {
                    try {
                        new LOGIN().show();
                    } catch (IOException ex) {

                    }
                });
        LISTreservation.getToolbar().addCommandToOverflowMenu("Retour au menu",
                null, ev -> {
        new acceuil(id).show();
                });
        ArrayList<RESERVATION> reservations = new ArrayList<>();
      
      //  System.out.println("user id " +id);
        reservations = Services.ReservationService.getInstance().getAllRESERVATIONS(id);

      

        for (RESERVATION r : reservations) {
            i++;
            addItem(r, i,id);
        }

        LISTreservation.show();

        if (current != null) {
            current.show();
            return;
        }

        LISTreservation.show();
    }

    public void addItem(RESERVATION reservation, int i,int id) {
        ImageViewer img = null;
        Container C1 = new Container(new BoxLayout(BoxLayout.X_AXIS));
        Container C2 = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        try {
            img = new ImageViewer(Image.createImage("/round.png"));
        } catch (IOException ex) {

        }
        Button NUMB = new Button();
        Style NUMBStyle = NUMB.getAllStyles();
        NUMBStyle.setFgColor(0xffffff);

        NUMBStyle.setBgTransparency(0);
        // closeStyle.setPaddingUnit(Style.UNIT_TYPE_DIPS);
        // closeStyle.setPadding(3, 3, 3, 3);
        NUMB.setText("" + i);
        NUMBStyle.setBorder(RoundBorder.create().shadowOpacity(100));

        Label point_achat = new Label("point d'achat:" + " " + reservation.getPointAchat());
        Label space = new Label("Reservation:" + " " + i);
        Label vide = new Label("     ");
        Label destination = new Label("destination :" + " " + reservation.getDestination());
        Label List_achat = new Label("list d'achats" + " " + reservation.getListAchats());

        destination.addPointerPressedListener((ActionListener) (ActionEvent evt) -> {
            if (Dialog.show("Reservation " + " " + i, "Destination : " + reservation.getDestination() , "Consulter", "Annuler")) {

                new RESERVATION_DETAILS().start(i, reservation.getPointAchat(), reservation.getDestination(), reservation.getListAchats(), reservation.getId(), reservation.getRemarques(), reservation.getEtat(), reservation.getPartenaire_id(),id);
            }
        });

        C2.add(point_achat);
        C2.add(destination);
        C2.add(vide);
        C1.add(NUMB);
        C1.add(C2);
        C1.setLeadComponent(destination);
        LISTreservation.add(C1);
        LISTreservation.refreshTheme();

    }

    public void stop() {
        current = getCurrentForm();
        if (current instanceof Dialog) {
            ((Dialog) current).dispose();
            current = getCurrentForm();
        }
    }

    public void destroy() {
    }



}
