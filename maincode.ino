void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
 pinMode(5,OUTPUT);
  pinMode(2,OUTPUT);
  pinMode(3,OUTPUT);
  pinMode(4,OUTPUT);
  Serial.begin(9600);
  digitalWrite(10,HIGH);
  
}

void loop() {
  // put your main code here, to run repeatedly:
  
 while(Serial.available())
  {
    String str1=Serial.readString();
    String str2=Serial.readString();
    String str3=Serial.readString();
    String str4=Serial.readString();
    String str5=Serial.readString();
  
    str1=Serial.readString();
    str2=Serial.readString();
    str3=Serial.readString();
    str4=Serial.readString();
    if(str1=="on")
      digitalWrite(1,HIGH);
      
    else if(str1=="off")
      digitalWrite(5,LOW);
    if(str2=="on")
      digitalWrite(2,HIGH);
    else if(str2=="off")
      digitalWrite(2,LOW);
    if(str3=="on")
      digitalWrite(3,HIGH);
    else  if(str3=="off")
      digitalWrite(3,LOW);
    if(str4=="on")
      digitalWrite(4,HIGH);
    else if(str4=="off")
      digitalWrite(4,LOW);
    str5=Serial.readString();
    delay(2000);
//    if(str5=="DEVICE1")
//      digitalWrite(5,HIGH);
//    else if(str5=="DEVICE2")
//      digitalWrite(2,HIGH);
//    else if(str5=="DEVICE2")
//      digitalWrite(3,HIGH);
//    else if(str5=="DEVICE3")
//      digitalWrite(4,HIGH);
     
  }}
