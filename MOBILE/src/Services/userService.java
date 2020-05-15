/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import ENTITE.User;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author hazem
 */
public class userService {
    private ConnectionRequest req;
    private boolean resultOK;
         public static userService  instance=null;
  public ArrayList<User> users;
               public User ti=new User();

    public userService() {
         req = new ConnectionRequest();
    }
    
     public static userService getInstance() {
        if (instance == null) {
            instance = new userService();
        }
        return instance;
    }
     

     
          public User parseUser(String jsonText){
       
                User u = new User();
              try {
            users=new ArrayList<>();
            JSONParser j = new JSONParser();
           
            Map<String,Object> UserListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

           if(UserListJson.isEmpty()==false)
           {
               
                float id = Float.parseFloat(UserListJson.get("id").toString());
                System.out.println(id);
                u.setId((int)id);
               
                u.setUsername(UserListJson.get("username").toString());
                u.setEmail(UserListJson.get("email").toString());
                u.setPassword(UserListJson.get("password").toString());
                u.setTelephone( UserListJson.get("telephone").toString());
                u.setRoles(UserListJson.get("roles").toString());
                users.add(u);
            
            }
            
        } catch (IOException ex) {
            
        }
        return u;
    }
     
         public User getUser(String username){
        String url = Statics.BASE_URL+"/USER/"+username;
      
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             
           
                ti = parseUser(new String(req.getResponseData()));
                
                req.removeResponseListener(this);
            
                        }

        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return ti;
    }
         
         
             
        public ArrayList<User> parseUsers(String jsonText){
             try {
            users=new ArrayList<>();
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
    Map<String,Object> UsersListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
              /* Ici on récupère l'objet contenant notre liste dans une liste 
            d'objets json List<MAP<String,Object>> ou chaque Map est une tâche.               
            
            Le format Json impose que l'objet soit définit sous forme
            de clé valeur avec la valeur elle même peut être un objet Json.
            Pour cela on utilise la structure Map comme elle est la structure la
            plus adéquate en Java pour stocker des couples Key/Value.
            
            Pour le cas d'un tableau (Json Array) contenant plusieurs objets
            sa valeur est une liste d'objets Json, donc une liste de Map
            */
              
           java.util.List<Map<String,Object>> list = (java.util.List<Map<String,Object>>)UsersListJson.get("root");
            
            //Parcourir la liste des tâches Json
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                User u= new User();
                float id = Float.parseFloat(obj.get("id").toString());
                u.setId((int)id);
                u.setNom(obj.get("nom").toString());
                u.setPrenom(obj.get("prenom").toString());
             
                  

                

                //Ajouter la tâche extraite de la réponse Json à la liste
                 users.add(u);
            }
            
            
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
        */
        return users;
    }
         
         
    
        public ArrayList<User> getPartenaires(){
        String url = Statics.BASE_URL+"/PARTENAIRES";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                users = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return users;
    }
        public boolean createUser(User user) {
        String url = "http://localhost/RUNTIME-TERROR/TWASALNI/web/app_dev.php/ajout?&username="+user.getUsername()+"&email="+user.getEmail()+"&type="+user.getRoles()+"&nom="+user.getNom()+"&prenom="+user.getPrenom()+"&password="+user.getPassword()+"&telephone="+user.getTelephone();                       
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
    
}
