package com.example.eontechnology.family;

import android.content.Intent;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;


public class MainActivity2Activity extends ActionBarActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_activity2);
        setSwitchButton2();
        setSwitchButton3();
        setSwitchButton4();
        setSwitchButton5();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main_activity2, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    private void setSwitchButton2() {
        Button SwitchButton2 = (Button) findViewById(R.id.btnSwitch2);
        SwitchButton2.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Toast.makeText(MainActivity2Activity.this, "u clicked it!", Toast.LENGTH_LONG).show();
                startActivity(new Intent(MainActivity2Activity.this, MainActivity22Activity.class));
            }
        });
    }

    private void setSwitchButton3() {
        Button SwitchButton3 = (Button) findViewById(R.id.btnSwitch3);
        SwitchButton3.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Toast.makeText(MainActivity2Activity.this, "u clicked it!", Toast.LENGTH_LONG).show();
                startActivity(new Intent(MainActivity2Activity.this, MainActivity23Activity.class));
            }
        });
    }

    private void setSwitchButton5() {
        Button SwitchButton5 = (Button) findViewById(R.id.btnSwitch5);
        SwitchButton5.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Toast.makeText(MainActivity2Activity.this, "u clicked it!", Toast.LENGTH_LONG).show();
                startActivity(new Intent(MainActivity2Activity.this, He.class));
            }
        });
    }


    private void setSwitchButton4() {
        Button SwitchButton4 = (Button) findViewById(R.id.btnSwitch4);
        SwitchButton4.setOnClickListener(new View.OnClickListener() {

            public void onClick(View v) {

                Toast.makeText(MainActivity2Activity.this, "u clicked it!", Toast.LENGTH_LONG).show();
                startActivity(new Intent(MainActivity2Activity.this, MainActivity24Activity.class));
            }
        });
    }
}
