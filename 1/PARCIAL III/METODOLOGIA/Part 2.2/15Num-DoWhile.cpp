// El mayor de 15 numeros   do-while
// Galvan Victor TI1-4
#include<iostream>
using namespace std;
int num;
int aux, aux2=1, aux3=2147483647;
int main(){
	do{
		cout<<" Ingrese un numero "<<endl;
		cin>>num;
		if(num<=aux3){
			aux3=num;
		}else{
			aux3=aux3;
		}
		if(aux2<=num){
			aux2=num;
		}else{
			aux2=aux2;
		}
		aux++;
	}while(aux<=15);
	cout<<" El mayor es "<<aux2<<endl;
	cout<<" El menor es "<<aux3<<endl;
}
