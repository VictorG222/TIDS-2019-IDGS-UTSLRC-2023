// Dados
// Victo Galvan TI1-4
#include<iostream>
using namespace std;
int d1, d2, d3;

int main(){
	cout<<" Ingrese el valor de dado 1 "<<endl;
	cin>>d1;
	cout<<" Ingrese el valor de dado 2 "<<endl;
	cin>>d2;
	cout<<" Ingrese el valor de dado 3 "<<endl;
	cin>>d3;
	
	if(d1==6&&d2==6&&d3==6){
		cout<<" Excelente "<<endl;
	}else if(d1+d2==12 or d1+d3==12 or d3+d2==12){
		cout<<" Muy bien "<<endl;
	}else if(d1<6&&d2<6&&d3<6){
		cout<<" Pesimo "<<endl;
	}else{
		cout<<" Regular";
	}
}
