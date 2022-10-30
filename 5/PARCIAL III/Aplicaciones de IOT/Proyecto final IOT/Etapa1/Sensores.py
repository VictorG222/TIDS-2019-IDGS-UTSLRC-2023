from tkinter import *
from tkinter import ttk

class Aplicacion():
    def __init__(self, master):
        self.raiz=master
        # Declara variables de control
        
        #Grupo de sensores, Sensor de arranque inicial de la aplicacion
        self.Sensor   = StringVar(value='D')  
              
        #Define el widget Text 'self.tinfo ' en el que se pueden introducir varias líneas de texto:     
        self.txtHeader= Text(self.raiz, width=40, height=5, font='Helvetica 13 bold')
        self.txtLog = Text(self.raiz, width=40, height=10) 
         
        #Carga imagen para asociar a widget del sensor correspondiente
        self.SensorD = PhotoImage(file='images/distancia.png')  
        self.SensorM = PhotoImage(file='images/pir.png')   
        self.SensorT = PhotoImage(file='images/temperatura.png')   
        self.SensorH = PhotoImage(file='images/humedad.png')   

        # Declara widgets de la ventana             
        self.imgSensor = ttk.Label(self.raiz, image=self.SensorD, anchor="center", width=128)
        self.lblIniReg = ttk.Label(self.raiz, text="Comenzar registro apartir de:")                               
        self.spn = Spinbox(self.raiz, from_=1, to=20, wrap=True, state='readonly')
        self.chk = ttk.Checkbutton(self.raiz, text='Activar Insercion', onvalue=True, offvalue=False)                    
        self.lblSensor = ttk.Label(self.raiz, text="Sensor:")
        self.rdbDistancia = ttk.Radiobutton(self.raiz, text='Distancia', variable=self.Sensor, value='D',command=self.setImage)
        self.rdbTemperatura = ttk.Radiobutton(self.raiz, text='Temperatura', variable=self.Sensor, value='T',command=self.setImage)
        self.rdbMovimiento = ttk.Radiobutton(self.raiz, text='Movimiento', variable=self.Sensor, value='M', command=self.setImage)   
        self.rdbHumedad = ttk.Radiobutton(self.raiz, text='Temperatura y Humedad', variable=self.Sensor, value='H',command=self.setImage)  
        self.lblLog = ttk.Label(self.raiz, text="Datos.")  
        self.txtLog.config(fg='white', bg= 'black')                                                                                                            
        self.separ1 = ttk.Separator(self.raiz, orient=HORIZONTAL)
        self.btnEncender = ttk.Button(self.raiz, text="Encender")
        self.btnApagar = ttk.Button(self.raiz, text="Apagar")     
                                    
        #Posicionamiento de controles en la ventana
        self.imgSensor.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)                      
        self.chk.pack(side=TOP, fill=X, expand=True, padx=20, pady=5)
        self.lblIniReg.pack(side=TOP, fill=BOTH, expand=True, padx=10, pady=5)
        self.spn.pack(side=TOP, fill=X, expand=True, padx=20, pady=5)
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
        if self.Sensor.get()=='D':
                self.imgSensor.config(image=self.SensorD, anchor="center", width=128)
        elif self.Sensor.get()=='M':
                self.imgSensor.config( image=self.SensorM, anchor="center", width=128)
        elif self.Sensor.get()=='T':
                self.imgSensor.config(  image=self.SensorT, anchor="center", width=128)
        elif self.Sensor.get()=='H':
                self.imgSensor.config( image=self.SensorH, anchor="center", width=128)
                      
def main():
    root = Tk()
    root.title("Monitoreo y Control de Sensores")
    mi_app = Aplicacion(root)
    return 0

if __name__ == '__main__':
    main()