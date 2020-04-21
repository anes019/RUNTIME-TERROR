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
public class AfficherAbonnementController implements Initializable {

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
    private TableView<Abonnement> tab;

    @FXML
    private TableColumn<Abonnement, String> ColUtilisateurs_id;

    @FXML
    private TableColumn<Abonnement, String> ColpositionDepart;

    @FXML
    private TableColumn<Abonnement, String> ColpositionArrive;


    @FXML
    private TableColumn<Abonnement, String> ColheureDepart;
    @FXML
    private TextField filterField;
    @FXML
    private Button supprimerAbonnement;

    @FXML
    private Button newAbonnement;
    // alert
      Alert alert = new Alert(Alert.AlertType.NONE);

     public void afficher()
     {
           
                   ServiceAbonnement st =new ServiceAbonnement();

                  
                    ColUtilisateurs_id.setCellValueFactory(new PropertyValueFactory<>("Utilisateurs_id"));
                    ColpositionDepart.setCellValueFactory(new PropertyValueFactory<>("positionDepart"));
                    ColpositionArrive.setCellValueFactory(new PropertyValueFactory<>("positionArrive"));
                    ColheureDepart.setCellValueFactory(new PropertyValueFactory<>("heureDepart"));
                    tab.setItems((ObservableList<Abonnement>) st.afficher());
     }
  
    @FXML
    void newAbonnementAction(ActionEvent event) throws IOException {
   AnchorPane pane = FXMLLoader.load(getClass().getResource("/com/Desktop/gui/Abonnement.fxml"));
        ContentPane.getChildren().setAll(pane);
    }

    
    
    
    @FXML
    void supprimerAbonnement(ActionEvent event) {
            Abonnement tr = tab.getSelectionModel().getSelectedItem();
             

   
   
   
                                  if (tr == null) {

                                   alert.setAlertType(Alert.AlertType.WARNING);
           
                                   // set content text
                                   alert.setContentText(" Choix invalide ");
           
                                   // show the dialog
                                   alert.show();
         
                                }
                                   else{
                                       ServiceAbonnement st =new ServiceAbonnement();
                                     Abonnement t =new Abonnement(tr.getId());
                                     
                                    Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
                                    alert.setTitle("Confirmation ");
                                    alert.setHeaderText(null);
                                    alert.setContentText("Vous voulez vraiment supprimer Abonnement ");
                                    Optional<ButtonType> action = alert.showAndWait();
                                    if (action.get() == ButtonType.OK) {
                                       st.supprimer(t);
                                       afficher();

                                    }
                                  }
    }
    @FXML
    void editAbonnement(ActionEvent event) throws IOException {
    Abonnement tr = tab.getSelectionModel().getSelectedItem();

   
   
   
                                  if (tr == null) {
                                   alert.setAlertType(Alert.AlertType.WARNING);
           
                                   // set content text
                                   alert.setContentText(" No Abonnement selected : Please select a Abonnement for edit ");
           
                                   // show the dialog
                                   alert.show();
             
                                }
     else{
                                      
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/com/Desktop/gui/ModifierAbonnement.fxml"));              
        Parent parent = loader.load();
        ContentPane.getChildren().setAll(parent);

            ModifierAbonnementController controller =(ModifierAbonnementController) loader.getController();
            controller.getAbonnementm(tr);
            controller.add(tr);
            //System.out.println(tr);
           
          }
     
    }

         void recherche(){
    
        ServiceAbonnement sP =new ServiceAbonnement();
        // Wrap the ObservableList in a FilteredList (initially display all data).
        FilteredList<Abonnement> filteredData = new FilteredList<>((ObservableList<Abonnement>) sP.afficher(), b -> true);
		
		// 2. Set the filter Predicate whenever the filter changes.
		filterField.textProperty().addListener((observable, oldValue, newValue) -> {
			filteredData.setPredicate(Abonnement -> {
				// If filter text is empty, display all persons.
								
				if (newValue == null || newValue.isEmpty()) {
					return true;
				}
				
				// Compare first name and last name of every person with filter text.
				String lowerCaseFilter = newValue.toLowerCase();
				
				if (Abonnement.getPositionArrive().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; // Filter matches first name.
				} 
				     else  
				    	 return false; // Does not match.
			});
		});
		
		// 3. Wrap the FilteredList in a SortedList. 
		SortedList<Abonnement> sortedData = new SortedList<>(filteredData);
		
		// 4. Bind the SortedList comparator to the TableView comparator.
		// 	  Otherwise, sorting the TableView would have no effect.
		sortedData.comparatorProperty().bind(tab.comparatorProperty());
		
		// 5. Add sorted (and filtered) data to the table.
		tab.setItems(sortedData);
               
        
    
    }
 
    
}
