#include <iostream>
using namespace std;

//Programa que simula la compra de un café y muestra el costo final

int main (){
	
	int coffee;
	int cost = 0;
	
	cout << "Coffee sizes: 1=small 2=medium 3=large" << endl;
    cout << "Please enter your selection: " << endl;
    cin >> coffee;

    if (coffee == 1){
        cost += 25;
	}else if (coffee == 2){
		cost += 30;
	}else if (coffee == 3){
		cost += 35;
	}else{
		cout << "Invalid selection. Please select 1, 2, or 3.";
	}   
        
    if (cost != 0){
    	cout << "Please insert " << cost << " cents" <<endl;
	}
    cout << "Thank you for your business.";
}
