//PRACTICA #6 TI4-3 VICTOR GALVAN
//Declaramos las variables
int verde = 13;
int amarillo = 12;
int rojo = 11;
int verde2 = 2;
int amarillo2 = 3;
int rojo2 = 5;
int tiempo = 100;

void setup() {
 //Declaramos las salidas de los dos semaforos
  pinMode(verde, OUTPUT);
  pinMode(amarillo, OUTPUT);
  pinMode(rojo, OUTPUT);
  pinMode(verde2, OUTPUT);
  pinMode(amarillo2, OUTPUT);
  pinMode(rojo2, OUTPUT);
}
void loop() {
  //Escribimos el codigo para el funcionamiento de los dos semaforos simultaneamente
  digitalWrite(verde, HIGH);
  digitalWrite(rojo2, HIGH);
  delay(1000);
  //Utilizamos un for para el parpadeo del verde1
  for(int i = 0; i<=6; i++){
      delay(tiempo);
      digitalWrite(verde, HIGH);
      delay(tiempo);
      digitalWrite(verde, LOW);
    }
  digitalWrite(amarillo, HIGH);
  delay(500);
  digitalWrite(amarillo, LOW);
  digitalWrite(rojo, HIGH);
  digitalWrite(rojo2, LOW);
  digitalWrite(verde2, HIGH);
  delay(1000);
  digitalWrite(rojo, LOW);
  digitalWrite(verde2, HIGH);
  digitalWrite(rojo, HIGH);
  delay(1000);
  //Utilizamos un for para el parpadeo del verde2
  for(int i = 0; i<=6; i++){
      delay(tiempo);
      digitalWrite(verde2, HIGH);
      delay(tiempo);
      digitalWrite(verde2, LOW); 
    }
  digitalWrite(amarillo2, HIGH);
  delay(500);
  digitalWrite(amarillo2, LOW);
  digitalWrite(rojo2, HIGH);
  digitalWrite(rojo, LOW);
  digitalWrite(verde, HIGH);
  delay(1000);
  digitalWrite(rojo2, LOW);
  digitalWrite(verde, HIGH);
}
