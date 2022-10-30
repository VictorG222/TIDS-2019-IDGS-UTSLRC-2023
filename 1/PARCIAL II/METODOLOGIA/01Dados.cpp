#include<iostream>


using namespace std;

int d1, d2, d3;

int main(){
	cout<<" Dado 1 ";
	cin>>d1;
	cout<<" Dado 2 ";
	cin>>d2;
	cout<<" Dado 3 ";
	cin>>d3;
	
	if(d1==6&&d2==6&&d3==6){
		cout<<" Exelente ";
	}else if(d1<6&d2<6&&d3<6){
		cout<<" Pesimo ";
	}else if(d1+d2==12 or d2+d3==12 or d3+d1==12){
		cout<<" Muy bien ";
	}else{
		cout<<" Regular ";
	}
}
