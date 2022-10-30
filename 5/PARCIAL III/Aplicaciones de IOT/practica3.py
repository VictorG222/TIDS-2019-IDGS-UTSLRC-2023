#Practica 3 TI 5-3 Victor Galvan
from tkinter import *
from tkinter import messagebox

ventana = Tk()
ventana.geometry("500x400")
ventana.resizable(False, False)
ventana.title("Practica 3 Numero Mayor")
ventana.configure(background="lightBlue3")

def mayor():
    if n1.get() == n2.get() or n1.get() == n3.get() or n2.get() == n3.get():
        message = "Hay numero repetidos en la secuencia"
        messagebox.showinfo(message=message)
    elif n1.get() > n2.get() and n1.get() > n3.get():
        message = "El numero mayor es el primer numero. El numero es:"+str(round(n1.get()))
        messagebox.showinfo(message=message)
    elif n2.get() > n1.get() and n2.get() > n1.get():
        message = "El numero mayor es el segundo numero. El numero es:"+str(round(n2.get()))
        messagebox.showinfo(message=message)
    elif n3.get() > n1.get() and n3.get() > n1.get():
        message = "El numero mayor es el tercer numero. El numero es:"+str(round(n3.get()))
        messagebox.showinfo(message=message)

lbln1 =Label(ventana, text="Ingrese el primer numero: ").grid(row=0, column=0, padx=10, pady=10)
n1 = DoubleVar()#Se declara la variable de tipo flotante
txtn1 = Entry(ventana, textvariable=n1).grid(row=0,column=1)
txtn1.delete(0,'end')
txtn1.focus()

lbln2 =Label(ventana, text="Ingrese el segundo numero: ").grid(row=1, column=0, padx=10, pady=10)
n2 = DoubleVar()#Se declara la variable de tipo flotante
txtn2 = Entry(ventana, textvariable=n2).grid(row=1,column=1)
txtn2.delete(0,'end')

lbln3 =Label(ventana, text="Ingrese el tercer numero: ").grid(row=2, column=0, padx=10, pady=10)
n3 = DoubleVar()#Se declara la variable de tipo flotante
txtn3 = Entry(ventana, textvariable=n3).grid(row=2,column=1)
txtn2.delete(0,'end')


btnCal = Button(ventana,text="¿Cual es el numero Mayor?", command= mayor).grid(row=3, column=0, padx=10, pady=10)

ventana.mainloop()