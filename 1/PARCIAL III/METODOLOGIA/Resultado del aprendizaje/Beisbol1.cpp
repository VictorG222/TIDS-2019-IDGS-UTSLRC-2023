// Beisbol (sin limite)
// Victor Galvan TI1-4
#include<iostream>
using namespace std;
int adul, nin, aux1, aux2, totaln, totala, taa, tan, totalgeneral;
const int pre_a=20, pre_n=10;
int main(){
	cout<<" PARTIDO BEISBOL "<<endl;
	do{
		cout<<" Ingrese la cantidad de Boletos que desea "<<endl;		
		cout<<" Numero de aultos "<<endl;
		cin>>adul;
		cout<<" Numero de infantes "<<endl;
		cin>>nin;
		cout<<" Su total es $"<<adul*pre_a+nin*pre_n<<endl;
		cout<<" Toltal infantes $"<<nin*pre_n<<endl;
		cout<<" Total adultos $"<<adul*pre_a<<endl;
		totaln+=nin*pre_n;
		totala+=adul*pre_a;
		taa+=adul;
		tan+=nin;
		totalgeneral+=nin+adul;
	}while(adul>0&&nin>0);
	cout<<" Total de ventas del partido $"<<totaln+totala<<endl;
	cout<<" Total infantes $"<<totaln<<endl;
	cout<<" Total adultos $"<<totala<<endl;	
	cout<<" Total de personas que asistieron "<<totalgeneral<<endl;
	cout<<" Total de infantes que asistieron "<<tan<<endl;
	cout<<" Total de adultos que asistieron "<<taa<<endl;
}
