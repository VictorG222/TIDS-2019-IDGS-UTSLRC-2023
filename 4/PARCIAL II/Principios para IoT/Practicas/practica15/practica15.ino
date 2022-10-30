// PRACTICA #15 TI 4-3 VICTOR GALVAN
float temp;
int lm35 = A0;
int ledB = 11;
int ledA = 12; 
int ledR = 13;

void setup() {
  Serial.begin(9600);
  pinMode(ledB, OUTPUT);
  pinMode(ledA, OUTPUT);
  pinMode(ledR, OUTPUT);
  
}

void loop() {
    //Leemos las temperaturas del sensor
    temp = analogRead(lm35);
    temp= (5.0 * temp * 100.0)/1024.0;


    //En base a los grados de la temperatura prendemos o apagamos los leds
    if (temp < 24)
    {
     digitalWrite(ledB, HIGH);
     digitalWrite(ledA, LOW);
     digitalWrite(ledR, LOW);
    }
    else if(temp >= 24 && temp < 27)
    {
    digitalWrite(ledB, LOW);
     digitalWrite(ledA, HIGH);
     digitalWrite(ledR, LOW);
    }
    else
    {
    digitalWrite(ledB, LOW);
    digitalWrite(ledA, LOW);
    digitalWrite(ledR, HIGH);
    }

      
    //imprimimos la lecturas del sensor por medio de la consola
    Serial.print(temp);
    Serial.println("C");

    delay(1500);
}
