package com.example.eontechnology.family;

import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import java.net.URI;


public class MainActivity22Activity extends ActionBarActivity {
    private Button makeTheCall;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_activity22);


        Button callButton= (Button)findViewById(R.id.callButton);

        callButton.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                try {
                    Intent intent = new Intent(Intent.ACTION_CALL);
                    intent.setData(Uri.parse("tel:+8801725181326"));
                    startActivity(intent);
                } catch (Exception e) {
                    Log.e("Demo application", "Failed to invoke call", e);
                }
            }
        });
    }
}
