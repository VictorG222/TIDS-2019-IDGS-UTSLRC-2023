//TI 5-3 Practica Serial Equipo 1
//Declaramos nuestros elementos
int pinAnalogico = A0;
int led = 13;
void setup() {
  //establecemos la resistencia como entrada y el led como salida
  pinMode (pinAnalogico,INPUT);
  pinMode (led, OUTPUT);
  //Inicialisamos la comunicacion serial
  Serial.begin(9600);
}
void loop() {
  //leemos la resistencia y se la asignamos a una variable
  int valorPinAnalogico = analogRead(pinAnalogico);
  //Imprimimos el valor de la resistecia
  Serial.println(valorPinAnalogico);
  delay(100);

  //Si la comunicacion serial se encuentra disponible empezaomos a resibir la informacion
  if (Serial.available()>0){
    String dato = Serial.readStringUntil('\n');
    if (dato == "noche"){
      //Si el raspberry nos envia la palabra "noche" encendemos el led
      digitalWrite(led, HIGH);
    }else if (dato == "dia"){
      //Si el raspberry nos envia la palabra "dia" apagamos el led
      digitalWrite(led, LOW);
      } 
    }delay(100);   
}
