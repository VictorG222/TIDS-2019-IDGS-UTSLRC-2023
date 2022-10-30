#include <iostream>
using namespace std;

//Programa que pide una letra y evalua si es vocal o una consonante

int main () {
	char letra;
	cout << "Digita una letra: ";
	cin >> letra;
	
	switch (letra){
		case 'a': case 'A':
			cout <<"Es la primer vocal";
			break;
		case 'e': case 'E':
			cout <<"Es la segunda vocal";
			break;
		case 'o': case 'O':
			cout <<"Es la tercer vocal";
			break;
		case 'i': case 'I':
			cout <<"Es la cuarta vocal";
			break;
		case 'u': case 'U':
			cout <<"Es la quinta vocal";
			break;
		default:
			cout <<"Es una consonante";
	}
	 
}
