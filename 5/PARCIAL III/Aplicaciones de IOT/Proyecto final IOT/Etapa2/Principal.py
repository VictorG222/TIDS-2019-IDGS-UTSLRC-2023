from tkinter import *
from tkinter import ttk
import py.Distancia as pyDistancia
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
              
                # Define el widget Text 'self.tinfo ' en el que se pueden introducir varias líneas de texto:     
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
        self.lblBegin_Insert = ttk.Label(self.raiz, text="Comenzar registro apartir de:")                               
        self.spnBegin_Insert = Spinbox(self.raiz, from_=0, to=9999, wrap=True, textvariable=self.Begin_Insert, state=DISABLED)                    
        self.lblSensor = ttk.Label(self.raiz, text="Sensor:")
        self.rdbDistancia = ttk.Radiobutton(self.raiz, text='Distancia', variable=self.Sensor, value='D',command=self.setImage)
        self.rdbTemperatura = ttk.Radiobutton(self.raiz, text='Temperatura', variable=self.Sensor, value='T',command=self.setImage)
        self.rdbMovimiento = ttk.Radiobutton(self.raiz, text='Movimiento', variable=self.Sensor, value='M', command=self.setImage)   
        self.rdbHumedad = ttk.Radiobutton(self.raiz, text='Temperatura y Humedad', variable=self.Sensor, value='H',command=self.setImage)  
        self.lblLog = ttk.Label(self.raiz, text="Log:")   #log = historial
        self.txtLog.config(fg='white', bg= 'black')                                                                                                            
        self.separ1 = ttk.Separator(self.raiz, orient=HORIZONTAL)
        self.btnEncender = ttk.Button(self.raiz, text="Encender", command=self.Encender)
        self.btnApagar = ttk.Button(self.raiz, text="Apagar", command=self.Apagar)     
                                    
                #Posicionamiento de controles en la ventana
        self.imgSensor.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)                      
        self.chkDB_Active.pack(side=TOP, fill=X, expand=True, padx=20, pady=5)
        self.lblBegin_Insert.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)
        self.spnBegin_Insert.pack(side=TOP, fill=X, expand=True, padx=20, pady=5)
        self.lblSensor.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)
        self.rdbDistancia.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.rdbTemperatura.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.rdbMovimiento.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.rdbHumedad.pack(side=TOP, fill=BOTH, expand=True, padx=20, pady=5)
        self.lblLog.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)
        self.txtHeader.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)  
        self.txtLog.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=0)   
        self.separ1.pack(side=TOP, fill=BOTH, expand=True, padx=5, pady=5)
        self.btnEncender.pack(side=LEFT, fill=BOTH, expand=True, padx=10, pady=10)
        self.btnApagar.pack(side=RIGHT, fill=BOTH, expand=True, padx=10, pady=10)   
        self.setImage()           
        self.raiz.mainloop()
        
    #Funcion para Cargar Imagen que corresponda y traer el encabezado de cada plantilla    
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
                self.imgSensor.config(image=self.SensorD, anchor="center", width=128)
        elif self.Sensor.get()=='M':
                self.imgSensor.config( image=self.SensorM, anchor="center", width=128)
        elif self.Sensor.get()=='T':
                self.imgSensor.config(  image=self.SensorT, anchor="center", width=128)
        elif self.Sensor.get()=='H':
                self.imgSensor.config( image=self.SensorH, anchor="center", width=128)
                
                
    #Funcion que activa a desactiva la insercion en el spinBox    
    def EnableSp(self):
            if self.DB_Active.get():
                self.spnBegin_Insert['state']='normal'
            else:
                self.spnBegin_Insert['state']='disabled'
   
   #Funcion para Apagar nuestro sensor
    def Apagar(self):
        self.raiz.after_cancel(self.cicloRead)
    
    #Funcon que carga la informacion del sensor     
    def CargarLog(self,txt):
        # Metodo de empezar lectura de sensor
        # Borra el contenido que tenga en un momento dado la caja de texto
        self.txtLog.delete("1.0", END) 
        # Construye una cadena de texto con toda la
        # información obtenida:        
        texto_info = txt + "\n"
        self.data=texto_info+ self.data
        # Inserta la información en la caja de texto:
        self.txtLog.insert("1.0",self.data)
    
    #Funcion que conecta e inserta o no los datos recolectados por el sensor 
    def Reading(self):   
        if self.Sensor.get() == 'D':
                DataRead= pyDistancia.run()                
                if self.DB_Active.get():# valida si esta activa la insercion a la DB
                        if self.Begin_Insert.get()>0 and DataRead >= self.Begin_Insert.get():# valida que hayas puesto un valor diferente a 0 para validar la distancia
                                pyDistancia.DatabaseMongoDB().insert(DataRead)
                        elif self.Begin_Insert.get()==0: # valida que si esta en 0 el valor significa que siempre grabara
                                pyDistancia.DatabaseMongoDB().insert(DataRead)
                self.CargarLog(pyDistancia.DatabaseMongoDB().showdata(DataRead))
        
        #repite el ciclo hasta que se mande a apagar. Cada 2seg imprime en tiempo real los datos del sensor
        self.cicloRead=self.raiz.after(2000, self.Reading)    
        
        
            
     
    #Funcion que enciende nuestro sensor.    
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

