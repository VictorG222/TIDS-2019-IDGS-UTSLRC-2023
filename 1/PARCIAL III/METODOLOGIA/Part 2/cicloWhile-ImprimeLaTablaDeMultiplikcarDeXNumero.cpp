#include <iostream>

using namespace std;

//Programa que imprime la tabla de multiplicar de X numero

int main()
{
    int x=1,num;

    cout << "Introduce el numero para desplegar su tabla de multiplicar:"<<endl;
    cin >> num;
    
    while (x<=10){
        cout << num << "*" << x << " = " << num*x << endl;
        x++;
    }

    return 0;
}
