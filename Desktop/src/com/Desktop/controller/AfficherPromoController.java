/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Desktop.controller;

import com.Desktop.models.Abonnement;
import com.Desktop.models.Promo;
import com.Desktop.services.ServiceAbonnement;
import com.Desktop.services.ServicePromo;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.util.Duration;

/**
 * FXML Controller class
 *
 * @author 21694
 */
public class AfficherPromoController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
        afficher();
        recherche();
    }

 @FXML
    private AnchorPane ContentPane;

    @FXML
    private TableView<Promo> tab;

    @FXML
    private TableColumn<Promo, String> ColDescription;

    @FXML
    private TableColumn<Promo, String> ColCode;

    @FXML
    private TableColumn<Promo, String> ColFlag;

    @FXML
    private TableColumn<Promo, String> ColValeur;
    @FXML
    private TextField filterField;

    @FXML
    private Button supprimerPromo;

    @FXML
    private Button newPromo;
    // alert
      Alert alert = new Alert(Alert.AlertType.NONE);

     public void afficher()
     {
           
                   ServicePromo st =new ServicePromo();

                  
                    ColDescription.setCellValueFactory(new PropertyValueFactory<>("Description"));
                    ColCode.setCellValueFactory(new PropertyValueFactory<>("Code"));
                    ColFlag.setCellValueFactory(new PropertyValueFactory<>("Flag"));
                    ColValeur.setCellValueFactory(new PropertyValueFactory<>("Valeur"));
                    tab.setItems((ObservableList<Promo>) st.afficher());
     }
  
    @FXML
    void newPromoAction(ActionEvent event) throws IOException {
   AnchorPane pane = FXMLLoader.load(getClass().getResource("/com/Desktop/gui/Promo.fxml"));
        ContentPane.getChildren().setAll(pane);
    }

    
    
    
    @FXML
    void supprimerPromo(ActionEvent event) {
            Promo tr = tab.getSelectionModel().getSelectedItem();
             

   
   
   
                                  if (tr == null) {

                                   alert.setAlertType(Alert.AlertType.WARNING);
           
                                   // set content text
                                   alert.setContentText(" Choix invalide ");
           
                                   // show the dialog
                                   alert.show();
         
                                }
                                   else{
                                       ServicePromo st =new ServicePromo();
                                     Promo t =new Promo(tr.getId());
                                     
                                    Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
                                    alert.setTitle("Confirmation ");
                                    alert.setHeaderText(null);
                                    alert.setContentText("Vous voulez vraiment supprimer Promo ");
                                    Optional<ButtonType> action = alert.showAndWait();
                                    if (action.get() == ButtonType.OK) {
                                       st.supprimer(t);
                                       afficher();

                                    }
                                  }
    }
    @FXML
    void editPromo(ActionEvent event) throws IOException {
    Promo tr = tab.getSelectionModel().getSelectedItem();

   
   
   
                                  if (tr == null) {
                                   alert.setAlertType(Alert.AlertType.WARNING);
           
                                   // set content text
                                   alert.setContentText(" No Promo selected : Please select a Promo for edit ");
           
                                   // show the dialog
                                   alert.show();
             
                                }
     else{
                                      
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/com/Desktop/gui/ModifierPromo.fxml"));              
        Parent parent = loader.load();
        ContentPane.getChildren().setAll(parent);

            ModifierPromoController controller =(ModifierPromoController) loader.getController();
            controller.getPromom(tr);
            controller.add(tr);
            //System.out.println(tr);
           
          }
     
    }

             void recherche(){
    
        ServicePromo sP =new ServicePromo();
        // Wrap the ObservableList in a FilteredList (initially display all data).
        FilteredList<Promo> filteredData = new FilteredList<>((ObservableList<Promo>) sP.afficher(), b -> true);
		
		// 2. Set the filter Predicate whenever the filter changes.
		filterField.textProperty().addListener((observable, oldValue, newValue) -> {
			filteredData.setPredicate(Promo -> {
				// If filter text is empty, display all persons.
								
				if (newValue == null || newValue.isEmpty()) {
					return true;
				}
				
				// Compare first name and last name of every person with filter text.
				String lowerCaseFilter = newValue.toLowerCase();
				
				if (Promo.getCode().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; // Filter matches first name.
				} 
				     else  
				    	 return false; // Does not match.
			});
		});
		
		// 3. Wrap the FilteredList in a SortedList. 
		SortedList<Promo> sortedData = new SortedList<>(filteredData);
		
		// 4. Bind the SortedList comparator to the TableView comparator.
		// 	  Otherwise, sorting the TableView would have no effect.
		sortedData.comparatorProperty().bind(tab.comparatorProperty());
		
		// 5. Add sorted (and filtered) data to the table.
		tab.setItems(sortedData);
               
        
    
    }
 
 
    
}
