#include <iostream>

using namespace std;

//Programa que imprime la tabla de multiplicar de X numero

int main()
{
    int x=1,num;

    cout << "Introduce el numero para desplegar su tabla de multiplicar:"<<endl;
    cin >> num;
    
    do{
        cout << num << "*" << x << " = " << num*x << endl;
        x++;
    }while (x<=10);

    return 0;
}
