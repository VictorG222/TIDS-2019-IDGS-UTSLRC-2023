#include <iostream>

using namespace std;

//Programa que calcula el precio de un postre mediante la elección de toppings

int main (){
	
		float precio = 0.00;
		float helado = 1.90;
		float precioFinal = 0.00;
		char topping;
		
		cout << "¿Qué topping quieres?"<< endl;
		cout << "Escribe [o] oreo, [k] kitkat, [b] brownie o [m] m&m?"<< endl;
		cin>> topping; 
		
		switch(topping){
			case 'o': 
				precio = 1; break;
			case 'k':
				precio = 1.50; break;
			case 'b':
				precio = 0.75; break;
			case 'm':
				precio = 0.95; break;
			default:
				cout <<"no tenemos este topping, lo sentimos. "<< endl;
		}

		precioFinal = helado + precio;
		cout<< "el helado cuesta " <<precioFinal << " €" << endl;
}
