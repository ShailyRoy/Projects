package com.example.eontechnology.family;

import android.content.Intent;
import android.content.pm.ResolveInfo;
import android.net.MailTo;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;


public class MainActivity extends ActionBarActivity {

    private final String tag="demoButton";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        setSwitchButton();

    }

    private void setSwitchButton() {
        Button SwitchButton;
        SwitchButton = (Button)findViewById(R.id.btnSwitch);
        SwitchButton.setOnClickListener(new View.OnClickListener() {
    public void onClick(View v) {
        Toast.makeText(MainActivity.this,"u clicked it!", Toast.LENGTH_LONG).show();
        startActivity(new Intent(MainActivity.this, MainActivity2Activity.class));
    }
});
    }
}
