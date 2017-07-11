package com.ejemplo.crearjson;


import org.json.JSONException;
import org.json.JSONObject;

import android.os.Bundle;
import android.app.Activity;
import android.util.Log;
import android.widget.TextView;

public class MainActivity extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        
        

        JSONObject string = new JSONObject(); 
        
        try {
			string.put("nombre", "Luis");
			string.put("ciudad", "Bilbao");
			string.put("twitter", "@llberganza");
			
			TextView stringJSON = (TextView)findViewById(R.id.stringJSON);
        	
        	stringJSON.setText(string.toString());
			
		} catch (JSONException e) {
			e.printStackTrace();
		}
        

        try {
        	
        	String stringJSON = string.toString();
        	
        	JSONObject jsonObject = new JSONObject(stringJSON);
        	
        	String nombre = jsonObject.getString("nombre");
        	String ciudad = jsonObject.getString("ciudad");
        	String twitter = jsonObject.getString("twitter");
        	

        	String resultadoJSON = nombre + "\n" + ciudad + "\n" + twitter;
        	
        	TextView datos = (TextView)findViewById(R.id.datos);
        	
        	datos.setText(resultadoJSON);
        	
        	} catch (JSONException e) {
        		Log.i("ERROR","ERROR");
        	}
    }

}