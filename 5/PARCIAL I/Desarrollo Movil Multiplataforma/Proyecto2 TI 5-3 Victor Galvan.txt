import 'dart:ui';

import 'package:disenos/src/widgets/botonIcono_widget.dart';
import 'package:flutter/material.dart';

class Proyecto2 extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0.0,
        actions: [
          BotonIcono(icono: Icons.reorder),
          Expanded(child: Container()),
          _Title(),
          Expanded(child: Container()),
          CircleAvatar(
            radius: 25.0,
            backgroundImage: NetworkImage(
                'https://images.moviefit.me/p/o/132604-aurora-aksnes.jpg'),
          ),
        ],
      ),
      body: Container(
          color: Colors.white,
          child: Column(
            children: [
              Container(
                  padding: EdgeInsets.only(left: 50.0),
                  child: _CallRectangle()),
              Container(
                padding: EdgeInsets.only(
                    left: 20.0, right: 100.0, top: 30.0, bottom: 30.0),
                child: Text(
                  'Specialist Suggestions',
                  style: TextStyle(
                      color: Colors.black,
                      fontSize: 20.0,
                      fontWeight: FontWeight.bold),
                ),
              ),
              _bodyMenu(context),
            ],
          )),
      bottomNavigationBar: BottomNavigationMenu(),
    );
  }

  Widget _bodyMenu(BuildContext context) {
    return Container(
      child: Table(
        children: [
          TableRow(
            children: [
              _contenidoMenu(
                  text: 'Symthoms Awearness',
                  color: Colors.black,
                  icono: Icons.sick,
                  context: context,
                  ruta: '/'),
              _contenidoMenu(
                  text: 'Routine Exercise',
                  color: Colors.black,
                  icono: Icons.fitness_center,
                  context: context,
                  ruta: '/'),
            ],
          ),
          TableRow(
            children: [
              _contenidoMenu(
                  text: 'Daily Food',
                  icono: Icons.ramen_dining,
                  color: Colors.black,
                  context: context,
                  ruta: '/'),
              _contenidoMenu(
                  text: 'Medicine Tips',
                  icono: Icons.medication,
                  color: Colors.black,
                  context: context,
                  ruta: '/'),
            ],
          ),
        ],
      ),
    );
  }

  Widget _contenidoMenu({
    required String text,
    IconData? icono,
    Color? color,
    required BuildContext context,
    required String ruta,
  }) {
    return Container(
      child: Column(
        mainAxisAlignment: MainAxisAlignment.start,
        children: [
          Container(
            padding: EdgeInsets.only(right: 100.0),
            child: Icon(
              icono,
              size: 60.0,
              color: Colors.orange[600],
            ),
          ),
          SizedBox(height: 30.0),
          Text(
            text,
            style: TextStyle(
                color: color, fontSize: 25.0, fontWeight: FontWeight.bold),
          )
        ],
      ),
      margin: EdgeInsets.all(15.0),
      height: 150.0,
      decoration: BoxDecoration(
        borderRadius: BorderRadius.circular(20.0),
        color: Colors.grey[200],
      ),
    );
  }
}

class _Title extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      child: Center(
        child: Text(
          'Covid 19',
          style: TextStyle(
              color: Colors.black, fontSize: 30.0, fontWeight: FontWeight.bold),
        ),
      ),
    );
  }
}

class BottomNavigationMenu extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      height: 80.0,
      child: BottomNavigationBar(
        unselectedItemColor: Colors.black,
        selectedItemColor: Colors.black,
        backgroundColor: Colors.white,
        iconSize: 31.0,
        items: [
          BottomNavigationBarItem(
            icon: Icon(Icons.home),
            label: 'Home',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.signal_cellular_alt),
            label: 'Reports',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.person),
            label: 'Health',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.phone),
            label: 'Contact',
          ),
        ],
      ),
    );
  }
}

class _CallRectangle extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      height: 200,
      decoration: BoxDecoration(
          borderRadius: BorderRadius.circular(20.0), color: Colors.blue[900]),
      child: Container(
        padding: EdgeInsets.all(20.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text(
              'Emergency',
              style: TextStyle(
                  color: Colors.white,
                  fontSize: 15.0,
                  fontWeight: FontWeight.bold),
            ),
            Text(
              'Know safety tips and',
              style: TextStyle(
                  color: Colors.white,
                  fontSize: 20.0,
                  fontWeight: FontWeight.bold),
            ),
            Text(
              'precautions from top Doctors.',
              style: TextStyle(
                  color: Colors.white,
                  fontSize: 20.0,
                  fontWeight: FontWeight.bold),
            ),
            Container(
              padding: EdgeInsets.all(20.0),
              child: Row(
                children: [
                  Container(
                    padding: EdgeInsets.all(15.0),
                    decoration: BoxDecoration(
                        borderRadius: BorderRadius.circular(60.0),
                        color: Colors.orange[400]),
                    child: Text(
                      'Call Now',
                      style: TextStyle(
                          color: Colors.white,
                          fontSize: 15.0,
                          fontWeight: FontWeight.bold),
                    ),
                  ),
                  SizedBox(
                    width: 20.0,
                  ),
                  Container(
                    padding: EdgeInsets.all(15.0),
                    decoration: BoxDecoration(
                        borderRadius: BorderRadius.circular(60.0),
                        color: Colors.purple[400]),
                    child: Text(
                      'Find Doctor',
                      style: TextStyle(
                          color: Colors.white,
                          fontSize: 15.0,
                          fontWeight: FontWeight.bold),
                    ),
                  ),
                ],
              ),
            )
          ],
        ),
      ),
    );
  }
}
