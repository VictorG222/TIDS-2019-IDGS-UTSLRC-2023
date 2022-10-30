//PRACTICA #9 TI4-3 VICTOR GALVAN
//Declaramos las variables
int valorFR = 0;
int ldr = A0;
int led = 9;
void setup() {
  Serial.begin(9600);
  //Declaramos la entrada de la fotorresistencia
  pinMode(ldr, INPUT);
  //Declaramos la salida del led
  pinMode(led, OUTPUT);
}
void loop() {
  //Leemos los valores de la fotorresistencia
  valorFR = analogRead(ldr);
  //Imprimimos los valores de la fotorresistencia
  Serial.println(valorFR);
  //En base a los valores de la resistencia apagamos o prendemos el led
  if(valorFR>1000){
    digitalWrite(led, HIGH);
    }
  else{
    digitalWrite(led, LOW);
    }
  delay(500);
}
