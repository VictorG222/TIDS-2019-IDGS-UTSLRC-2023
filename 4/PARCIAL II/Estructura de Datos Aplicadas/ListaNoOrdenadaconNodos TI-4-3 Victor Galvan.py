# Definir la clase Nodo
class Nodo:
    #Constructor
    def __init__(self,dato):
        self.dato=dato
        self.siguiente=None
    #Metodo para obtener el valor de un dato
    def obtenerDato(self):
        return self.dato
    #Metodo para obtener su referencia siguiente
    def obtenerSiguiente(self):
        return self.siguiente
    #Metodo para capturar un nuevo valor o dato
    def asignarDato(self,nuevodato):
        self.dato=nuevodato
    #Metodo para asignar una referencia nueva
    def asignarSiguiente(self,nuevosiguiente):
        self.siguiente=nuevosiguiente
    #Metodo para mostrar los Nodos enlazados
    def verListaN(Nodo):
        #recorrer toda la lista de Nodos Enlazados
        while(Nodo):
            print(Nodo.dato)
            Nodo=Nodo.siguiente
#Definir la clase lista No Ordenada
class ListaNoOrdenada:
    #Metodo Constructor
    def __init__(self):
        self.cabeza=None
    #Metodo para verificar si la lista esta vacia
    def estaVacia(self):
        return self.cabeza==None
    #Metodo para agregar elementos a la lista
    def agregar(self,item):
        temp=Nodo(item)
        temp.asignarSiguiente(self.cabeza)
        self.cabeza=temp
    #Metodo para imprimir la lista no ordenada
    def imprimirLista(self):
        actual=self.cabeza
        while actual is not None:
            print(actual.obtenerDato())
            actual=actual.obtenerSiguiente()
    #Metodo para determinar el tamaño o longitud de la lista
    def tamano(self):
        actual=self.cabeza
        contador=0
        while actual !=None:
            contador+=1
            actual=actual.obtenerSiguiente()

        return contador
    #Metodo para buscar un elemento en la lista no ordenada
    def buscar(self,item):
        actual=self.cabeza
        encontrado=False
        while actual is not None and not encontrado:
            if actual.obtenerDato()==item:
                encontrado=True
            else:
                actual=actual.obtenerSiguiente()

        return encontrado
    #Metodo para remover un elemento de la lista no ordenada
    def remover(self,item):
        actual=self.cabeza
        anterior=None
        encontrado=False
        #Este proceso solo es para encontrar el elemento a borrar
        while actual is not None and not encontrado:
            if actual.obtenerDato()is item:
                encontrado=True
            else:
                anterior=actual
                actual=actual.obtenerSiguiente()
        #Si encontramos el elemento empezamos el proceso de remover
        if encontrado:
            if anterior is None:
                self.cabeza=actual.obtenerSiguiente()
            else:
                anterior.asignarSiguiente(actual.obtenerSiguiente())
        else:
            raise ValueError
            print("Valor no encontrado..")
            
    #Metoto para insertar un elemento en una posicion especifica
    #Si la posicion esta fuera de rango marca un error
    def insertar(self,posicion,item):
        if posicion>self.tamano()-1:
            raise IndexError
            print("Index fuera de rango..!")
        actual=self.cabeza
        anterior=None
        pos=0
        if posicion==0:
            self.agregar(item)
        else:
            nuevo_nodo=Nodo(item)
            while pos<posicion:
                pos+=1
                anterior=actual
                actual=actual.obtenerSiguiente()
            anterior.asignarSiguiente(nuevo_nodo)
            nuevo_nodo.asignarSiguiente(actual)
    #Metodo para obtener el indice de un elemento si es que existe
    def index(self,item):
        actual=self.cabeza
        pos=0
        encontrado=False
        #Este proceso es para buscar el elemento que queremos saber la posicion
        while actual is not None and not encontrado:
            if actual.obtenerDato()is item:
                encontrado=True
            else:
                actual=actual.obtenerSiguiente()
                pos+=1
        if encontrado:
            pass # Es una palabra reservada que india NO accion
        else:
            pos=None
        return pos    
                
##    #Metodo que aplica la funcion pop, remueve el ultimo elemento de la lista
    def pop(self):
        actual=self.cabeza
        anterior=None
        pos=0
        tam=self.tamano()
        while pos<tam-1:
            anterior=actual
            actual=actual.obtenerSiguiente()
            pos+=1
        ultimo=actual.obtenerDato()
        dpu=actual.obtenerSiguiente()
        anterior.asignarSiguiente(actual.obtenerSiguiente())
        print("Se elimino el ultimo de la lista: ",ultimo)
     #Metodo para agregar un elemento al final de la lista
    def append(self,item):
        actual=self.cabeza
        anterior=None
        pos=0
        tam=self.tamano()
        while pos<tam:
            anterior=actual
            actual=actual.obtenerSiguiente()
            pos+=1
        nuevo_nodo=Nodo(item)
        if anterior is None:
            nuevo_nodo.asignarSiguiente(actual)
            self.cabeza=nuevo_nodo
        else:
            anterior.asignarSiguiente(nuevo_nodo)

            
    def buscarPorPosicion(self, item):
        actual = self.cabeza
        temp = actual.obtenerDato()
        for i in range(-1,item):
            temp=actual.obtenerDato()
            actual= actual.obtenerSiguiente()
        print(temp)

       #tarea para el proximo Viernes
##            Hacer los metodos SORT y los metodos Max y Min agregar las funciones en el mismo programa
## 
    

    '''
    def eliminarPosPosicion(self, item):
        actual = self.cabeza
        temp = self.
        pos=0

        while pos != '''
        
         

    
    
    def min(self):
        actual = self.cabeza
        min = actual.obtenerDato()
        
        while actual is not None:
            if actual.obtenerDato()< min:
                min=actual.obtenerDato()
            actual=actual.obtenerSiguiente()
        
        print(min)
        

    
    def max(self):
        actual = self.cabeza
        max = actual.obtenerDato()
        
        while actual is not None:
            if actual.obtenerDato()> max:
                max=actual.obtenerDato()
            actual=actual.obtenerSiguiente()
            
        print(max)
        

    def sort(self):
        actual = self.cabeza
        lista=[]
        while actual is not None:
            lista.append(actual.obtenerDato())
            actual=actual.obtenerSiguiente()
            
        def ordenamientoBurbuja(unaLista):
            for numPasada in range(len(unaLista)-1,0,-1):
                for i in range(numPasada):
                    if unaLista[i]>unaLista[i+1]:
                        temp = unaLista[i]
                        unaLista[i] = unaLista[i+1]
                        unaLista[i+1] = temp
       

        ordenamientoBurbuja(lista)
        
        for i in range(len(lista)):
            self.remover(lista[i])
            self.append(lista[i])
        self.imprimirLista()

                

        
