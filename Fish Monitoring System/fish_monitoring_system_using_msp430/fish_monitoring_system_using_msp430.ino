#include <defMSP430USB.h>
#include <descriptors.h>
#include <device.h>
#include <HAL_MACROS.h>
#include <HAL_TLV.h>
#include <HAL_UCS.h>
#include <types.h>
#include <usb.h>
#include <UsbCdc.h>
#include <usbConstructs.h>
#include <UsbIsr.h>
#include <USBSerial.h>

#include <driverlib.h>

#include <Servo.h> 
#include <SoftwareSerial.h>
#define CRLF "\r\n"
//servo 

SoftwareSerial bt(P1.1,P1.2);

Servo myservo;  // create servo object to control a servo 
                // a maximum of eight servo objects can be created 
 
int pos = 0;    // variable to store the servo position 

long FISHFEEDER = 60; //43200000; // 12 hours in ms between feeding
long endtime; 
long now;



//LDR
int sensorPin = A0; // select the input pin for LDR 
int sensorValue = 0; 


//force
int pressurePin = A3;
int force;
int LEDpin = 12;




void setup() 
{ 
 //force
 Serial.begin(9600);
 pinMode(LEDpin, OUTPUT); 
 pinMode(RED_LED, OUTPUT); 
 pinMode(GREEN_LED, OUTPUT);
  
    digitalWrite(LEDpin, LOW);
    digitalWrite(GREEN_LED, LOW);
 
 //servo
 myservo.attach(11);  // attaches the servo on pin 9 to the servo object 
  
  myservo.write(0);
}
void loop() 
{ 

  Serial.print("hi");
  // ldr

  sensorValue = analogRead(sensorPin); // read the value from the sensor 
  Serial.println(sensorValue); //prints the values coming from the sensor on the screen 
  delay(100); 
  
  //servo
  now = millis();
  endtime = now + FISHFEEDER;
  
  while(now < endtime) {
   myservo.write(0);
   delay(1000);
   now = millis();   
  }

  myservo.write(180);
  delay(10000);

  for(pos = 0; pos < 180; pos += 1)  // goes from 0 degrees to 180 degrees 
  {                                  // in steps of 1 degree 
    myservo.write(pos);              // tell servo to go to position in variable 'pos' 
    delay(50);                       // waits 15ms for the servo to reach the position 
  } 
  for(pos =180; pos>=0; pos-=1)     // goes from 180 degrees to 0 degrees 
  {                                
    myservo.write(pos);              // tell servo to go to position in variable 'pos' 
    delay(50);                       // waits 15ms for the servo to reach the position 
  } 

//force

 force = analogRead(pressurePin);
  Serial.println(force);
  if(force > 40)
  {
  digitalWrite(LEDpin, HIGH);
  }
else
{
  digitalWrite(LEDpin, LOW);
}
delay(100);

}
