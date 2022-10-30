#include <iostream>

using namespace std;

 /*Programa que calcule el factorial de un número cualquiera mayor a 1 y lo muestre en pantalla.*/


int main()
{
    int num, aux;

    cout <<"Introduce numero: "<<endl;
    cin >> num;

    for (aux=num-1; aux!=1; aux--){
	    num=num*aux;
        cout<<" * "<<aux;
	}

    cout<<endl<< "El factorial es: "<< num <<endl;

    return 0;
}
