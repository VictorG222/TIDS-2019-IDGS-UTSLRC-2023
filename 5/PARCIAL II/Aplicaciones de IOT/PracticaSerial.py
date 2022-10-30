#Practica ti 5-3 Serial Equipo 1
import serial
import time

#nombre del dispositivo serial : dmesg | grep -v disconnect | grep -Eo "tty(ACM|USB)." | tail -1
ser = serial.Serial('/dev/ttyACM0',9600)
ser.flushInput()

#La funcion line envia la palabra "clave" que recibira el arduino para asi prender o apagar el led
def iluminacion (line):
    if int(line) < 800:
        dato = "noche"
    else:
        dato = "dia"
    return dato

while True:
    
    try:
        
        #Leemos los datos que son enviados por el arduino
        lineBytes = ser.readline()
        line = lineBytes.decode('latin-1').strip()
        print(line)  
        

        #Enviamos los datos que hicimos en la funcion iluminacion y se los enviamos a la placa arduino UNO
        mensaje = iluminacion(line).encode('latin-1')
        ser.write(mensaje)
        time.sleep(0.5)
        
    except KeyboardInterrupt:
        break