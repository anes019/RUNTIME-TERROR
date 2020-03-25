/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package desktop.Entite;

/**
 *
 * @author Arbi
 */
public class User {
    private int id;
    private String username;
    private String email;
    private String role;
    private String nom;
    private String prenom;

    public User(int id,String username, String email, String role, String nom, String prenom) {
        this.id = id;
        this.username = username;
        this.email = email;
        this.role = role;
        this.nom = nom;
        this.prenom = prenom;
    }

  

    public int getId() {
        return id;
    }

    /*public void setId(int id) {
        this.id = id;
    }*/

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }
    
    
    
}
