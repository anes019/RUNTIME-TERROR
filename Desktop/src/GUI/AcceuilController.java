/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class AcceuilController implements Initializable {

    private AnchorPane AcceuilAP;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void goToRegister(MouseEvent event) throws IOException {
              AnchorPane ap = FXMLLoader.load(getClass().getResource("Inscription.fxml"));
                AcceuilAP.getChildren().setAll(ap);
    }

    @FXML
    private void goToLogin(MouseEvent event) throws IOException {
              AnchorPane ap = FXMLLoader.load(getClass().getResource("Login.fxml"));
                AcceuilAP.getChildren().setAll(ap);
    }
    
}
