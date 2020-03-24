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
public class commissionR {
      private int id;
    private int partenaire_id;
    private int reservation_id;
    private int inventaire_id;
    private float pourcentage;
    private Date date_commission;

    public commissionR(int id, int partenaire_id, int reservation_id, int inventaire_id, float pourcentage, Date date_commission) {
        this.id = id;
        this.partenaire_id = partenaire_id;
        this.reservation_id = reservation_id;
        this.inventaire_id = inventaire_id;
        this.pourcentage = pourcentage;
        this.date_commission = date_commission;
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

    public int getReservation_id() {
        return reservation_id;
    }

    public void setReservation_id(int reservation_id) {
        this.reservation_id = reservation_id;
    }

    public int getInventaire_id() {
        return inventaire_id;
    }

    public void setInventaire_id(int inventaire_id) {
        this.inventaire_id = inventaire_id;
    }

    public float getPourcentage() {
        return pourcentage;
    }

    public void setPourcentage(float pourcentage) {
        this.pourcentage = pourcentage;
    }

    public Date getDate_commission() {
        return date_commission;
    }

    public void setDate_commission(Date date_commission) {
        this.date_commission = date_commission;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 59 * hash + this.id;
        hash = 59 * hash + this.partenaire_id;
        hash = 59 * hash + this.reservation_id;
        hash = 59 * hash + this.inventaire_id;
        hash = 59 * hash + Float.floatToIntBits(this.pourcentage);
        hash = 59 * hash + Objects.hashCode(this.date_commission);
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
        final commissionR other = (commissionR) obj;
        if (this.id != other.id) {
            return false;
        }
        if (this.partenaire_id != other.partenaire_id) {
            return false;
        }
        if (this.reservation_id != other.reservation_id) {
            return false;
        }
        if (this.inventaire_id != other.inventaire_id) {
            return false;
        }
        if (Float.floatToIntBits(this.pourcentage) != Float.floatToIntBits(other.pourcentage)) {
            return false;
        }
        if (!Objects.equals(this.date_commission, other.date_commission)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "commissionR{" + "id=" + id + ", partenaire_id=" + partenaire_id + ", reservation_id=" + reservation_id + ", inventaire_id=" + inventaire_id + ", pourcentage=" + pourcentage + ", date_commission=" + date_commission + '}';
    }
   
    
    
}
