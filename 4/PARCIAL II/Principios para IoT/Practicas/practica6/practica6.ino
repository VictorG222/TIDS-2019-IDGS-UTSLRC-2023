
int verde = 13;
int amarillo=12;
int rojo = 11;

void setup() {
  pinMode(verde, OUTPUT);
  pinMode(amarillo, OUTPUT);
  pinMode(rojo, OUTPUT);
}

void loop() {
  digitalWrite(verde, HIGH);
  delay(3000);
  digitalWrite(verde, LOW);
  digitalWrite(amarillo, HIGH);
  delay(2000);
  digitalWrite(amarillo, LOW);
  digitalWrite(rojo, HIGH);
  delay(3000);
  digitalWrite(rojo, LOW);

}
