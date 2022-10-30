#include <iostream>

using namespace std;

//Programa que captura 10 numeros y muestra su media (promedio)

int main()
{

    int num,x;
    float sum=0;

    for (x=1;x<=10;x++){
        cout << "Introduzca numero:" << endl;
        cin >>num;
        sum=sum+num;
    }

    cout << "La media es: " << sum/10 << endl;

    return 0;
}
