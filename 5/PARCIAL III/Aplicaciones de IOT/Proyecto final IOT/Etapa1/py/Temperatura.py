#Practica #11 Sensor Sumergible MongoDB Irene Garcia
import os
import glob
import time
import RPi.GPIO as GPIO
import pymongo
from datetime import datetime

class DatabaseMongoDB:
	def insert(self,temp_c):
		#client = pymongo.MongoClient("mongodb://localhost:27017")#local conexion
		#Global Conexion Atlas
		client = pymongo.MongoClient("mongodb://irene:1234@cluster0-shard-00-00.pajmg.mongodb.net:27017,cluster0-shard-00-01.pajmg.mongodb.net:27017,cluster0-shard-00-02.pajmg.mongodb.net:27017/?ssl=true&replicaSet=atlas-esm17f-shard-0&authSource=admin") 
		db = client.SumergibleIrene
		coll = db.RegTemperatura		
		post = {"Fecha":datetime.today().strftime('%Y-%m-%d'),"Hora":datetime.today().strftime('%H:%M:%S'),"Temperatura":round(temp_c,2)}		
		coll.insert_one(post)
	
	def showdata(self,temp_c):
		Fecha = datetime.today().strftime('%Y-%m-%d')
		Hora = datetime.today().strftime('%H:%M:%S')
		DataRead="|"+Fecha+"   | " +Hora+ " |  "+str(round(temp_c,2))+"°C"
		return DataRead
	def loadHeader(self):
		DataRead="Sensor DS18B20 Temperatura"+"\n"
		DataRead+="================================"+"\n"
		DataRead+="|      Fecha     |     Hora    |  Temperatura  |"+"\n"
		DataRead+="================================"+"\n"
		return DataRead	




def read_temp_raw():
    os.system('modprobe w1-gpio')
    os.system('modprobe w1-therm')
    base_dir = '/sys/bus/w1/devices/'
    device_folder = glob.glob(base_dir + '28*')[0]
    device_file = device_folder + '/w1_slave'
    f = open(device_file, 'r')
    lines = f.readlines()
    f.close()
    return lines

def run():
	lines = read_temp_raw()
	while lines[0].strip()[-3:] != 'YES':
		time.sleep(0.2)
		lines = read_temp_raw()
	equals_pos = lines[1].find('t=')
	if equals_pos != -1:
		temp_string = lines[1][equals_pos+2:]   
		temp_c = float(temp_string) / 1000.0
		return temp_c
	else:
		return 0

#try: 
    #while True:
        
#except KeyboardInterrupt:
 #   pass
