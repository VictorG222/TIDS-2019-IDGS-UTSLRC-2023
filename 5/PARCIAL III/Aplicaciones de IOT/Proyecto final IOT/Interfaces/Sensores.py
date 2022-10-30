from tkinter import *
from tkinter import ttk
import py.Distancia as pyDistancia
import py.Temperatura as pyTemperatura
import py.Humedad as pyHumedad
import py.Movimiento as pyMovimiento
import time

class Aplicacion():
    def __init__(self, master):
        self.raiz=master
        # Declara variables de control
                # restriccion de insercion                   
        self.Begin_Insert = IntVar(value=0)
                # activar la insercion
        self.DB_Active = BooleanVar()    
                # grups de sensores
        self.Sensor   = StringVar(value='D')        
                # Define el widget Text 'self.tinfo ' en el que se
                # pueden introducir varias líneas de texto:     
        self.txtHeader= Text(self.raiz, width=40, height=5, font='Helvetica 13 bold')
        self.txtLog = Text(self.raiz, width=40, height=10)  
                # Carga imagen para asociar a widget Label()        
        self.SensorD = PhotoImage(file='images/distancia.png')  
        self.SensorM = PhotoImage(file='images/pir.png')   
        self.SensorT = PhotoImage(file='images/temperatura.png')   
        self.SensorH = PhotoImage(file='images/humedad.png')   
        
                # Declara widgets de la ventana             
        self.imgSensor = ttk.Label(self.raiz, image=self.SensorD, anchor="center", width=128)
        self.chkDB_Active = ttk.Checkbutton(self.raiz, text='Activar Insercion', variable=self.DB_Active, onvalue=True, offvalue=False, command=self.EnableSp)
        self.lbBegin_Insert = ttk.Label(self.raiz, text="Comenzar registro apartir de:")                               
        self.spnBegin_Insert = Spinbox(self.raiz, from_=0, to=9999, wrap=True, textvariable=self.Begin_Insert, state=DISABLED)                    
        self.lbSensor = ttk.Label(self.raiz, text="Sensor:")
        self.rbDistancia = ttk.Radiobutton(self.raiz, text='Distancia', variable=self.Sensor, value='D',command=self.setImage)
        self.rbTemperatura = ttk.Radiobutton(self.raiz, text='Temperatura', variable=self.Sensor, value='T',command=self.setImage)
        self.rbMovimiento = ttk.Radiobutton(self.raiz, text='Movimiento', variable=self.Sensor, value='M', command=self.setImage)   
        self.rbHumedad = ttk.Radiobutton(self.raiz, text='Temperatura y Humedad', variable=self.Sensor, value='H',command=self.setImage)  
        self.lbLog = ttk.Label(self.raiz, text="Log:")   #log = historial
        self.txtLog.config(fg='white', bg= 'black')                                                                                                            
        self.separ1 = ttk.Separator(self.raiz, orient=HORIZONTAL)
        self.btnEncender = ttk.Button(self.raiz, text="Encender", command=self.Encender)
        self.btnApagar = ttk.Button(self.raiz, text="Apagar", command=self.Apagar)                                 
                #Posicionamiento de controles en la ventana
        self.imgSensor.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)                      
        self.chkDB_Active.pack(side=TOP, fill=X, expand=True, padx=20, pady=5)
        self.lbBegin_Insert.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)
        self.spnBegin_Insert.pack(side=TOP, fill=X, expand=True, padx=20, pady=5)
        self.lbSensor.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)
        self.rbDistancia.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.rbTemperatura.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.rbMovimiento.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.rbHumedad.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.lbLog.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)
        self.txtHeader.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)  
        self.txtLog.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=0)   
        self.separ1.pack(side=TOP, fill=BOTH, expand=True, padx=5, pady=5)
        self.btnEncender.pack(side=LEFT, fill=BOTH, expand=True, padx=10, pady=10)
        self.btnApagar.pack(side=RIGHT, fill=BOTH, expand=True, padx=10, pady=10)   
        self.setImage()  
        #self.Encender()           
        self.raiz.mainloop()
        
    def setImage(self):            
        self.txtHeader.delete("1.0", END) 
        self.txtLog.delete("1.0", END)
        self.txtHeader.config(fg='green', bg= 'black',state=NORMAL)
        if self.Sensor.get()=='D':
                #Carga Header Correspondiente
                HeaderText= pyDistancia.DatabaseMongoDB().loadHeader()
                texto_info = HeaderText + "\n"
                self.txtHeader.insert("1.0",texto_info) 
                self.txtHeader.config(fg='green', bg= 'black',state=DISABLED)
                #Carga Imagen Correspondiente
                self.imgSensor.config(image=self.SensorD, 
                         anchor="center", width=128)
        elif self.Sensor.get()=='M':
                HeaderText= pyMovimiento.DatabaseMongoDB().loadHeader()
                texto_info = HeaderText + "\n"
                self.txtHeader.insert("1.0",texto_info) 
                self.txtHeader.config(fg='green', bg= 'black',state=DISABLED)
                self.imgSensor.config( image=self.SensorM, 
                         anchor="center", width=128)
        elif self.Sensor.get()=='T':
                HeaderText= pyTemperatura.DatabaseMongoDB().loadHeader()
                texto_info = HeaderText + "\n"
                self.txtHeader.insert("1.0",texto_info) 
                self.txtHeader.config(fg='green', bg= 'black',state=DISABLED)
                self.imgSensor.config(  image=self.SensorT, 
                         anchor="center", width=128)
        elif self.Sensor.get()=='H':
                HeaderText= pyHumedad.DatabaseMongoDB().loadHeader()
                texto_info = HeaderText + "\n"
                self.txtHeader.insert("1.0",texto_info) 
                self.txtHeader.config(fg='green', bg= 'black',state=DISABLED)
                self.imgSensor.config( image=self.SensorH, 
                         anchor="center", width=128)
        
    def EnableSp(self):
            if self.DB_Active.get():
                self.spnBegin_Insert['state']='normal'
            else:
                self.spnBegin_Insert['state']='disabled'
            
    def Apagar(self):
        self.raiz.after_cancel(self.cicloRead)
        
    def CargarLog(self,txt):
        # Metodo de empezar lectura de sensor
        # Borra el contenido que tenga en un momento dado
        # la caja de texto
        self.txtLog.delete("1.0", END) 
        # Construye una cadena de texto con toda la
        # información obtenida:        
        texto_info = txt + "\n"
        self.data=texto_info+ self.data
        # Inserta la información en la caja de texto:
        self.txtLog.insert("1.0",self.data)

    def Reading(self):   
        if self.Sensor.get() == 'D':
                DataRead= pyDistancia.run()                
                if self.DB_Active.get():# valida si esta activa la insercion a la DB
                        if self.Begin_Insert.get()>0 and DataRead >= self.Begin_Insert.get():	# valida que hayas puesto un valor diferente a 0 para validar la distancia
                                pyDistancia.DatabaseMongoDB().insert(DataRead)
                        elif self.Begin_Insert.get()==0: # valida que si esta en 0 el valor significa que siempre grabara
                                pyDistancia.DatabaseMongoDB().insert(DataRead)
                self.CargarLog(pyDistancia.DatabaseMongoDB().showdata(DataRead))
        elif self.Sensor.get() == 'T':
                DataRead= pyTemperatura.run()                
                if self.DB_Active.get():# valida si esta activa la insercion a la DB
                        if self.Begin_Insert.get()>0 and DataRead >= self.Begin_Insert.get():	# valida que hayas puesto un valor diferente a 0 para validar la distancia
                                pyTemperatura.DatabaseMongoDB().insert(DataRead)
                        elif self.Begin_Insert.get()==0: # valida que si esta en 0 el valor significa que siempre grabara
                                pyTemperatura.DatabaseMongoDB().insert(DataRead)
                self.CargarLog(pyTemperatura.DatabaseMongoDB().showdata(DataRead))
        elif self.Sensor.get() == 'M':
                DataRead= pyMovimiento.run()                
                if self.DB_Active.get():# valida si esta activa la insercion a la DB
                        if self.Begin_Insert.get()>0 and DataRead >= self.Begin_Insert.get():	# valida que hayas puesto un valor diferente a 0 para validar la distancia
                                pyMovimiento.DatabaseMongoDB().insert(DataRead)
                        elif self.Begin_Insert.get()==0: # valida que si esta en 0 el valor significa que siempre grabara
                                pyMovimiento.DatabaseMongoDB().insert(DataRead)
                self.CargarLog(pyMovimiento.DatabaseMongoDB().showdata(DataRead))
        elif self.Sensor.get() == 'H':
                DataRead= pyHumedad.run()                
                if self.DB_Active.get():# valida si esta activa la insercion a la DB
                        if self.Begin_Insert.get()>0 and DataRead[0] >= self.Begin_Insert.get():	# valida que hayas puesto un valor diferente a 0 para validar la distancia
                                pyHumedad.DatabaseMongoDB().insert(DataRead[0],DataRead[1])
                        elif self.Begin_Insert.get()==0: # valida que si esta en 0 el valor significa que siempre grabara
                                pyHumedad.DatabaseMongoDB().insert(DataRead[0],DataRead[1])
                self.CargarLog(pyHumedad.DatabaseMongoDB().showdata(DataRead[0],DataRead[1]))
        #repite el ciclo hasta que se mande a apagar cada 2seg imprime en tiempo real los datos del sensor
        self.cicloRead=self.raiz.after(2000, self.Reading)        

    def Encender(self):
        self.data=""       
        self.Reading()
        
       
def main():
    root = Tk()
    root.title("Monitoreo y Control de Sensores")
    mi_app = Aplicacion(root)
    return 0

if __name__ == '__main__':
    main()
