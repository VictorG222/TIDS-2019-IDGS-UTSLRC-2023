// PRACTICA #2 VICTOR GALVAN

//Se declaran las variables (elementos)
int led=12;

void setup() {
  pinMode(led,OUTPUT);
  // Se define el led como salida en el pin 12
}

void loop() {
  digitalWrite(led, HIGH);
  // funcion para prender el led
  delay(200);
  //retraso en miliseguendos
  digitalWrite(led, LOW);
  // funcion para apagar el led 
  delay(200);
  //retraso en miliseguendos
}
