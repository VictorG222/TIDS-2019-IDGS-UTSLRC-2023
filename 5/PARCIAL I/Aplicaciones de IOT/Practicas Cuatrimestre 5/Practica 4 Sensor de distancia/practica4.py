#Practica 4 TI 5-3 Victor Galvan
from pymongo import MongoClient
from datetime import datetime
#importar la paqueteria par a controlar los pines
import RPi.GPIO as GPIO
#importar la paqueteria para hacer retrasos
import time

#Creamos la clase de la base de datos
class DatabaseMongoDB:
	def insert(self, estado):
		client = MongoClient("mongodb://localhost:27017")
		db = client.Ultrasonico_Victor
		coll = db.lecturas
		
		dato = {"Fecha": datetime.today().strftime('%Y-%m-%d'), "Hora": datetime.today().strftime('%H:%M:%S'), 
		"Distancia": "%.2f cm"%distancia}
		coll.insert_one(dato)
	def showdata(self, estado):
		Fecha = datetime.today().strftime('%Y-%m-%d')
		Hora = datetime.today().strftime('%H:%M:%S')
		print ("|",Fecha,"|", Hora, "|",round(distancia,2), "cm")


print("\n")
print("Sensor de distancia")
print("______________________________________")
print("|Fecha       |Hora      | Distancia")
print(".....................................................................")	
		
#Declaramos la configuracion de salida de los pines
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

trig = 10
echo = 12

#declaramos nuestros actuadores

verde = 37
amarillo = 35
azul = 33
buz = 31
blanco = 29
rojo = 36
#declarar como entrada el pin
GPIO.setup(echo, GPIO.IN)

#declaramos los pines que seran salidas
GPIO.setup(trig, GPIO.OUT)
GPIO.setup(verde, GPIO.OUT)
GPIO.setup(amarillo, GPIO.OUT)
GPIO.setup(azul, GPIO.OUT)
GPIO.setup(buz, GPIO.OUT)
GPIO.setup(blanco, GPIO.OUT)
GPIO.setup(rojo, GPIO.OUT)



#codigo para insertar el pulsador
try:
	while True:
		#iniciamos en estado bajo el pin trig y esperamos medio segundo para que el transductor se estabilice.
		GPIO.output(trig,GPIO.LOW)
		time.sleep(0.5)
		#Ponemos en alto el pin tri y esperamos 10 micro segundos antes de ponerlo en bajo de nuevo.
		GPIO.output(trig,GPIO.HIGH)
		time.sleep(0.00001)
		GPIO.output(trig,GPIO.LOW)


		#En este momento el sensor envia 8 pulsos ultrasonicos de 40khz y pone el pin echo en alto
		#Se detecta dicha accion para iniciar la medicion del tiempo.
		inicio = time.time()
		while GPIO.input(echo)==0:
		    inicio = time.time()

		while GPIO.input(echo)==1:
		    final = time.time()

		#tiempo medido en segundo
		tiempo_transcurrido = final - inicio

		#Obtenemos la distancia considerando que la señal recorre
		duracion = tiempo_transcurrido*34000
		distancia = duracion/2
		
		#Si la distancia es menor a 20 cm, encender led verde.
		if distancia <=20:
			GPIO.output(verde,GPIO.HIGH)
			DatabaseMongoDB().showdata(distancia)
			time.sleep(1)
			GPIO.output(verde,GPIO.LOW)
		#Si la distancia esta en un rango de 21 cm a 60 cm, encender led amarillo e insertar el rango en la base de datos.
		elif distancia>=21 and distancia<=60:
			GPIO.output(amarillo,GPIO.HIGH)
			DatabaseMongoDB().insert(distancia)
			DatabaseMongoDB().showdata(distancia)
			time.sleep(1)
			GPIO.output(amarillo,GPIO.LOW)
		#Si la distancia esta en un rango de 61 cm a 90 cm, encender un buzzer y un led azul.
		elif distancia>=61 and distancia<=90:
			GPIO.output(azul,GPIO.HIGH)
			GPIO.output(buz,GPIO.HIGH)
			DatabaseMongoDB().showdata(distancia)
			time.sleep(1)
			GPIO.output(azul,GPIO.LOW)
			GPIO.output(buz,GPIO.LOW)
		#Si la distancia esta en un rango de 91 cm a 120 cm, encender led blanco e insertar el rango en la base de datos.
		elif distancia>=91 and distancia<=120:
			GPIO.output(blanco,GPIO.HIGH)
			DatabaseMongoDB().insert(distancia)
			DatabaseMongoDB().showdata(distancia)
			time.sleep(1)
			GPIO.output(blanco,GPIO.LOW)
		#Si la distancia es mayor a 121cm, encender led rojo.
		elif distancia>=121:
			GPIO.output(rojo,GPIO.HIGH)
			DatabaseMongoDB().showdata(distancia)
			time.sleep(1)
			GPIO.output(rojo,GPIO.LOW)
		

		

except KeyboardInterrupt:
	GPIO.cleanup()
