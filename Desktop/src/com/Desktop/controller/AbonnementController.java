/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Desktop.controller;

import com.Desktop.models.Abonnement;
import com.Desktop.services.ServiceAbonnement;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;


/**
 * FXML Controller class
 *
 * @author 21694
 */
public class AbonnementController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    } 
     
    @FXML
    private AnchorPane ContentPaneAjouT;

    @FXML
    private TextField positionDepart;

    @FXML
    private Button AjouterAbonnement;

    @FXML
    private Button backAffAbonnement;

    @FXML
    private TextField positionArrive;

    @FXML
    private TextField heureDepart;
// alert
      Alert alert = new Alert(Alert.AlertType.NONE);
      
    @FXML
    void ajouterAbonnement(ActionEvent event) {

           
           
       if (!positionDepart.getText().equals("")&&!positionArrive.getText().equals("")&&!heureDepart.getText().equals(""))
       {
           
           
           
           
           ServiceAbonnement st =new ServiceAbonnement();
      

            
              st.ajouter(new Abonnement(positionDepart.getText(),positionArrive.getText(),heureDepart.getText(),2));

            alert.setAlertType(Alert.AlertType.INFORMATION);
           
           // set content text
           alert.setContentText("Abonnement ajouté ");
           
           // show the dialog
           alert.show();
  

           
       }
       else {
           
           alert.setAlertType(Alert.AlertType.WARNING);
           
           // set content text
           alert.setContentText("verifié vos parametre ");
           
           // show the dialog
           alert.show();
       }
    }

    @FXML
    void backAffprojet(ActionEvent event) throws IOException {
AnchorPane pane = FXMLLoader.load(getClass().getResource("/com/Desktop/gui/AfficherAbonnement.fxml"));
        ContentPaneAjouT.getChildren().setAll(pane);
    }
}
