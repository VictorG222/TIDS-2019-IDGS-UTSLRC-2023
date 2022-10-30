//PRACTICA #6 TI4-3 VICTOR GALVAN
//Declaramos las variables
int verde = 13;
int amarillo=12;
int rojo = 11;
int tiempo = 300;
void setup() {
  //Declaramos las salidas
  pinMode(verde, OUTPUT);
  pinMode(amarillo, OUTPUT);
  pinMode(rojo, OUTPUT);
}
void loop() {
  //Escribimos el codigo para el funcionamiento de un semaforo
  digitalWrite(verde, HIGH);
  delay(4000);
  //Utilizamos un for para el parpadeo del verde
  for(int i = 0; i<=6; i++){
      delay(tiempo);
      digitalWrite(verde, HIGH);
      delay(tiempo);
      digitalWrite(verde, LOW); 
    }
  digitalWrite(amarillo, HIGH);
  delay(2000);
  digitalWrite(amarillo, LOW);
  digitalWrite(rojo, HIGH);
  delay(4000);
  digitalWrite(rojo, LOW);
}
