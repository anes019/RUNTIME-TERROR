/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.Desktop.services;

import com.Desktop.models.Abonnement;
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
public class ServiceAbonnement implements IService<Abonnement> {
   
    Connection cnx = DataSource.getInstance().getCnx();
     @Override
    public void ajouter(Abonnement T)              
    {
            try {
                
            String requete = "INSERT INTO abonnement (positionDepart,positionArrive,heureDepart,Utilisateurs_id) VALUES (?,?,?,?)";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setString(1, T.getPositionDepart());
            pst.setString(2, T.getPositionArrive());
            pst.setString(3, T.getHeureDepart());
            pst.setInt(4, T.getUtilisateurs_id());
            pst.executeUpdate();
            System.out.println("abonnement ajoutée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    
    
    
    
    }



    @Override
    public void supprimer(Abonnement P) {
                try {
            String requete = "DELETE FROM abonnement WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(1,P.getId());
            pst.executeUpdate();
            System.out.println("abonnement supprimée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(Abonnement T) {
                try {
            String requete = "UPDATE abonnement SET positionDepart=?,positionArrive=?,heureDepart=?,Utilisateurs_id=? WHERE id=?";
            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setInt(5, T.getId());
            pst.setString(1, T.getPositionDepart());
            pst.setString(2, T.getPositionArrive());
            pst.setString(3, T.getHeureDepart());
            pst.setInt(4, T.getUtilisateurs_id());
            pst.executeUpdate();
            System.out.println("abonnement modifiée !");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    @Override
    public List<Abonnement> afficher() {
       
   ObservableList <Abonnement> ListAbonnement =FXCollections.observableArrayList();

        try {
            String requete = "SELECT * FROM abonnement";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                ListAbonnement.add(new Abonnement(rs.getInt("id"), rs.getString("positionDepart"),
               rs.getString("positionArrive"),rs.getString("heureDepart"),rs.getInt("Utilisateurs_id")));
            }
          ListAbonnement.sort((o1, o2) -> o1.getHeureDepart().compareTo(o2.getHeureDepart()));
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
      
        return ListAbonnement;
    }
                   
   public Abonnement getById(int idp) {
     Abonnement pp = new Abonnement();

        try {
            String requete = "SELECT * FROM abonnement where id="+idp+"";
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                pp = new Abonnement();
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
      
        return pp;
  }               
                   
                      
}
