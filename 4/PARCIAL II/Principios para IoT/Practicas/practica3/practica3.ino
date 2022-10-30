// PRACTICA #3 VICTOR GALVAN

//Se declaran las variables (elementos)
int led = 12;
int pulsador = 13;

void setup() {
  pinMode(led, OUTPUT);
  // Se define el led como salida en el pin 12

  pinMode(pulsador, INPUT);
  // Se define el pulsador como entrada en el pin 13
  
}

void loop() {

  //se ejecutan las condiciones
  if(digitalRead(pulsador)==1){
    //si el pulsador esta presionado se prende el led
    digitalWrite(led, HIGH);
    }
  else{
    //si no esta presionado se apaga el led
    digitalWrite(led, LOW);
    }
}
