// IMC if
// GALVAN VICTOR TI1-4
#include<iostream>
#include<cmath>
using namespace std;
int imc;
float kg, altura;
int main(){
	cout<<" Ingrese su Peso "<<endl;
	cin>>kg;
	cout<<" Ingrese su Altura "<<endl;
	cin>>altura;
	imc=kg/pow(altura,2);
	cout<<imc;
	if (imc<=18.5){
		cout<<"Peso inferior al normal"<<endl;
	}else if(imc<=24.9){
		cout<<" Peso normal "<<endl;
	}else if(imc<=29.9){
		cout<<" Sobrepeso "<<endl;
	}else{
		cout<<" Obesidad "<<endl;
	}
}
