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
import java.sql.Date;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
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
public class ModifierAbonnementController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    


    @FXML
    private AnchorPane ContentPaneEditT;

    @FXML
    private TextField positionDepart;

    @FXML
    private Button ModifierAbonnement;

    @FXML
    private Button MPbackAffAbonnement;

    @FXML
    private TextField positionArrive;

    @FXML
    private TextField heureDepart;


    //list pour modifier
    List <Abonnement> Abonnementtab =new ArrayList() ;
    // alert
      Alert alert = new Alert(Alert.AlertType.NONE);
    
   public void getAbonnementm(Abonnement T) {
     
        positionDepart.setText(T.getPositionDepart());  
        positionArrive.setText(T.getPositionArrive()); 
        heureDepart.setText(T.getHeureDepart()); 
 
    }
    
    
   public void add(Abonnement T) {
         
         Abonnementtab.add(T);
    
    }
    
    
    
    
    @FXML
    void MPbackAffAbonnement(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("/com/Desktop/gui/AfficherAbonnement.fxml"));
        ContentPaneEditT.getChildren().setAll(pane);
    }

    @FXML
    void ModifierAbonnement(ActionEvent event) throws IOException {

              ServiceAbonnement st =new ServiceAbonnement();
           
             
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/com/Desktop/gui/AfficherAbonnement.fxml"));              
        Parent parent = loader.load();
        //ContentPaneEditT.getChildren().setAll(parent);
        
        AfficherAbonnementController id =(AfficherAbonnementController) loader.getController();
        System.out.println(Abonnementtab.get(0).getId());
               
         st.modifier(new Abonnement(Abonnementtab.get(0).getId(),positionDepart.getText(),positionArrive.getText(),heureDepart.getText(),2));
           id.afficher();
         alert.setAlertType(Alert.AlertType.INFORMATION);
           
           // set content text
           alert.setContentText("Abonnement modifier ");
           
           // show the dialog
           alert.show();
              
           

    }

    
}
