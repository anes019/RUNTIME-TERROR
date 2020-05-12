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
         public static userService  instance=null;
  public ArrayList<User> users;
               public User ti=new User();

    private userService() {
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
    
}
