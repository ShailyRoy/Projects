//digitalPin
int button= 2;
#define laser 5
#define fan 6
#define trig 7
#define echo 8
#define led 9
#define ledn 10

//analogpin
int sensorPin1=A5;
int sensorPin2=A0;
int sensorpin3=A4;
int potentiometer=A2;
int tempPin=A3;


//variables
int sensorcome=0;
int sensornight=0;
int sensorl=0;
int buttonstate;
int maxR=15;
int minR=0;
int l=0,s=0;
int people=2;
long duration,distance;
int p1=0,m1=0,p2=0,m2=0;
int potvalue=0;




int bb=0;

//temp
float tempC;
int reading;

void setup() {
  analogReference(INTERNAL);
  Serial.begin(9600);
  pinMode(trig,OUTPUT);
  pinMode(echo,INPUT);
  pinMode(led,OUTPUT);
   pinMode(ledn,OUTPUT);
  pinMode(button,INPUT);
  pinMode(laser,OUTPUT);
  pinMode(sensorPin1,INPUT);
}

void loop() {
 Serial.print("people ");
 Serial.println(people);
 digitalWrite(laser,HIGH);
 
 //sonar
 digitalWrite(trig,LOW);
 delayMicroseconds(2);

 digitalWrite(trig,HIGH);
 delayMicroseconds(10); 

 digitalWrite(trig,LOW);
 duration=pulseIn(echo,HIGH);
 distance=duration/58.2;
 Serial.print("sonar distance ");
 Serial.println(distance);


//ldr
sensorcome=analogRead(sensorPin1);
Serial.print("ldr come ");
Serial.println(sensorcome);


//ldr light
sensorl=analogRead(sensorpin3);
Serial.print("ldr of light ");
Serial.println(sensorl);


//coming detection

if(sensorcome<50&&s==0){
 l++;
 m1=0;
 p1=1;
}

else
 p1=0;

if(distance<maxR&&l>=1){
  people++;
  if(l>0)
    l--;
  m1=1;
 }

if(p1==1&&m1==0)
{
 if(l>0)
  l--;
}

//going detection
if(distance<maxR&&l==0)
{
  s++;
  p2=1;
  m2=1;
}

else
p2=0;

if(sensorcome<400&&s>=1){
 if(people>0)
   people--;

 if(s>0)
  s--;
  m2=0;
 }

if(p2==1&&m2==1)
{
  if(s>0) 
   s--;
}


//temperature sensor
reading=analogRead(tempPin);
tempC=reading /9.31;
Serial.println(tempC);
delay(1000);

//people counting
if(people==0){
 digitalWrite(led,LOW);
 digitalWrite(fan,LOW);
 bb=0;
}

else if(people>0){
  if(sensorl<200)
  digitalWrite(led,HIGH);
  else
    digitalWrite(led,LOW);
  if(tempC>=18)
  digitalWrite(fan,HIGH);
  else 
  digitalWrite(fan,LOW);
  bb=1;
}


//ldrnight
sensornight=analogRead(sensorPin2);
Serial.print("night ");
Serial.println(sensornight);

if(sensornight<70){
  digitalWrite(ledn,HIGH);
}
else { 
 digitalWrite(ledn,LOW);
}

//pushbutton
buttonstate=digitalRead(button);

if(buttonstate==HIGH)
{
 if(bb==1){
   digitalWrite(led,LOW);
  }
  
 else {
  digitalWrite(led,HIGH);
}
}
}



