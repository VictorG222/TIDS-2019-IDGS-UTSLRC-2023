#Examen Practico TI 4-3 Victor Galvan
# Comparacion de 3 numeros
#importar la paqueteria para controlar los pines
import RPi.GPIO as GPIO
#importar la paqueteria para hacer retrasos
import time
#Declaramos la configuracion de salida de los pines BCM
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

#Declarar nuestros elementos
blanco = 17
amarillo= 27
verde = 22
rojo = 5
buzzer = 6
tiempo = 3

#declarar como salida los pines
GPIO.setup(blanco, GPIO.OUT)
GPIO.setup(amarillo, GPIO.OUT)
GPIO.setup(verde, GPIO.OUT)
GPIO.setup(rojo, GPIO.OUT)
GPIO.setup(buzzer, GPIO.OUT)




#Definimos la funcion para comparar los numeros
def comparacion():
    GPIO.output(blanco, GPIO.LOW)
    GPIO.output(amarillo, GPIO.LOW)
    GPIO.output(verde, GPIO.LOW)
    GPIO.output(rojo, GPIO.LOW)
    GPIO.output(buzzer, GPIO.LOW)
    print("Comparacion de numeros:")

    try:
        #Pedimos los tres numeros al usuario
        num1=float(input("Introdusca el primer numero: "))
        num2=float(input("Introdusca el segundo numero: "))
        num3=float(input("Introdusca el primer numero: "))

        #Comprobamos que ninguno de los numeros sea igual
        if num1 == num2 or num2 == num3 or num3 == num1:
        #Si algunos son iguales se realiza lo siguiente
            print("Los numeros no son diferentes. Uno esta repetido")
            print("El led rojo y el buzzer estan encendidos")
            print("\n")
            for i in range(0,6):
                GPIO.output(rojo, GPIO.HIGH)
                GPIO.output(buzzer, GPIO.HIGH)
                time.sleep(0.1)
                GPIO.output(rojo, GPIO.LOW)
                GPIO.output(buzzer, GPIO.LOW)
                time.sleep(0.1)
            time.sleep(tiempo)
            # Implementamos recusividad para repetir el proceso hasta que los numeros sean diferentes
            comparacion()
        #Comprobamos si el primero es mayor
        elif num1 > num2 and num1 > num3:
        #Si el primero es el mayor se realiza lo siguiente
            print("El primer numero es el mayor", num1)
            print("El led blanco esta encendido")
            print("\n")
            GPIO.output(blanco, GPIO.HIGH)
            time.sleep(tiempo)
        #Comprobamos si el segundo es mayor
        elif num2 > num1 and num2 > num3:
        #Si el segundo es el mayor se realiza lo siguiente
            print("El segundo numero es el mayor", num2)
            print("El led amarrillo esta encendido")
            print("\n")
            GPIO.output(amarillo, GPIO.HIGH)
            time.sleep(tiempo)
        #Comprobamos si el tercero es mayor
        elif num3 > num1 and num3 > num2:
        #Si el terceo es el mayor se realiza lo siguiente
            print("El tercer numero es el mayor", num3)
            print("El led verde esta encendido")
            print("\n")
            GPIO.output(verde, GPIO.HIGH)
            time.sleep(tiempo)
            
        
        # Implementamos recusividad para repetir el programa siempre que termine
        comparacion()
          
    except:
        print("Ha ocurrido un error intentelo de nuevo")
        print("\n")
        comparacion()
        GPIO.cleanup()
        
        
    
#Ejecutamos la funcion por primera vez
comparacion()
        


