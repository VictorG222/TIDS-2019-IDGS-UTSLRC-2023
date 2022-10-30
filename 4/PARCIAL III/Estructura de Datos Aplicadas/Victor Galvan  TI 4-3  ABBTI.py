" Declaramos la clase Nodo"
class Node:
              def __init__(self,label,parent):
                            self.label=label
                            self.left=None
                            self.right=None
                            self.parent=parent
              #Metodos para asignar Nodos
              def getLabel(self):
                            return self.label
              def setLabel(self,label):
                            self.label=label
              def getLeft(self):
                            return self.left
              def setLeft(self,left):
                            self.left=left
              def getRight(self):
                            return self.right
              def setRight(self,right):
                            self.right=right
              def getParent(self):
                            return self.parent
              def setParent(self,parent):
                            self.parent=parent

#Definimos la clase para el Arbol Binario de Busqueda
class BinarySearchTree:
    def __init__(self):
        self.root=None

    #Metodo para saber si mi arbol esta vacio

    def empty(self):
        if self.root is None:
            return True
        return False

    #Creamos el metodo para insertar nodos a nuestro arbol binario
    def insert(self,label):
        new_node=Node(label,None)
        # pregunto si el arbol esta vacio
        if self.empty():
            self.root=new_node
        else:
            #Si el arbol NO esta vacio vamos hacer lo siguiente
            curr_node=self.root
            #Mientras que tengamos valores va recorrer
            while curr_node is not None: #En el ciclo hacemos recorrido de posicion
                parent_node=curr_node
                if new_node.getLabel()<curr_node.getLabel():
                    curr_node=curr_node.getLeft() #Conseguir el apuntador izquierdo
                else:
                    curr_node=curr_node.getRight()
            #Una ves que se encontro el lugar de posicion agregar el nodo
            if new_node.getLabel()<parent_node.getLabel():
                parent_node.setLeft(new_node)
            else:
                parent_node.setRight(new_node)
            new_node.setParent(parent_node)
     #Creamos un recorrido de los nodos del arbol y los vamos a meter en una lista para
     #posteriormente imprimirlos

    def InOrderTraversal(self,curr_node):
                   nodeList=[]
                   if curr_node is not None:
                                 nodeList.append(curr_node)
                                 nodeList=nodeList+self.InOrderTraversal(curr_node.getLeft())
                                 nodeList=nodeList+self.InOrderTraversal(curr_node.getRight())
                   return nodeList
    #Metodo para imprimir un arbol usando una lista en recorrido inorder condicional
    def __str__(self):
                  list=self.InOrderTraversal(self.root)
                  str=" "
                  for x in list:
                                str=str+" "+x.getLabel().__str__()
                  return str              
              
                            
    #Metodo para borrar NODOS de un arbol Binario de busqueda
    def delete(self,label):
                  if(not self.empty()): # Analizo si el arbol esta vacio
                                node=self.getNode(label) # Metodo para obtener el apuntador I/D
                                if(node is not None):
                                              if(node.getLeft() is None and node.getRight() is None):
                                                            self.__reassignNodes(node,None) #Metodo para reasignar nodo
                                              elif(node.getLeft() is None and node.getRight() is not None):
                                                            self.__reassignNodes(nodo,node.getRight())
                                              elif(node.getLeft() is not None and node.getRight() is None):
                                                            self.__reassignNodes(nodo,node.getLeft())
                                              else:
                                                            tmpNode=self.getMax(node.getLeft())#Obtener el valor del nodo maximo
                                                            self.delete(tmpNode.getLabel())
                                                            node.setLabel(tmpNode.getLabel())
              
    #Metodo para obtener el valor del apuntador del nodo a borrar
    def getNode(self,label):
                  curr_node=None
                  if(not self.empty()):
                                curr_node=self.getRoot() # Obtiene el nodo raiz
                                while curr_node is not None and curr_node.getLabel() is not label:
                                              if label<curr_node.getLabel():
                                                            curr_node=curr_node.getLeft()
                                              else:
                                                            curr_node=curr_node.getRight()
                                                            
                  return curr_node

    #Metodo para obtener el nodo raiz
    def getRoot(self):
                  return self.root
              
    #Metodo para reasignar los nodos una vez borrado un nodo
    def __reassignNodes(self,node,newChildren):
                  if(newChildren is not None):
                                newChildren.setParent(node.getParent())
                  if(node.getParent() is not None):
                                if(self.__isRightChildren(node)):
                                              node.getParent().setRight(newChildren)
                                else:
                                              node.getParent().setLeft(newChildren)
    #Metodo para reasignar nodos hijos derechos
    def __isRightChildren(self,node):
                  if(node==node.getParent().getRight()):
                                return True
                  return False
    #Metodo para obtener el apuntador del nodo maximo
    def getMax(self,root=None):
                  if(root is not None):
                                curr_node=root
                  else:
                                curr_node=self.getRoot()
                  if(not self.empty()):
                                while(curr_node.getRight() is not None):
                                              curr_node=curr_node.getRight()
                  return curr_node



    '''
        
        testBinaryTree()
        METODO PARA HACER TEST DEL ARBOL BINARIO ABAJO
        ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

        


    '''



    #Recorrido de arbol binario en Pre Orden
    def InPreOrder(self,curr_node):
        nodeList=[]
        if curr_node is not None:
            nodeList.append(curr_node)
            nodeList=nodeList+self.InPreOrder(curr_node.getLeft())
            nodeList=nodeList+self.InPreOrder(curr_node.getRight())
        return nodeList




    #Metodo para imprimir arbol binario en Pre Orden
    def printInPreOrder(self):
        list=self.InPreOrder(self.root)
        str=" "
        for j in list:
            str=str+" "+j.getLabel().__str__()
        return str
       

    
    #Recorrido de arbol binario en Pre Orden
    def InPosOrder(self, curr_node):
        nodeList=[]
        if curr_node is not None:
            nodeList=nodeList+self.InPosOrder(curr_node.getLeft())
            nodeList=nodeList+self.InPosOrder(curr_node.getRight())
            nodeList.append(curr_node)
        return nodeList


    #Metodo para imprimir arbol binario en Pos Orden
    def printInPosOrder(self):
        list=self.InPosOrder(self.root)
        str=" "
        for l in list:
            str=str+" "+l.getLabel().__str__()
        return str



#Metodo para probar del Arbor Binario
def testBinaryTree():
    n=BinarySearchTree()

   
    n.insert(8)
    n.insert(3)
    n.insert(6)
    n.insert(1)
    n.insert(10)
    n.insert(14)
    n.insert(13)
    n.insert(4)
    n.insert(7)
    
    '''

    n.insert(6)
    n.insert(5)
    n.insert(7)
    n.insert(45)
    n.insert(98)
    n.insert(1)
    n.insert(6)
    n.insert(8)
    n.insert(7)
    '''


    print(n.__str__())
    print(n.printInPreOrder())
    print(n.printInPosOrder())
    
    
