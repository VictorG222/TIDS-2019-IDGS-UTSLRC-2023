// Fibonacci for
// GALVAN VICTOR TI4-4

#include<iostream>


using namespace std;

int main(){
	
	int num, aux1, num_ante=0, aux2=0;
	
	cout<<" FIBONACCI "<<endl;
	cout<<" Introdusca un numero"<<endl;
	cin>>num;
	
	do{
		aux2++;
		printf(" %d , ", num);
		aux1=num;
		num+=num_ante;
		num_ante=aux1;
		
	}while(aux2<=40);
}
