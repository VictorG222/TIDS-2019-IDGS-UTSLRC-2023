#Practica 3 TI 5-3 Victor Galvan
from pymongo import MongoClient
from datetime import datetime
#importar la paqueteria para controlar los pines
import RPi.GPIO as GPIO
#importar la paqueteria para hacer retrasos
import time

#Creamos la clase de la base de datos
class DatabaseMongoDB:
	def insert(self, estado):
		client = MongoClient("mongodb://localhost:27017")
		db = client.Pulsador_Victor
		coll = db.pulso
		
		dato = {"Fecha": datetime.today().strftime('%Y-%m-%d'), "Hora": datetime.today().strftime('%H:%M:%S'), "Estado_pul": estado}
		coll.insert_one(dato)
	def showdata(self, estado):
		Fecha = datetime.today().strftime('%Y-%m-%d')
		Hora = datetime.today().strftime('%H:%M:%S')
		if estado == 1:
			estado = "Pulsador Presionado   "
			estadoB = "Encendido"
			estadoL = "Apagado      "
		else:
			estado = "Pulsador NO Presionado"
			estadoB = "Apagado"
			estadoL = "Encendido    "
		print ("|",Fecha,"|", Hora, "|",estado, "|",estadoL, "|",estadoB)


print("\n")
print("Pulsador de 2 pines con buzzer y led")
print("______________________________________")
print("|Fecha       |Hora      | Estado del pulsador    | Estado del led| Estado del Buzzer")
print(".....................................................................")	
		
#Declaramos la configuracion de salida de los pines
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

pul = 12
buz = 10
led = 8
#declarar como entrada el pin
GPIO.setup(pul, GPIO.IN)
GPIO.setup(buz, GPIO.OUT)
GPIO.setup(led, GPIO.OUT)

#codigo para insertar el pulsador
try:
	while True:
		estado = GPIO.input(pul)
		if estado == 1:
			#Si el estado es uno prendemos el buzzer
			GPIO.output(buz, GPIO.HIGH)	
			DatabaseMongoDB().insert(estado)
			DatabaseMongoDB().showdata(estado)
			time.sleep(3)
			GPIO.output(buz, GPIO.LOW)	
		else:
			#Si el estado es cero prendemos el led
			GPIO.output(led, GPIO.HIGH)	
			DatabaseMongoDB().insert(estado)
			DatabaseMongoDB().showdata(estado)
			time.sleep(3)
			GPIO.output(led, GPIO.LOW)	
			
		
		time.sleep(0.5)
		GPIO.output(led, GPIO.LOW)	
		GPIO.output(led, GPIO.LOW)	

except KeyboardInterrupt:
	GPIO.cleanup()
