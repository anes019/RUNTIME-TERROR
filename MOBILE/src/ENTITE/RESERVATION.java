/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ENTITE;

import java.util.Date;

/**
 *
 * @author anest
 */
public class RESERVATION {
    private int id;
     private User client;
    private int partenaire_id;
    private int client_id;
    private String pointAchat;
    private String destination;
    private String listAchats;
    private String remarques;
    private float prix;
    private Date  date_reservation;
    private String etat;
    

    public RESERVATION(int id,int client_id, int partenaire_id,  String pointAchat, String destination, Date  date_reservation ,float prix , String listAchats, String remarques,String etat,User user) {
         this.id=id;
        this.partenaire_id = partenaire_id;
        this.client_id = client_id;
        this.pointAchat = pointAchat;
        this.destination = destination;
        this.listAchats = listAchats;
        this.remarques = remarques;
        this.prix = prix;
        this.date_reservation = date_reservation;
        this.client=user;
      
    }
    
      public RESERVATION(  int id,String pointAchat, String destination,  String listAchats, String remarques) {
    this.id=id;
        this.pointAchat = pointAchat;
        this.destination = destination;
        this.listAchats = listAchats;
        this.remarques = remarques;

      
    }
   public RESERVATION(int id,int client_id, int partenaire_id,  String pointAchat, String destination, Date  date_reservation ,float prix , String listAchats, String remarques,String etat) {
         this.id=id;
        this.partenaire_id = partenaire_id;
        this.client_id = client_id;
        this.pointAchat = pointAchat;
        this.destination = destination;
        this.listAchats = listAchats;
        this.remarques = remarques;
        this.prix = prix;
        this.date_reservation = date_reservation;
    
      
    }
      public RESERVATION(int client_id, int partenaire_id,  String pointAchat, String destination, Date  date_reservation , String listAchats, String remarques,String etat) {
         
        this.partenaire_id = partenaire_id;
        this.client_id = client_id;
        this.pointAchat = pointAchat;
        this.destination = destination;
        this.listAchats = listAchats;
        this.remarques = remarques;
        this.date_reservation = date_reservation;
    
      
    }
      public RESERVATION(int id,int client_id, int partenaire_id,  String pointAchat, String destination, float prix , String listAchats, String remarques,String etat) {
         this.id=id;
        this.partenaire_id = partenaire_id;
        this.client_id = client_id;
        this.pointAchat = pointAchat;
        this.destination = destination;
        this.listAchats = listAchats;
        this.remarques = remarques;
        this.prix = prix;
  
    
      
    }

    public RESERVATION() {
       
    }

    public RESERVATION(String text, String text0) {
     
    }
    public User getClient() {
        return client;
    }

    public void setClient(User client) {
        this.client = client;
    }




    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getPartenaire_id() {
        return partenaire_id;
    }

    public void setPartenaire_id(int partenaire_id) {
        this.partenaire_id = partenaire_id;
    }

    public int getClient_id() {
        return client_id;
    }

    public void setClient_id(int client_id) {
        this.client_id = client_id;
    }

    public String getPointAchat() {
        return pointAchat;
    }

    public void setPointAchat(String pointAchat) {
        this.pointAchat = pointAchat;
    }

    public String getDestination() {
        return destination;
    }

    public void setDestination(String destination) {
        this.destination = destination;
    }

    public String getListAchats() {
        return listAchats;
    }

    public void setListAchats(String listAchats) {
        this.listAchats = listAchats;
    }

    public String getRemarques() {
        return remarques;
    }

    public void setRemarques(String remarques) {
        this.remarques = remarques;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public Date  getDate_reservation() {
        return date_reservation;
    }

    public void setDate_reservation(Date  date_reservation) {
        this.date_reservation = date_reservation;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

}
