//PRACTICA #10 TI4-3 VICTOR GALVAN
//Declaramos las variables
int valorFR = 0;
int ldr = A0;
int led = 11;
int buzzer = 9;
void setup() {
  Serial.begin(9600);
  //Declaramos la entrada de la fotorresistencia
  pinMode(ldr, INPUT);
  //Declaramos la salida del led y del buzzer
  pinMode(led, OUTPUT);
  pinMode(buzzer, OUTPUT);
}
void loop() {
  //Leemos los valores de la fotorresistencia
  valorFR = analogRead(ldr);
  if(valorFR > 1000){
    tone(buzzer,550);
    digitalWrite(led, HIGH);
    
    delay(100);
    noTone(buzzer);
    digitalWrite(led, LOW);
    delay(100);
    Serial.println("-------------ALARMA ACTIVADA------------------");
    
    }
  else{
    noTone(buzzer);
    digitalWrite(led, LOW);
    delay(100);
    Serial.println("-------------ALARMA DESACTIVADA------------------");
    }
   delay(500);
}
