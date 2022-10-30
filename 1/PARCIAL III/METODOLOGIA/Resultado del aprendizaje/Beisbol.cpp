// Beisbol (Cuendo un estadio tiene un limite de personas)
// Victor Galvan TI1-4
#include<iostream>
using namespace std;
int adul, nin, aux1, aux2, totaln, totala;
const int pre_a=20, pre_n=10;
int main(){	
	cout<<" PARTIDO BEISBOL "<<endl;
	for(aux1=0;aux1<=500;aux1+=aux2){	
		cout<<" Ingrese la cantidad de Boletos que desea "<<endl;	
		cout<<" Numero de aultos "<<endl;
		cin>>adul;
		cout<<" Numero de infantes "<<endl;
		cin>>nin;
		aux2=adul+nin;
		cout<<" Su total es "<<adul*pre_a+nin*pre_n<<endl;
		cout<<" Toltal infantes "<<nin*pre_n<<endl;
		cout<<" Total adultos "<<adul*pre_a<<endl;	
		totaln+=nin*pre_n;
		totala+=adul*pre_a;
	}
	cout<<" Total de ventas del partido "<<totaln+totala<<endl;
	cout<<" Total infantes "<<totaln<<endl;
	cout<<" Total adultos "<<totala<<endl;	
}
