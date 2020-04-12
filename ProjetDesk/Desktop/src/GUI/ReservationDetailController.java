/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.jfoenix.controls.JFXDrawer;
import com.jfoenix.controls.JFXHamburger;
import com.jfoenix.transitions.hamburger.HamburgerBackArrowBasicTransition;
import desktop.Entite.reservation;
import desktop.Service.ReservationSession;
import desktop.Service.ServiceReservation;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Calendar;

/**
 * FXML Controller class
 *
 * @author anest
 */
public class ReservationDetailController implements Initializable {

    @FXML
    private Pane pnlCustomer;
    @FXML
    private Pane pnlOrders;
    @FXML
    private Pane pnlOverview;
    @FXML
    private JFXHamburger hamburger;
    @FXML
    private Hyperlink linkTotraited;
    @FXML
    private Label Numero;
    @FXML
    private Hyperlink linkTonottraited;
    @FXML
    private JFXDrawer draw;
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
    private TableView<?> tableview;
    @FXML
    private TableColumn<?, ?> produit;
    @FXML
    private TableColumn<?, ?> pointA;
    @FXML
    private TableColumn<?, ?> Destination;
    @FXML
    private TableColumn<?, ?> Remarques;
    @FXML
    private Button accepter;
    @FXML
    private Button refuser;
    @FXML
    private Label prix;
    @FXML
    private Label prix1;
    @FXML
    private Label date;
    @FXML
    private Label nom;
    @FXML
    private Label prenom;
    @FXML
    private Label adresse;
    @FXML
    private Label mobile;
    private int id_resrvation = 0;
    ReservationSession RS = ReservationSession.getInstance();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        draw.setSidePane(vbox);
        id_resrvation = RS.getId_reservation();
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
        try {
            displayAll();
            addButtonToTable();
            // TODO
        } catch (SQLException ex) {
            Logger.getLogger(ReservationFXMLController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void handleClicks(ActionEvent event) {
    }

    public void displayAll() throws SQLException {

        ServiceReservation sr = new ServiceReservation();
        List listcs = sr.details(id_resrvation);
        reservation R = sr.details2(id_resrvation);

        int number = sr.counttraited();
        DateFormat dateFormat = new SimpleDateFormat("yyyy-mm-dd hh:mm:ss");
        String strDate = dateFormat.format(R.getDate_reservation());

        date.setText(strDate);
        prix1.setText(Float.toString(R.getPrix()));
        prix.setText(Float.toString(R.getPrix()));
        //listcs.forEach(System.out::println);
        Numero.setText(Integer.toString(R.getId()));
        ObservableList listReserv = FXCollections.observableArrayList(listcs);

        tableview.setItems(listReserv);

        pointA.setCellValueFactory(new PropertyValueFactory<>("pointAchat"));
        Destination.setCellValueFactory(new PropertyValueFactory<>("destination"));
        produit.setCellValueFactory(new PropertyValueFactory<>("listAchats"));
        Remarques.setCellValueFactory(new PropertyValueFactory<>("remarques"));

        accepter.setOnAction((ActionEvent event) -> {

            try {

                sr.Accept(R.getId());

            } catch (SQLException ex) {
                Logger.getLogger(ReservationFXMLController.class.getName()).log(Level.SEVERE, null, ex);
            }

        });
        refuser.setOnAction((ActionEvent event) -> {

            try {

                sr.refuse(R.getId());

            } catch (SQLException ex) {
                Logger.getLogger(ReservationFXMLController.class.getName()).log(Level.SEVERE, null, ex);
            }

        });

    }

    private void addButtonToTable() throws SQLException {

        linkTonottraited.setOnAction((ActionEvent event) -> {
            Parent page2;
            try {
                RS.cleanUserSession();
                page2 = FXMLLoader.load(getClass().getResource("/GUI/ReservationFXML.fxml"));
                Scene scene2 = new Scene(page2);
                Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();
                window.setScene(scene2);
                window.show();

            } catch (IOException ex) {
                Logger.getLogger(ReservationFXMLController.class.getName()).log(Level.SEVERE, null, ex);
            }

        });

        linkTotraited.setOnAction((ActionEvent event) -> {
            Parent page2;
            try {
                RS.cleanUserSession();
                page2 = FXMLLoader.load(getClass().getResource("/GUI/ReservationTraited.fxml"));
                Scene scene2 = new Scene(page2);
                Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();
                window.setScene(scene2);
                window.show();

            } catch (IOException ex) {
                Logger.getLogger(ReservationFXMLController.class.getName()).log(Level.SEVERE, null, ex);
            }

        });
    }

}
