//el area perrona de un circulo
#include<iostream>
#include<cmath>

using namespace std;
int r, area;
const int PI=3.1416;
int main(){
	cout<<" introduzca radio ";
	cin>>r;
	
	area=PI*pow(r, 2);
	
	cout<<" El area es "<<area<<" centrimetros cuadrados";
	
	
		system("pause");
}

