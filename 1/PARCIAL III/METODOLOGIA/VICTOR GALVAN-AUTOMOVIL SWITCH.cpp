#include<iostream>
#include<cmath>
// GALVAN COVARRUBIAS VICTOR MANUEL TI1-4
// RENTA DE UN AUTOMOVIL USANDO SWITCH

using namespace std;

int main(){
	int km;
	const int PRICE=30;
	float exceso1, exceso2;

	cout<<" Introdusca cantidad de kilometros ";
	cin>>km;

	exceso1=(km-300)*0.15;
	exceso2=(km-1000)*0.10;

	switch(km){
		case 1 ... 300:
			cout<<" Su total es /n"<<PRICE<<" $ ";break;
		case 301 ... 1000:
			cout<< " Su total es "<<PRICE+exceso1<<" $ ";break;
		case 1001 ... 2147483647:
			cout<<" Su total es "<<PRICE+exceso2<<" $ ";break;
		default:
			cout<<" Valor invalido, favor de iniciar otra vez ";
	}
	
}

