#include <iostream>

using namespace std;

//Programa que calcula el precio de un postre mediante la elección de toppings

int main (){
	
		float precio = 0.00;
		float helado = 1.90;
		float precioFinal = 0.00;
		string topping;
		
		cout << "¿Qué topping quieres?"<< endl;
		cout << "¿oreo, kitkat, brownie o m&m?"<< endl;
		cin>> topping; 
		
		if(topping=="oreo"){
			precio = 1;
		}else if(topping == "kitkat"){
			precio = 1.50;
		}else if(topping == "brownie"){
			precio = 0.75;
		}else  if(topping == "m&m"){
			precio = 0.95;
		}else{
			cout <<"no tenemos este topping, lo sentimos. "<< endl;
		}

		precioFinal = helado + precio;
		cout<< "el helado cuesta " <<precioFinal << " €" << endl;
}
