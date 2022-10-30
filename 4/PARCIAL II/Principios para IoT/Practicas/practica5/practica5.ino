// PRACTICA #5 VICTOR GALVAN

//Se declaran las variables (elementos)
int led = 12;
int pulsador = 13;
int pulsador2 = 3;
int buzzer = 9;

void setup() {
  //Se indican cuales elementos seran de entrada y cuales de salida
  pinMode(led, OUTPUT);
  pinMode(buzzer, OUTPUT);
  pinMode(pulsador, INPUT);
  pinMode(pulsador2, INPUT);

}

void loop() {
  if(digitalRead(pulsador)==1){
    //Si es presionado pulsador2 se prenderan el led y el buzzer
    digitalWrite(led, HIGH);
    digitalWrite(buzzer, HIGH);
    }
  else if(digitalRead(pulsador2)==1){
    //Si es presionado pulsador2 se apagaran el led y el buzzer
    digitalWrite(led, LOW);
    digitalWrite(buzzer, LOW);
    }
}
