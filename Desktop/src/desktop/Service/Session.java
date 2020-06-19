/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package desktop.Service;

/**
 *
 * @author nefou
 */
public class Session {
    private static int idSession;
    private static int taxi;

    public static int getIdSession() {
        return idSession;
    }

    public static void setIdSession(int idSession) {
        Session.idSession = idSession;
    }

    public static int getTaxi() {
        return taxi;
    }

    public static void setTaxi(int taxi) {
        Session.taxi = taxi;
    }
    
    
    
}
