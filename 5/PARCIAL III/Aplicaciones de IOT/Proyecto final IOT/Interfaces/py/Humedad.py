#Practica #12 Sensor Temperatura y Humedad MongoDB Irene Garcia
import RPi.GPIO as GPIO
import Adafruit_DHT 
import time
import pymongo
from datetime import datetime 

class DatabaseMongoDB:
	def insert(self,temp, humedad):
		#client = pymongo.MongoClient("mongodb://localhost:27017")#local conexion
		#Global Conexion Atlas
		client = pymongo.MongoClient("mongodb://irene:1234@cluster0-shard-00-00.pajmg.mongodb.net:27017,cluster0-shard-00-01.pajmg.mongodb.net:27017,cluster0-shard-00-02.pajmg.mongodb.net:27017/?ssl=true&replicaSet=atlas-esm17f-shard-0&authSource=admin") 
		db = client.AmbienteIrene
		coll = db.RegTHumedad
		
		post = {"Fecha":datetime.today().strftime('%Y-%m-%d'),"Hora":datetime.today().strftime('%H:%M:%S'),"Temperatura":temp,"Humedad":humedad}
		
		coll.insert_one(post)
	
	def showdata(self,temp, humedad):
		Fecha = datetime.today().strftime('%Y-%m-%d')
		Hora = datetime.today().strftime('%H:%M:%S')
		DataRead="| "+Fecha+" | "+Hora+" | "+f"{temp: .2f}°C"+"    | "+f"{humedad: .2f}%"
		return DataRead
	def loadHeader(self):
		DataRead="Sensor Temperatura y Humedad"+"\n"
		DataRead+="========================================"+"\n"
		DataRead+="|   Fecha      |   Hora     | Temperatura| Humedad "+"\n"
		DataRead+="========================================"+"\n"
		return DataRead	


def run():
	GPIO.setwarnings(False)
	GPIO.setmode(GPIO.BCM)
	sensor = Adafruit_DHT.DHT11 
	pin = 27  

	humedad, temp = Adafruit_DHT.read_retry(sensor, pin) 		
	return [temp,humedad]
    
# ~ # except KeyboardInterrupt:	
    # ~ # GPIO.cleanup()

# ~ #print(f'Temperatura={temp: .2f}°C   Humedad={humedad: .2f}%')
# ~ #print("Temperatura = {}" .format(temp)+ "°C", "Humedad = {}" .format(humedad)+"%")
