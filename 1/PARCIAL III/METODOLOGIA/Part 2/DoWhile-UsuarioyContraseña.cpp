#include <iostream>
using namespace std;

//Programa que pide usuario y clave, permanece en el programa mientras no sea correctas ambos valores 

int main () {
	string usuario;
	string clave;
	
	do{
		cout << "Nombre de Usuario: " << endl;
		cin >> usuario;
		cout << "Contraseña para: " << endl;
		cin >> clave;
		
	} while (usuario != "contEM" && clave != "1234");
}
