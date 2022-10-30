//PRACTICA #8 TI4-3 VICTOR GALVAN

//Declaramos las variables
int valorFR = 0;
int ldr = A1;

void setup() {
  Serial.begin(9600);  
 //Declaramos la entrada de la fotorresistencia
  pinMode(ldr, INPUT);
}

void loop() {
  //Leemos los valores de la fotorresistencia
  valorFR = analogRead(ldr);

  //Imprimimos los valores de la fotorresistencia
  Serial.println(valorFR);
  
  delay(1000);
}
