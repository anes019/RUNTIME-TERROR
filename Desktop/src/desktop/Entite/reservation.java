/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package desktop.Entite;
import java.util.Date;
import java.util.Objects;
/**
 *
 * @author anest
 */
public class reservation {
    private int id;
    private int partenaire_id;
    private int client_id;
    private String pointAchat;
    private String destination;
    private String listAchats;
    private String remarques;
    private float prix;
    private Date date_reservation;
    private String etat;
    

    public reservation(int id,int client_id, int partenaire_id,  String pointAchat, String destination, Date date_reservation ,float prix , String listAchats, String remarques,  String etat) {
        this.id = id;
        this.partenaire_id = partenaire_id;
        this.client_id = client_id;
        this.pointAchat = pointAchat;
        this.destination = destination;
        this.listAchats = listAchats;
        this.remarques = remarques;
        this.prix = prix;
        this.date_reservation = date_reservation;
        this.etat = etat;
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

    public Date getDate_reservation() {
        return date_reservation;
    }

    public void setDate_reservation(Date date_reservation) {
        this.date_reservation = date_reservation;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    @Override
    public int hashCode() {
        int hash = 3;
        hash = 61 * hash + this.id;
        hash = 61 * hash + this.partenaire_id;
        hash = 61 * hash + this.client_id;
        hash = 61 * hash + Objects.hashCode(this.pointAchat);
        hash = 61 * hash + Objects.hashCode(this.destination);
        hash = 61 * hash + Objects.hashCode(this.listAchats);
        hash = 61 * hash + Objects.hashCode(this.remarques);
        hash = 61 * hash + Float.floatToIntBits(this.prix);
        hash = 61 * hash + Objects.hashCode(this.date_reservation);
        hash = 61 * hash + Objects.hashCode(this.etat);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final reservation other = (reservation) obj;
        if (this.id != other.id) {
            return false;
        }
        if (this.partenaire_id != other.partenaire_id) {
            return false;
        }
        if (this.client_id != other.client_id) {
            return false;
        }
        if (Float.floatToIntBits(this.prix) != Float.floatToIntBits(other.prix)) {
            return false;
        }
        if (this.etat != other.etat) {
            return false;
        }
        if (!Objects.equals(this.pointAchat, other.pointAchat)) {
            return false;
        }
        if (!Objects.equals(this.destination, other.destination)) {
            return false;
        }
        if (!Objects.equals(this.listAchats, other.listAchats)) {
            return false;
        }
        if (!Objects.equals(this.remarques, other.remarques)) {
            return false;
        }
        if (!Objects.equals(this.date_reservation, other.date_reservation)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "reservation{" + "id=" + id + ", partenaire_id=" + partenaire_id + ", client_id=" + client_id + ", pointAchat=" + pointAchat + ", destination=" + destination + ", listAchats=" + listAchats + ", remarques=" + remarques + ", prix=" + prix + ", date_reservation=" + date_reservation + ", etat=" + etat + '}';
    }
    




}
