// MAYOR DE DOS NUMEROS
#include<iostream>

using namespace std;

// var globales
int num1, num2;

int main(){ //begin
	//instructions;
	cout<<" Escriba el primer numero "; //write
	cin>>num1; //read
	
	//leer numero 2
	cout<<" Escriba el segundo numero "; //write
	cin>>num2; //read

	if(num1<num2){
		cout<<" Numero "<<num2<<" es mayor ";
	}else if(num1>num2) {
		// numero 1 es ma1yor
		cout<<" Numero "<<num1<<" es mayor";
		
	}
	else{

			cout<<" Son iguales";
		}
	
}    //end

