/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.control.Hyperlink;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class MainUiController implements Initializable {

    @FXML
    private Hyperlink admin;
    @FXML
    private Hyperlink Accueil;
    @FXML
    private Hyperlink profil;
    @FXML
    private Hyperlink reservation;
    @FXML
    private Hyperlink course;
    @FXML
    private Hyperlink abonnement;
    @FXML
    private Hyperlink login;
    @FXML
    private Hyperlink feedback;
    @FXML
    private Pane FeedMain;
    @FXML
    private Pane Contain;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        FeedMain.setVisible(false);
    }    

    @FXML
    private void goToAcceuil(ActionEvent event) {
    }

    @FXML
    private void Profil(ActionEvent event) {
    }

    @FXML
    private void Reservation(ActionEvent event) {
    }

    @FXML
    private void Login(ActionEvent event) {
    }

    @FXML
    private void GoToContact(MouseEvent event) throws IOException {
        List<Node> node_Contact = new ArrayList<>();
        FXMLLoader loader = new FXMLLoader();
        loader.setLocation(getClass().getResource("Contact.fxml"));
        Parent n = (Parent) loader.load();
        ContactController cont= loader.getController();
        Contain.getChildren().clear();
        Contain.getChildren().add(n);
    }

    @FXML
    private void GoToTaxi(MouseEvent event) throws IOException {
        List<Node> node_Contact = new ArrayList<>();
        FXMLLoader loader = new FXMLLoader();
        loader.setLocation(getClass().getResource("Taxi.fxml"));
        Parent n = (Parent) loader.load();
        TaxiController cont= loader.getController();
        Contain.getChildren().clear();
        Contain.getChildren().add(n);
    }

    @FXML
    private void GoToDetailTaxi(MouseEvent event) throws IOException {
        List<Node> node_Contact = new ArrayList<>();
        FXMLLoader loader = new FXMLLoader();
        loader.setLocation(getClass().getResource("DetailTaxi.fxml"));
        Parent n = (Parent) loader.load();
        DetailTaxiController cont= loader.getController();
        Contain.getChildren().clear();
        Contain.getChildren().add(n);
    }

    @FXML
    private void GoToAllContact(MouseEvent event) throws IOException {
       
        
    }

    @FXML
    private void GoToAllRating(MouseEvent event) {
    }

    @FXML
    private void FeedMenu(MouseEvent event) {
        FeedMain.setVisible(true);
    }
    
}
