/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Desktop.controller;

import com.Desktop.models.Promo;
import com.Desktop.services.ServicePromo;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;


/**
 * FXML Controller class
 *
 * @author 21694
 */
public class PromoController implements Initializable {

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
    private TextField Description;

    @FXML
    private Button AjouterPromo;

    @FXML
    private Button backAffPromo;

    @FXML
    private TextField Code;

    @FXML
    private TextField Flag;

    @FXML
    private TextField Valeur;

// alert
      Alert alert = new Alert(Alert.AlertType.NONE);
      
    @FXML
    void ajouterPromo(ActionEvent event) {

           
           
       if (!Description.getText().equals("")&&!Code.getText().equals("")&&!Flag.getText().equals("")&&!Valeur.getText().equals(""))
       {
           
           
           
           
           ServicePromo st =new ServicePromo();
      

            
              st.ajouter(new Promo(Description.getText(),Code.getText(),Integer.parseInt(Flag.getText()),Integer.parseInt(Valeur.getText())));

            alert.setAlertType(Alert.AlertType.INFORMATION);
           
           // set content text
           alert.setContentText("Promo ajouté ");
           
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
AnchorPane pane = FXMLLoader.load(getClass().getResource("/com/Desktop/gui/AfficherPromo.fxml"));
        ContentPaneAjouT.getChildren().setAll(pane);
    }
}
