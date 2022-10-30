//PRACTICA #11 TI4-3 VICTOR GALVAN
//Declaramos las variables
int valor = 0;
int pot = A0;
void setup() {
 //Declaramos la entrada del potenciometro
  pinMode(pot, INPUT);
  Serial.begin(9600);
  //Imprimimos un titulo en la consola
  Serial.println("--------Valores del potenciometro----------");
}
void loop() {
 //Leemos los valores de la fotorresistencia
 valor =analogRead(pot);
//Imprimimos los valores del potenciometro
 Serial.print("Valor = ");
 Serial.println(valor);
 delay(2000);
}
