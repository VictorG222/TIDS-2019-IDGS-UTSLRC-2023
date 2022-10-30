// PRACTICA RGB VICTOR GALVAN

//Se declaran las variables (elementos)
int ledR=7;
int ledG=8;
int ledB=12;

void setup() {
  pinMode(ledR,OUTPUT);
  pinMode(ledG,OUTPUT);
  pinMode(ledB,OUTPUT);
  // Se define el led como salida en el pin 12
}

void loop() {
  digitalWrite(ledR, HIGH);
  digitalWrite(ledB, HIGH);
  // funcion para prender el led 
}
