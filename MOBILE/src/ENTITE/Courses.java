/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ENTITE;

import java.util.Date;




/**
 *
 * @author Arbi
 */
public class Courses {
    private int id;
    private User client;
    private User partenaire;
    private String depart;
    private String destination;
    private Date date_course;
    private float prix;
    private String nompartenaire;
    private String nomclient;
    private int clientId;
    private int partenaireId;

    
    

    public Courses(int id,User client, User partenaire, String depart, String destination, Date date_course, float prix) {
        this.id = id;
        this.client = client;
        this.partenaire = partenaire;
        this.depart = depart;
        this.destination = destination;
        this.date_course = date_course;
        this.prix = prix;
        this.nompartenaire= this.partenaire.getNom();
        this.nomclient= this.client.getNom();
    }

    public Courses(int id, String depart, String destination, float prix) {
        this.id = id;
        this.depart = depart;
        this.destination = destination;
        this.prix = prix;
    }

    public Courses(int id, String depart, String destination, Date date_course, float prix, int clientId, int partenaireId) {
        this.id = id;
        this.depart = depart;
        this.destination = destination;
        this.date_course = date_course;
        this.prix = prix;
        this.clientId = clientId;
        this.partenaireId = partenaireId;
    }

    public Courses() {
    }
    
    

    public String getNomclient() {
        return nomclient;
    }

    public void setNomclient(String nomclient) {
        this.nomclient = nomclient;
    }

    public String getNompartenaire() {
        return nompartenaire;
    }

    public void setNompartenaire(String nompartenaire) {
        this.nompartenaire = nompartenaire;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public User getClient() {
        return client;
    }

    public void setClient(User client) {
        this.client = client;
    }

    public User getPartenaire() {
        return partenaire;
    }

    public void setPartenaire(User partenaire) {
        this.partenaire = partenaire;
    }

    public String getDepart() {
        return depart;
    }

    public void setDepart(String depart) {
        this.depart = depart;
    }

    public String getDestination() {
        return destination;
    }

    public void setDestination(String destination) {
        this.destination = destination;
    }

    public Date getDate_course() {
        return date_course;
    }

    public void setDate_course(Date date_course) {
        this.date_course = date_course;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }
    
    
    public int getClientId() {
        return clientId;
    }

    public void setClientId(int clientId) {
        this.clientId = clientId;
    }

    public int getPartenaireId() {
        return partenaireId;
    }

    public void setPartenaireId(int partenaireId) {
        this.partenaireId = partenaireId;
    }

    @Override
    public String toString() {
        return "Courses{" + "id=" + id + ", depart=" + depart + ", destination=" + destination + ", date_course=" + date_course + ", prix=" + prix + ", clientId=" + clientId + ", partenaireId=" + partenaireId + '}';
    }
    
    
    
    
}
