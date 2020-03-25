/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package desktop.Service;

import desktop.Entite.InventaireR;
import desktop.Entite.commissionR;
import desktop.Entite.reservation;
import desktop.Utils.DataBase;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Properties;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.mail.Message;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import static javax.swing.UIManager.getInt;

/**
 *
 * @author anest
 */
public class ServiceReservation {

    private Connection con;
    private Statement ste;
    private PreparedStatement pre;

    public ServiceReservation() {
        con = DataBase.getInstance().getConnection();
    }

    public int countNottraited() throws SQLException {
        String req = "select count(*) AS total from reservation where etat ='non traite'";
        ste = con.createStatement();
        ResultSet rs = ste.executeQuery(req);
        rs.next();
        int count = rs.getInt(1);
        System.out.println(count);
        return count;
    }

    public void Accept(int id) throws SQLException {
        pre = con.prepareStatement("update `pidev`.`reservation` set etat='accepté' where id =(?)");
        pre.setInt(1, id);
        pre.executeUpdate();
        System.out.println("ok");

    }

    public void refuse(int id) throws SQLException {
        pre = con.prepareStatement("update `pidev`.`reservation` set etat='refusé' where id =(?)");
        pre.setInt(1, id);
        pre.executeUpdate();
        System.out.println("ok");

    }

    public int counttraited() throws SQLException {
        String req = "select count(*) AS total from reservation where etat !='non traite'";
        ste = con.createStatement();
        ResultSet rs = ste.executeQuery(req);
        rs.next();
        int count = rs.getInt(1);
        System.out.println(count);
        return count;
    }

    public int ajouter(reservation R) throws SQLException {
     java.sql.Date sqlDate = java.sql.Date.valueOf(R.getDate_reservation().toLocalDate());
        pre = con.prepareStatement("INSERT INTO `pidev`.`reservation` ( `client_id`,`partenaire_id`,`pointAchat`,`destination`,`date`,`prix`,`listAchats`,`remarques`) VALUES ( ?, ?,?,?,?,?,?,?);");
    pre.setInt(1, R.getClient_id());
    pre.setInt(2, R.getPartenaire_id());
    pre.setString(3, R.getPointAchat());
    pre.setString(4, R.getDestination());
    pre.setDate(5, sqlDate);
    pre.setFloat(6, R.getPrix()); 
       pre.setString(7, R.getListAchats());
    pre.setString(8, R.getRemarques());
        


       return( pre.executeUpdate());


    }

    public boolean delete(float montant, int id, int id_r) throws SQLException {

        ServiceInventaire I = new ServiceInventaire();
        if (I.compare(montant, id, id_r)) {
            pre = con.prepareStatement("delete from `pidev`.`reservation` where id = '" + id_r + "'");

            System.out.println(pre.execute());
            return true;

        } else {
            return false;
        }
    }

    public boolean chercher(int id) throws SQLException {
        String req = "select * from reservation";
        List<Integer> list = new ArrayList<>();

        try {
            ste = con.createStatement();
            ResultSet rs = ste.executeQuery(req);
            while (rs.next()) {
                list.add(rs.getInt(1));

            }
        } catch (SQLException ex) {
            Logger.getLogger(ServiceReservation.class.getName()).log(Level.SEVERE, null, ex);
        }

        return list.contains(id);
    }

    public List<reservation> readTraited() throws SQLException {
        String req = "select * from reservation where etat!='non traite'";
        List<reservation> list = new ArrayList<>();

        try {
            ste = con.createStatement();
            ResultSet rs = ste.executeQuery(req);
            while (rs.next()) {
   java.sql.Date sqlDate = java.sql.Date.valueOf(rs.getDate(6).toLocalDate());
                list.add(new reservation(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getString(5),  sqlDate, rs.getFloat(7), rs.getString(8), rs.getString(9), rs.getString(10)));

            }
        } catch (SQLException ex) {
            Logger.getLogger(ServiceReservation.class.getName()).log(Level.SEVERE, null, ex);
        }

        return list;
    }

    public List<reservation> readNottraited() throws SQLException {
        String req = "select * from reservation where etat ='non traite'";
        List<reservation> list = new ArrayList<>();

        try {
            ste = con.createStatement();
            ResultSet rs = ste.executeQuery(req);
            while (rs.next()) {
   java.sql.Date sqlDate = java.sql.Date.valueOf(rs.getDate(6).toLocalDate());
                list.add(new reservation(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getString(5),sqlDate, rs.getFloat(7), rs.getString(8), rs.getString(9), rs.getString(10)));

            }
        } catch (SQLException ex) {
            Logger.getLogger(ServiceReservation.class.getName()).log(Level.SEVERE, null, ex);
        }

        return list;
    }

    public List<reservation> details(int id) throws SQLException {

        String req = "select * from reservation where id ='" + id + "'";

        List<reservation> list = new ArrayList<>();

        try {
            ste = con.createStatement();

            ResultSet rs = ste.executeQuery(req);
            while (rs.next()) {

                list.add(new reservation(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getString(5), rs.getDate(6), rs.getFloat(7), rs.getString(8), rs.getString(9), rs.getString(10)));

            }
        } catch (SQLException ex) {
            Logger.getLogger(ServiceReservation.class.getName()).log(Level.SEVERE, null, ex);
        }

        return list;
    }

    public reservation details2(int id) throws SQLException {

        String req = "select * from reservation where id ='" + id + "'";

        reservation R = null;
        ste = con.createStatement();

        ResultSet rs = ste.executeQuery(req);

        while (rs.next()) {
            R = new reservation(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getString(5), rs.getDate(6), rs.getFloat(7), rs.getString(8), rs.getString(9), rs.getString(10));

        }

        return R;
    }

    public void restaurer(int id) throws SQLException {
        pre = con.prepareStatement("update `pidev`.`reservation` set etat='non traité' where id =(?)");
        pre.setInt(1, id);
        pre.executeUpdate();
        System.out.println("ok");

    }
    
    public boolean envoyerMail(String fromMail ,String toMail)
    {
        
        try{
            String host ="smtp.gmail.com" ;
            String user = "twasalniapp@gmail.com";
            String pass = "twasalni123";
            String to = toMail;
            String from = "Twasalni?";
            String subject = "Reservation Taxi";
            String messageText ="Votre Reservation est confirmé , merci ";
            boolean sessionDebug = false;

            Properties props = System.getProperties();

            props.put("mail.smtp.starttls.enable", "true");
            props.put("mail.smtp.host", host);
            props.put("mail.smtp.port", "587");
            props.put("mail.smtp.auth", "true");
            props.put("mail.smtp.starttls.required", "true");

            java.security.Security.addProvider(new com.sun.net.ssl.internal.ssl.Provider());
            Session mailSession = Session.getDefaultInstance(props, null);
            mailSession.setDebug(sessionDebug);
            Message msg = new MimeMessage(mailSession);
            msg.setFrom(new InternetAddress(from));
            InternetAddress[] address = {new InternetAddress(to)};
            msg.setRecipients(Message.RecipientType.TO, address);
            msg.setSubject(subject); msg.setSentDate(new java.util.Date());
            msg.setText(messageText);

           Transport transport=mailSession.getTransport("smtp");
           transport.connect(host, user, pass);
           
           transport.sendMessage(msg, msg.getAllRecipients());
           System.out.println("message send successfully");
     
       //    transport.close();
         return   transport.isConnected();
       
        
        }catch(Exception ex)
        {
            System.out.println(ex);
        }
        
        return false;
 
    }
    
    
}
