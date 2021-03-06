/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ENTITE;


public class User {
    private Integer  id;
    private String username;
    private String email;
    private String role;
    private String nom;
    private String prenom;
    private String password;
    private String telephone;
    private  String roles;
    

    public User(Integer id,String username, String email, String role, String nom, String prenom,String mobile) {
        this.id = id;
        this.username = username;
        this.email = email;
        this.role = role;
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
        this.telephone = mobile;
    }
    
    public User(Integer id,String username, String email, String role, String nom, String prenom,String password,String mobile) {
        this.id = id;
        this.username = username;
        this.email = email;
        this.role = role;
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
        this.telephone = mobile;
    }
    
    public User(String username, String email, String role, String nom, String prenom,String password,String mobile) {
        
        this.username = username;
        this.email = email;
        this.role = role;
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
        this.telephone = mobile;
    }
    


    public User(Integer id,String username, String email, String role, String nom, String prenom) {
        this.id = id;
        this.username = username;
        this.email = email;
        this.role = role;
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
 
    }

    public User() {
    
    }

    public String getRoles() {
        return roles;
    }

    public void setRoles(String roles) {
        this.roles = roles;
    }

  

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

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

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getTelephone() {
        return telephone;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }
    
    @Override
    public String toString() {
        return "User{" + "id=" + id + ", username=" + username + ", email=" + email + ", role=" + role + ", nom=" + nom + ", prenom=" + prenom + ", password=" + password + '}';
    }
        
    
}
