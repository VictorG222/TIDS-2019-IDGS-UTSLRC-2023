// PLACAS DE UN AUTOMOVIL

#include<iostream>
#include<cmath>

using namespace std;

const int COSTO=1205;
int fecha, pre_c, total2015, total2014;

bool dis;

int main ( ){
	cout<<" Introdusca el costo del carro ";
	cin>>pre_c;
	
	cout<<" Introdusca la fecha del modelo del automovil ";
	cin>>fecha;
	
	cout<<" Es discapasitado o funcionario publico ";
	cin>>dis;
	
	total2015=COSTO+pre_c*1.5;
	total2014=COSTO;
	
	if (dis==true&&fecha>=2015){
		cout<<" Su total es"<<total2015*0.5;		
	}else if(dis==true&&fecha<=2014){
		cout<<" Su total es "<<total2014;
	}else if(dis==false&&fecha>=2015){
		cout<<" Su total es "<<COSTO+pre_c*1.5;
	}else if(dis==false&&fecha<=2014){
		cout<<" Su total es "<<COSTO;
	}else{
		cout<<" Error de datos ";
	}
	
}

