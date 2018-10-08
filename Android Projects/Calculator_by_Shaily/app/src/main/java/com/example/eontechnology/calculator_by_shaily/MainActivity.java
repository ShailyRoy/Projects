package com.example.eontechnology.calculator_by_shaily;

import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.example.eontechnology.calculator_by_shaily.R;


public class MainActivity extends ActionBarActivity implements View.OnClickListener {
    private Button btnAdd,btnsub,btndivide,btnmul;
    private TextView tvresult;
    private EditText etfirst,etsecond;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
       setContentView(R.layout.activity_main);
        init();
    }
private void init()
{
btnAdd=(Button)findViewById(R.id.btnAdd);
    btnsub=(Button)findViewById(R.id.btnSubtract);
    btndivide=(Button)findViewById(R.id.btnDivide);
    btnmul=(Button)findViewById(R.id.btnMultiply);
    etfirst=(EditText)findViewById(R.id.etFirstNumber);
    etsecond=(EditText)findViewById(R.id.etSecondNumber);
    tvresult=(TextView)findViewById(R.id.tvResult);


    btnAdd.setOnClickListener(this);
    btnsub.setOnClickListener(this);
    btndivide.setOnClickListener(this);
    btnmul.setOnClickListener(this);
}


    @Override
    public void onClick(View view) {

        EditText num1, num2;
        num1=(EditText)findViewById(R.id.etFirstNumber);
        num2=(EditText)findViewById(R.id.etSecondNumber);
        Double num1Value=Double.parseDouble(num1.getText());
        Double num2Value=Double.parseDouble(num2.getText());
        switch (view.getId()) {
        case R.id.btnAdd:

            double addition = Double.parseDouble(num1) + Double.parseDouble(num2);
            tvresult.setText(addition);
            break;

        case R.id.btnSubtract:
            double subtract = Double.parseDouble(num1) - Double.parseDouble(num2);
            tvresult.setText(subtract);
            break;

        case R.id.btnDivide:
            try{
                double divide = Double.parseDouble(num1) / Double.parseDouble(num2);
                tvresult.setText(divide);

            }catch(Exception e)
            {

                tvresult.setText("Cannot be Divided !");
            }
            break;
        case R.id.btnMultiply:
    double multi = Double.parseDouble(num1) * Double.parseDouble(num2);
    tvresult.setText(multi));
    break;
}
    }
}
