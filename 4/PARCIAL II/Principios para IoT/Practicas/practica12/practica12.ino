//PRACTICA #12 TI4-3 VICTOR GALVAN
//Declaramos las variables
int valor = 0;
int pot = A0;
int led1 = 2;
int led2 = 3;
int led3 = 4;
int led4 = 5;
void setup() {
  Serial.begin(9600);
  Serial.println("--------Valores del potenciometro----------");
  //Declaramos la entrada del potenciometro y las salidas del los leds
  pinMode(pot, INPUT);
  pinMode(led1, OUTPUT);
  pinMode(led2, OUTPUT);
  pinMode(led3, OUTPUT);
  pinMode(led4, OUTPUT);
}
void loop() {
  //Leemos los valores del potenciometro
 valor =analogRead(pot);
 //Imprimimos los valores del potenciometro
 Serial.print("Valor = ");
 Serial.println(valor);
 //En base a los valores del potenciometro prendera cada led
 if(valor >=0 && valor<=255){
  digitalWrite(led1, HIGH);
  digitalWrite(led2, LOW);
  digitalWrite(led3, LOW);
  digitalWrite(led4, LOW);
  }
   if(valor >=256 && valor<=511){
  digitalWrite(led1, LOW);
  digitalWrite(led2, HIGH);
  digitalWrite(led3, LOW);
  digitalWrite(led4, LOW);
  }
   if(valor >=512 && valor<=767){
  digitalWrite(led1, LOW);
  digitalWrite(led2, LOW);
  digitalWrite(led3, HIGH);
  digitalWrite(led4, LOW);
  }
   if(valor >=768 && valor<=1023){
  digitalWrite(led1, LOW);
  digitalWrite(led2, LOW);
  digitalWrite(led3, LOW);
  digitalWrite(led4, HIGH);
  }
 delay(900);
}
