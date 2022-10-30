// Banco
// Victor Galvan TI1-4
#include <iostream>
using namespace std;
int main(){
    int numCuenta, saldoCuenta, depositos= 0, retiros= 0; 
    double montoD=0, montoR=0, montodt=0, montort=0;
    char op; 
    cout<<"Numero de cuenta: ";
	cin>>numCuenta;
    cout<<"Saldo de la cuenta: ";
    cin>>saldoCuenta;
    do{
    	cout<<"B I E N V E N I D O    A    S U   B A N C O    A M I G O "<<endl;  
    	cout<<"[d] Deposito a la cuenta "<<endl; 
    	cout<<"[r] Retiro a la cuenta "<<endl;
    	cout<<"[c] Consultar reporte general"<<endl;
    	cout<<"[s] Salir"<<endl;
    	cin>>op;
    	switch(op){
    		case 'd':
    			cout<<" Introdusca la cantidad que desea depositar "<<endl;
    			cin>>montoD;
    			saldoCuenta+=montoD;
    			montodt+=montoD;
				depositos++; break;
    		case 'r':
    			cout<<" Introdusca la cantidad que desea retirar "<<endl;
    			cin>>montoR;
    			if(montoR>saldoCuenta){
    				cout<<" Cantidad insuficiente "<<endl;
				}else{saldoCuenta-=montoR;
				montort+=montoR;
				retiros++;
				} break;	
    		case 'c':
    			cout<<" Deposito "<<depositos<<" vez/veces "<<endl;
    			cout<<" Retiro "<<retiros<<" vez/veces "<<endl;
    			cout<<" Cantidad depositada "<<montodt<<endl;
    			cout<<" Cantidad retirada "<<montort<<endl;
    			cout<<" Saldo de la cuenta $"<<saldoCuenta<<endl; break;
    		default:
    			cout<<" Operacion no encontrada "<<endl;	
			}	
	}while (op!='s' && op !='S');
	cout<<"   Gracias    por    su    visita,    vuelva    pronto. "<<endl;
}
