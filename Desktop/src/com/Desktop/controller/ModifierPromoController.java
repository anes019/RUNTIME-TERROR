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
public class ModifierPromoController implements Initializable {

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
    private TextField Description;

    @FXML
    private Button ModifierPromo;

    @FXML
    private Button MPbackAffPromo;

    @FXML
    private TextField Code;

    @FXML
    private TextField Flag;

    @FXML
    private TextField Valeur;


    //list pour modifier
    List <Promo> Promotab =new ArrayList() ;
    // alert
      Alert alert = new Alert(Alert.AlertType.NONE);
    
   public void getPromom(Promo T) {
     
        Description.setText(T.getDescription());  
        Code.setText(T.getCode());
        //Flag.setText(T.getFlag());
        //Valeur.setText(T.getPromoname());  
    }
    
    
   public void add(Promo T) {
         
         Promotab.add(T);
    
    }
    
    
    
    
    @FXML
    void MPbackAffPromo(ActionEvent event) throws IOException {
         AnchorPane pane = FXMLLoader.load(getClass().getResource("/com/Desktop/gui/AfficherPromo.fxml"));
        ContentPaneEditT.getChildren().setAll(pane);
    }

    @FXML
    void ModifierPromo(ActionEvent event) throws IOException {

              ServicePromo st =new ServicePromo();
           
             
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/com/Desktop/gui/AfficherPromo.fxml"));              
        Parent parent = loader.load();
        //ContentPaneEditT.getChildren().setAll(parent);
        
        AfficherPromoController id =(AfficherPromoController) loader.getController();
        System.out.println(Promotab.get(0).getId());
               
         st.modifier(new Promo(Promotab.get(0).getId(),Description.getText(),Code.getText(),Integer.parseInt(Flag.getText()),Integer.parseInt(Valeur.getText())));
           id.afficher();
         alert.setAlertType(Alert.AlertType.INFORMATION);
           
           // set content text
           alert.setContentText("Promo modifier ");
           
           // show the dialog
           alert.show();
              
           

    }

    
}
