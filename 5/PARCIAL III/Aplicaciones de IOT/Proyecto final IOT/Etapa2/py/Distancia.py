#Practica #6 Sensor Distancia
import RPi.GPIO as GPIO
import time
import pymongo
from datetime import datetime

class DatabaseMongoDB:
        def insert(self,distancia):
                client = pymongo.MongoClient("mongodb://localhost:27017") 
                db = client.Ultrasonico
                coll = db.RegDistancia
                post = {"Fecha":datetime.today().strftime('%Y-%m-%d'),"Hora":datetime.today().strftime('%H:%M:%S'),"Distancia":round(distancia,2)}
                coll.insert_one(post)
        
        def showdata(self,distancia):
                Fecha = datetime.today().strftime('%Y-%m-%d')
                Hora = datetime.today().strftime('%H:%M:%S')
                DataRead="| "+Fecha+"  | "+Hora+" |  "+str(round(distancia,2))+"cm"
                return DataRead
        def loadHeader(self):
                DataRead="Sensor Ultrasonico"+"\n"
                DataRead+="================================"+"\n"
                DataRead+="|      Fecha     |     Hora    |  Distancia    |"+"\n"
                DataRead+="================================"+"\n"
                return DataRead


def run():
	pinEcho = 12
	pinTrig = 10
	GPIO.setwarnings(False)
	GPIO.setmode(GPIO.BOARD)
	GPIO.setup(pinEcho, GPIO.IN)
	GPIO.setup(pinTrig, GPIO.OUT)
	GPIO.output(pinTrig,False)
	time.sleep(0.5)
                
	GPIO.output(pinTrig,True)
	time.sleep(0.00001)        
	GPIO.output(pinTrig,False)
	inicio = time.time()
               
	while GPIO.input(pinEcho)==0:
		inicio = time.time()
                        
	while GPIO.input(pinEcho)==1:
		final = time.time()
                                    
	tiempo_transcurrido=final-inicio                            
	distancia = tiempo_transcurrido*34000                        
	distancia = distancia/2
	return distancia
