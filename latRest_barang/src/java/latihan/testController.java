/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package latihan;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Produces;
import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

/**
 * REST Web Service
 *
 * @author hafid
 */
@Path("testController")
public class testController {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of TestController
     */
    public testController() {
    }
    
    @GET
    @Path("/getData")
    @Produces(MediaType.APPLICATION_JSON)
    public ArrayList<testModel> getData() throws ClassNotFoundException, SQLException{
        ArrayList<testModel> atm = new ArrayList<>();
        Connection conn = null;
        String username="root";
        String password="123456";
        String query="SELECT * FROM barang";
        Class.forName("com.mysql.cj.jdbc.Driver");
        conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/db_toko?useTimeZone=true&serverTimezone=UTC&autoReconnect=true&useSSL=false", username, password);
        Statement st=conn.createStatement();
        ResultSet rs=st.executeQuery(query);
        while (rs.next())
        {
          testModel tm = new testModel();
          tm.setId(rs.getInt("idbarang"));
          tm.setNamabarang(rs.getString("namabarang"));
          tm.setJumlahbarang(rs.getInt("jumlahbarang"));
          tm.setHargabarang(rs.getInt("harga"));
          atm.add(tm);
        }
//        String[] nim={"672019001","672019002","672019003"};
////        String[] nama={"Hafid Ahsani","Ahsan Hafid","Inasha Difah"};
//        double[] tagihan={3000,4000,5000};
        
//        for (int i = 0; i < tagihan.length; i++) {
//            testModel tm = new testModel();
//            tm.setNim(nim[i]);
//            tm.setNama(nama[i]);
//            tm.setTagihan(tagihan[i]);
//            
//            atm.add(tm);
//        }
        return atm;
    }
    
//    @POST
//    @Path("/postData")
//    @Produces(MediaType.APPLICATION_JSON)
//    public Response createProductInJSON(testModel tm){
//        String hasil="Data Berhasil Masuk: "+tm.getNim()+" - "+tm.getNama()+" - "+tm.getTagihan();
//        return Response.status(201).entity(hasil).build();
//    }
    
//    @POST
//    @Path("/cekLogin")
//    @Produces(MediaType.APPLICATION_JSON)
//    public String cekLogin(testModel tm){
//        if (tm.getNim().equals("672019001") && tm.getNama().equals("Hafid Ahsani")){
//            return "Sukses Login";
//        }else{
//            return "Gagal Login";
//        }
//    }
    /**
     * Retrieves representation of an instance of latihan.TestController
     * @return an instance of java.lang.String
     */
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public String getJson() {
        //TODO return proper representation object
        throw new UnsupportedOperationException();
    }

    /**
     * PUT method for updating or creating an instance of TestController
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(String content) {
    }
}
