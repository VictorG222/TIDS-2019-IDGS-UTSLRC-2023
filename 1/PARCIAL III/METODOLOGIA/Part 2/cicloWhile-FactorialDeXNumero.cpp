#include <iostream>

using namespace std;

 /*Programa que calcule el factorial de un número cualquiera mayor a 0 y lo muestre en pantalla.*/


int main()
{
    int num, aux;

    cout <<"Introduce numero: "<<endl;
    cin >> num;

    aux=num;

    while (aux!=1){
        aux--;
        num=num*aux;
        cout<<" * "<<aux;
    }

    cout<<endl<< "El factorial es: "<< num <<endl;

    return 0;
}
