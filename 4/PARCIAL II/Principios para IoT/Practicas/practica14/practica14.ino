// PRACTICA #14 TI 4-3 VICTOR GALVAN
float temp;
int lm35 = A0;
int ledB = 11;

void setup() {
  Serial.begin(9600);
  pinMode(ledB, OUTPUT);
  
}

void loop() {
    //Leemos las temperaturas del sensor
    temp = analogRead(lm35);
    temp= (5.0 * temp * 100.0)/1024.0;


    //En base a los grados de la temperatura prendemos o apagamos el led
    if (temp < 25)
    {
     digitalWrite(ledB, HIGH);
    }
    else
    {
    digitalWrite(ledB, LOW);
    }

      
    //imprimimos la lecturas del sensor por medio de la consola
    Serial.print(temp);
    Serial.println("C");

    delay(1500);
    

}
