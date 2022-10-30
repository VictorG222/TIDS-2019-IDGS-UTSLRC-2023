// PRACTICA #4 VICTOR GALVAN

//Se declaran las variables (elementos)
int led = 12;
int pulsador = 13;
int pulsador2 = 3;

void setup() {
  pinMode(led, OUTPUT);
  pinMode(pulsador, INPUT);
  pinMode(pulsador2, INPUT);

}

void loop() {
  if(digitalRead(pulsador)==1){
    digitalWrite(led, HIGH);
    }
  else if(digitalRead(pulsador2)==1){
    digitalWrite(led, LOW);
    }
}
