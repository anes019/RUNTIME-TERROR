/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.jfoenix.controls.JFXDrawer;
import com.jfoenix.controls.JFXHamburger;
import com.jfoenix.transitions.hamburger.HamburgerBackArrowBasicTransition;
import desktop.Entite.Reclammations;
import desktop.Service.ServiceReclammation;
import java.net.URL;
import java.util.ArrayList;
import java.util.Date;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class AllContactController implements Initializable {

    /**
     * Initializes the controller class.
     */
    
    ServiceReclammation ServR = new ServiceReclammation();
    @FXML
    private VBox vbox;
    @FXML
    private Button clients1;
    @FXML
    private Button clients;
    @FXML
    private Button partenaires;
    @FXML
    private Button reservations;
    @FXML
    private Button reservations1;
    @FXML
    private Button abonnements;
    @FXML
    private Button feedback;
    @FXML
    private Button logout;
    @FXML
    private Pane pnlCustomer;
    @FXML
    private Pane pnlOrders;
    @FXML
    private Pane pnlOverview;
    @FXML
    private VBox pnItems;
    @FXML
    private TableView<?> tableview;
    @FXML
    private TableColumn<Reclammations, Integer> user;
    @FXML
    private TableColumn<Reclammations, String> sujet;
    @FXML
    private TableColumn<Reclammations, String> contenu;
    @FXML
    private TableColumn<Reclammations, Date> date;
    @FXML
    private JFXHamburger hamburger;
    @FXML
    private JFXDrawer draw;
    @FXML
    private TableColumn<Reclammations, String> etat;
    @FXML
    private TableColumn<?, ?> actions;
    @FXML
    private Label total;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        draw.setSidePane(vbox);

        HamburgerBackArrowBasicTransition transition = new HamburgerBackArrowBasicTransition(hamburger);
        transition.setRate(-1);
        hamburger.addEventHandler(MouseEvent.MOUSE_PRESSED, (e) -> {
            transition.setRate(transition.getRate() * -1);
            transition.play();

            if (draw.isOpened()) {

                draw.close();
            } else {
                draw.open();

            }
        });
        
        DisplayAll();
        
    }    
    
    public void DisplayAll(){
        ArrayList<Reclammations> TabR = ServR.FindAll();
        int total = 0;
        for(Reclammations r : TabR){
            total++;
        }
        ObservableList ViewRec = FXCollections.observableArrayList(TabR);
        tableview.setItems(ViewRec);
        user.setCellValueFactory(new PropertyValueFactory<>("user"));
        sujet.setCellValueFactory(new PropertyValueFactory<>("sujet"));
        contenu.setCellValueFactory(new PropertyValueFactory<>("contenu"));
        date.setCellValueFactory(new PropertyValueFactory<>("date"));
        etat.setCellValueFactory(new PropertyValueFactory<>("etat"));
        this.total.setText(""+total);
    }

    
    @FXML
    private void handleClicks(ActionEvent event) {
    }
    
    
}
