// PRACTICA #13 TI 4-3 VICTOR GALVAN
float teamp;
int lm35 = A0;

void setup() {
  Serial.begin(9600);
  
}

void loop() {
  
    temp = analogRead(lm35);
    temp= (5.0 * temp * 100.0)/1024.0;
    
    //imprimimos la lecturas del sensor por medio de la consola
    Serial.print(temp);
    Serial.println("C");

    delay(1500);

}
