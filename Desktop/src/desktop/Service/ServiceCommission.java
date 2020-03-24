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
public class ServiceCommission {

    private Connection con;
    private Statement ste;
    private PreparedStatement pre;

    public ServiceCommission() {
        con = DataBase.getInstance().getConnection();
    }

    public float pourcentage(int id) throws SQLException {
        String req = "select pourcentage  from commission_r  where reservation_id='" + id + "'";

        ste = con.createStatement();

        ResultSet rs = ste.executeQuery(req);
        rs.next();
        float pourcentage = rs.getFloat(1);
        System.out.print("pppppppp");
        System.out.println(pourcentage);
        return pourcentage;
    }

    public boolean delete_comm(int id) throws SQLException {

        pre = con.prepareStatement("delete from commission_r where reservation_id=(?)");
        pre.setInt(1, id);
        System.out.println(pre.execute());
        return true;
    }
}
