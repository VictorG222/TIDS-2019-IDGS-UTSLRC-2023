#Practica #10 Sensor PIR MongoDB Irene Garcia
import RPi.GPIO as GPIO
import time
import pymongo
from datetime import datetime

class DatabaseMongoDB:
	def insert(self,estado):
		#client = pymongo.MongoClient("mongodb://localhost:27017")#local conexion
		#Global Conexion Atlas
		client = pymongo.MongoClient("mongodb://irene:1234@cluster0-shard-00-00.pajmg.mongodb.net:27017,cluster0-shard-00-01.pajmg.mongodb.net:27017,cluster0-shard-00-02.pajmg.mongodb.net:27017/?ssl=true&replicaSet=atlas-esm17f-shard-0&authSource=admin") 
		db = client.Pir
		coll = db.RegMovimiento	
		post = {"Fecha":datetime.today().strftime('%Y-%m-%d'),"Hora":datetime.today().strftime('%H:%M:%S'),"Movimiento":estado}		
		coll.insert_one(post)
	
	def showdata(self,estado):
		Fecha = datetime.today().strftime('%Y-%m-%d')
		Hora = datetime.today().strftime('%H:%M:%S')		
		DataRead="|  "+Fecha+" | "+Hora+" |  "+ ("No Movimiento" if estado==0 else "Movimiento")
		return DataRead
	def loadHeader(self):
		DataRead="Sensor PIR Movimiento"+"\n"
		DataRead+="================================="+"\n"
		DataRead+="|      Fecha     |     Hora    |  Movimiento  |"+"\n"
		DataRead+="================================="+"\n"
		return DataRead	



estado = 0

def run():
		GPIO.setwarnings(False)
		GPIO.setmode(GPIO.BCM)			
		pir = 17
		GPIO.setup(pir, GPIO.IN)
		time.sleep(0.1)
		estado = GPIO.input(pir)
		return estado
		
		
		
		      		    
# ~ except KeyboardInterrupt:
	# ~ GPIO.cleanup()
