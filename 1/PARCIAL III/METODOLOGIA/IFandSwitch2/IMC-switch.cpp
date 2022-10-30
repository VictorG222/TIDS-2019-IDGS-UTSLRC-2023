// IMC switch
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
	switch(imc){
		case 1 ... 18:
			cout<<"Peso inferior al normal"<<endl; break;
		case 19 ... 24:
			cout<<" Peso normal "<<endl; break;
		case 25 ... 29:
			cout<<" Sobrepeso "<<endl; break;
		case 30 ... 500:
			cout<<" Obesidad "<<endl; break;
	}
}

