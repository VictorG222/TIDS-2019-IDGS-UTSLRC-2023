// Juego por canasta
// Victor Galvan
#include<iostream>
using namespace std;
int aux1, total;
const int v=10, r=15, a=5, z=20, n=-5, no=0;
char color;
int main(){
	for(aux1=0;aux1<6;aux1++){
		cout<<" Color en el que cayo la pelota "<<endl;
		cout<<" Azul [z] Rojo [r] Verde [v] Amarillo [a] Negro [n] Ninguna [x]"<<endl;
		cin>>color;
		switch(color){
			case 'z':
				total+=z; break;
			case 'r':
				total+=r; break;
			case 'v':
				total+=v; break;
			case 'a':
				total+=a; break;
			case 'n':
				total+=n; break;
			case 'x':
				total+=no; break;
			default:
				cout<<" ERROR "<<endl;	
		}cout<<" Su total de puntos es "<<total<<endl;
		}
	cout<<" Fin del juego "<<endl;
		switch(total){
			case -36 ... 0:
				cout<<" Ganas $0 "<<endl; break;
			case 1 ... 40:
				cout<<" Ganas $20 "<<endl; break;
			case 41 ... 80:
				cout<<" Ganas $50 "<<endl; break;
			case 81 ... 100:
				cout<<" Ganas $80 "<<endl; break;
			case 101 ... 120:
				cout<<" Ganas $100 "<<endl; break;
			default:
				cout<<" Error "<<endl;
		}
}
