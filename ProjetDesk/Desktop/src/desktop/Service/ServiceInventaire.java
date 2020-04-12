/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package desktop.Service;

import desktop.Utils.DataBase;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author anest
 */
public class ServiceInventaire {

    private Connection con;
    private Statement ste;
    private PreparedStatement pre;

    public ServiceInventaire() {
        con = DataBase.getInstance().getConnection();
    }

    public float Montant(int id) throws SQLException {
        String req = "select montant  from inventaire_r  where partenaire_id='" + id + "'";

        ste = con.createStatement();

        ResultSet rs = ste.executeQuery(req);
        rs.next();
        float montant = rs.getFloat(1);

        return montant;
    }

    public boolean compare(float prix, int id, int id_r) throws SQLException {
        ServiceCommission c = new ServiceCommission();
        float p = c.pourcentage(id_r);
        float v1 = Montant(id);
        float d = v1 -(prix * p);
        
        if (d == 0) {
            if (delete_inv(id)) {
                c.delete_comm(id_r);
                return true;
            }
        } else {
            if (update(d, id)) {
                c.delete_comm(id_r);
                return true;
            }
        }
        return false;
    }

    public boolean delete_inv(int id) throws SQLException {

        pre = con.prepareStatement("delete from inventaire_r where partenaire_id=(?)");
        pre.setInt(1, id);
        System.out.println(pre.execute());
        return true;
    }

    public boolean update(float d, int id) throws SQLException {
        pre = con.prepareStatement("update inventaire_r set montant='" + d + "' where partenaire_id='" + id + "'");
        pre.executeUpdate();
        System.out.println("ok");
        return true;
    }

}
