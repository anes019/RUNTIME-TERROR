/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Desktop.services;

import com.Desktop.models.Promo;
import com.Desktop.utils.DataSource;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author 21694
 */
public class ServicePromo implements IService<Promo> {
        
    Connection cnx = DataSource.getInstance().getCnx();
     @Override
    public void ajouter(Promo T)              
    {
            try {
                
            String requete = "INSERT INTO promotion (Description,Code,Flag,Valeur) VALUES (?,?,?,?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setString(1, T.getDescription());
            pst.setString(2, T.getCode());
            pst.setInt(3, T.getFlag());
            pst.setInt(4, T.getValeur());
            pst.executeUpdate();
            System.out.println("promotion ajoutée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    
    
    
    
    }



    @Override
    public void supprimer(Promo P) {
                try {
            String requete = "DELETE FROM promotion WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1,P.getId());
            pst.executeUpdate();
            System.out.println("promotion supprimée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(Promo T) {
                try {
            String requete = "UPDATE promotion SET Description=?,Code=?,Flag=?,Valeur=? WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(5, T.getId());
            pst.setString(1, T.getDescription());
            pst.setString(2, T.getCode());
            pst.setInt(3, T.getFlag());
            pst.setInt(4, T.getValeur());
            pst.executeUpdate();
            System.out.println("promotion modifiée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<Promo> afficher() {
       
   ObservableList <Promo> ListPromo =FXCollections.observableArrayList();

        try {
            String requete = "SELECT * FROM promotion";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                ListPromo.add(new Promo(rs.getInt("id"), rs.getString("Description"),
               rs.getString("Code"),rs.getInt("Flag"),rs.getInt("Valeur")));
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
      
        return ListPromo;
    }
                   
   public Promo getById(int idp) {
		 Promo pp = new Promo();

        try {
            String requete = "SELECT * FROM promotion where id="+idp+"";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                pp = new Promo();
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
      
        return pp;
	}               
                   
                    
   
}
