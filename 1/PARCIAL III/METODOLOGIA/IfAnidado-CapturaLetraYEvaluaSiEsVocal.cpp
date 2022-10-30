#include <iostream>

using namespace std;

//Programa que captura una letra y evalua si es vocal o consonante

int main()
{
    char letra;
    cout<< "Ingresa una letra"<<endl;
    cin>>letra;

    if ((letra == 'a') || (letra == 'A')) {
        cout<<"Es la primer vocal"<<endl;
    } else if ((letra == 'e') || (letra == 'E')) {
        cout<<"Es la segunda vocal"<<endl;
    } else if ((letra == 'o') || (letra == 'O')) {
        cout<<"Es la tercer vocal"<<endl;
    } else if ((letra == 'i') || (letra == 'I')) {
        cout<<"Es la cuarta vocal"<<endl;
    } else if ((letra == 'u') || (letra == 'U')) {
        cout<<"Es la quinta vocal"<<endl;
    } else {
        cout<<"Es una consonante"<<endl;
    }

    return 0;
}
