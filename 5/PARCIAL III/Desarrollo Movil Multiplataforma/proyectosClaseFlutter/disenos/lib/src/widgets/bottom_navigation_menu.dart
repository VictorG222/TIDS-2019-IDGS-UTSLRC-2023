import 'package:flutter/material.dart';

class BottomNavigationMenu extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      height: 80.0,
      child: BottomNavigationBar( 
        unselectedItemColor:Color.fromRGBO(109,109,145, 1.0),
        selectedItemColor:Color.fromRGBO(242,143,170, 1.0),  
        backgroundColor: Color.fromRGBO(53,54,83,1.0),
        iconSize: 31.0,
        items: [
          BottomNavigationBarItem(
            icon: Icon(Icons.calendar_today),
            label: '',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.bar_chart_outlined),
            label: '',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.person),
            label: '',
          ),
        ],
      ),
    );
  }
}
