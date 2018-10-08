package com.example.eontechnology.cngrentcheckbyshaily;

import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;


public class RentCheck extends ActionBarActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_rent_check);
    }

    public void onAddClick(View a){
        if(a.getId()==R.id.button01){
            EditText a1=(EditText)findViewById(R.id.Tfnumber1);
            EditText a2=(EditText)findViewById(R.id.Tfnumber2);

            double ans=0, num1=0,num2=0;
            num1=Double.parseDouble(a1.getText().toString());
            num2=Double.parseDouble(a2.getText().toString());
if(num1>=2) {
    ans = 40 + ((num1 - 2) * 12.00) + num2 * 2.00 ;
}
            else
     ans=40+ num2 * 2.00 ;
            TextView t =(TextView)findViewById(R.id.Tvresult);

            t.setText("Total Rent= "+ans+" taka");
        }

    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_rent_check, menu);
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
}
