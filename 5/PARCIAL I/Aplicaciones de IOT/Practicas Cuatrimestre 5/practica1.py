#Practica 1 TI 5-3 Victor Galvan
from pymongo import MongoClient
from datetime import datetime

#Creamos una conexion con la base de datos
client = MongoClient("mongodb://localhost:27017")


#Creamos la base de datos
db = client.Prueba

# Creamos la coleccion
coll = db.usuarios

#Declaramos las datos que queremos guardar
# {"nombreDato", 'valor'}
muestra = {"Fecha": datetime.today().strftime('%Y-%m-%d'), "Hora": datetime.today().strftime('%H:%M:%S'), "Nombre": 'Victor', "Apellido": 'Galvan'}


#Guardamos las variables en la base de datos una sola vez
coll.insert_one(muestra)
