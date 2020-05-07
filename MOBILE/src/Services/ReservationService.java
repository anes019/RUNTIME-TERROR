/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import ENTITE.RESERVATION;
import ENTITE.User;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.List;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Map;

/**
 *
 * @author anest
 */
public class ReservationService {
     public ArrayList<RESERVATION> Reservations;
    
    public static ReservationService instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ReservationService() {
         req = new ConnectionRequest();
    }

    public static ReservationService getInstance() {
        if (instance == null) {
            instance = new ReservationService();
        }
        return instance;
    }

    public boolean addReservation(RESERVATION R) {
        String url = Statics.BASE_URL + "/NEW/RESERVATION?partenaire="+R.getPartenaire_id()+"&point_vente="+R.getPointAchat()+"&to="+R.getDestination()+"&produit="+R.getListAchats()+"&id_client="+R.getClient_id()+"&remarques="+R.getRemarques()+"&date="+R.getDate_reservation(); //création de l'URL
        //System.out.println(R.getPartenaire_id());
        //  System.out.println(R.getClient_id());
         // System.out.println(R.getDate_reservation());
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons terminé de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle méthode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistré et donc éxécuté même si 
                la réponse reçue correspond à une autre URL(get par exemple)*/
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
        public boolean updateReservation(RESERVATION R) {
        String url = Statics.BASE_URL + "/UPDATE/RESERVATION?id="+R.getId()+"&point_vente="+R.getPointAchat()+"&to="+R.getDestination()+"&produit="+R.getListAchats()+"&remarques="+R.getRemarques(); //création de l'URL
        //System.out.println(R.getPartenaire_id());
        //  System.out.println(R.getClient_id());
         // System.out.println(R.getDate_reservation());
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons terminé de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle méthode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistré et donc éxécuté même si 
                la réponse reçue correspond à une autre URL(get par exemple)*/
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
        public boolean DeleteReservation(int id) {
        String url = Statics.BASE_URL + "/deleteReservation/"+id; //création de l'URL
        //System.out.println(R.getPartenaire_id());
        //  System.out.println(R.getClient_id());
         // System.out.println(R.getDate_reservation());
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons terminé de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle méthode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistré et donc éxécuté même si 
                la réponse reçue correspond à une autre URL(get par exemple)*/
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public ArrayList<RESERVATION> parseReservations(String jsonText){
        try {
            Reservations=new ArrayList<>();
            JSONParser j = new JSONParser();// Instanciation d'un objet JSONParser permettant le parsing du résultat json

            /*
                On doit convertir notre réponse texte en CharArray à fin de
            permettre au JSONParser de la lire et la manipuler d'ou vient 
            l'utilité de new CharArrayReader(json.toCharArray())
            
            La méthode parse json retourne une MAP<String,Object> ou String est 
            la clé principale de notre résultat.
            Dans notre cas la clé principale n'est pas définie cela ne veux pas
            dire qu'elle est manquante mais plutôt gardée à la valeur par defaut
            qui est root.
            En fait c'est la clé de l'objet qui englobe la totalité des objets 
                    c'est la clé définissant le tableau de tâches.
            */
    Map<String,Object> ReservationsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
              /* Ici on récupère l'objet contenant notre liste dans une liste 
            d'objets json List<MAP<String,Object>> ou chaque Map est une tâche.               
            
            Le format Json impose que l'objet soit définit sous forme
            de clé valeur avec la valeur elle même peut être un objet Json.
            Pour cela on utilise la structure Map comme elle est la structure la
            plus adéquate en Java pour stocker des couples Key/Value.
            
            Pour le cas d'un tableau (Json Array) contenant plusieurs objets
            sa valeur est une liste d'objets Json, donc une liste de Map
            */
              
           java.util.List<Map<String,Object>> list = (java.util.List<Map<String,Object>>)ReservationsListJson.get("root");
            
            //Parcourir la liste des tâches Json
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                RESERVATION R= new RESERVATION();
                float id = Float.parseFloat(obj.get("id").toString());
                R.setId((int)id);
                R.setDestination(obj.get("destination").toString());
                R.setPointAchat(obj.get("pointAchat").toString());
                R.setListAchats(obj.get("listAchats").toString());
                //  R.setClient((User) obj.get("client").get("id"));
                //R.setPartenaire_id((int) obj.get("partenaire_id"));
               
                R.setRemarques(obj.get("remarques").toString());
                R.setEtat(obj.get("etat").toString());
                  

                

                //Ajouter la tâche extraite de la réponse Json à la liste
                Reservations.add(R);
            }
            
            
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
        */
        return Reservations;
    }
    
    public ArrayList<RESERVATION> getAllRESERVATIONS(int id){
        String url = Statics.BASE_URL+"/ALLRESERVATION/"+id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Reservations = parseReservations(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Reservations;
    }
}
