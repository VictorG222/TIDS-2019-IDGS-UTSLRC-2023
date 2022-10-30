#include<iostream>
#include<cmath>
// GALVAN COVARRUBIAS VICTOR MANUEL TI1-4
//RENTA DE AUTOMOVIL USANDO IF

using namespace std;

int km;
float exceso1, exceso2;
const int PRICE=30;

int main(){
	cout<<" Introdusca la distancia recorrida ";
	cin>>km;
	
	if(km<=300){
		cout<<" Su total es "<<PRICE<<" $ ";
	}else if(km<=1000){
		exceso1=(km-300)*0.15;
		cout<<" Su total es "<<PRICE+exceso1<<" $ ";
		
	}else if(km>1000){
		exceso1=105;
		exceso2=(km-1000)*0.1;
		cout<<" Su total es "<<PRICE+exceso1+exceso2<<" $ ";
	}else{
		cout<<" Valor invalido, favor de iniciar otra vez";
	}system("pause");
}
