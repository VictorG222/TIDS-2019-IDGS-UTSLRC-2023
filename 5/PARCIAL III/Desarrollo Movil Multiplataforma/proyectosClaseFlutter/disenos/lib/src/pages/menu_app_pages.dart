import 'dart:ui';

import 'package:disenos/src/widgets/background_widget.dart';
import 'package:disenos/src/widgets/bottom_navigation_menu.dart';
import 'package:flutter/material.dart';

class MenuApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        child: Stack(
          children: [
            BackgroundWidget(),
            SingleChildScrollView(
              child: Column(
                children: [
                  _textMenu(),
                  _bodyMenu(context),
                ],
              ),
            ),
          ],
        ),
      ),
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
                  text: 'Diseño basico',
                  color: Colors.blue,
                  icono: Icons.grade_outlined,
                  context: context,
                  ruta: '/disenoSimple'),
              _contenidoMenu(
                  text: 'Scroll app',
                  color: Colors.green,
                  icono: Icons.screen_lock_rotation_outlined,
                  context: context,
                  ruta: '/scrollSimple'),
            ],
          ),
          TableRow(
            children: [
              _contenidoMenu(
                  text: 'Clon messenger',
                  icono: Icons.messenger_outlined,
                  color: Colors.purple,
                  context: context,
                  ruta: '/clon_messenger'),
              _contenidoMenu(
                  text: 'App UI',
                  icono: Icons.person_pin,
                  color: Color.fromRGBO(253, 108, 128, 1.0),
                  context: context,
                  ruta: '/ejercicio'),
            ],
          ),
          TableRow(
            children: [
              _contenidoMenu(
                  text: 'Proyecto1',
                  icono: Icons.arrow_back_sharp,
                  color: Colors.blue,
                  context: context,
                  ruta: '/proyecto1'),
              _contenidoMenu(
                  text: 'Proyecto2',
                  icono: Icons.arrow_circle_down,
                  color: Colors.blue,
                  context: context,
                  ruta: '/proyecto2'),
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
    return ClipRRect(
      child: BackdropFilter(
        filter: ImageFilter.blur(sigmaX: 5.0, sigmaY: 5.0),
        child: GestureDetector(
          onTap: () {
            Navigator.pushNamed(context, ruta);
          },
          child: Container(
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                CircleAvatar(
                  radius: 34.0,
                  backgroundColor: color,
                  child: Icon(
                    icono,
                    size: 40.0,
                  ),
                ),
                SizedBox(height: 30.0),
                Text(
                  text,
                  style: TextStyle(color: color, fontSize: 15.0),
                )
              ],
            ),
            margin: EdgeInsets.all(15.0),
            height: 150.0,
            decoration: BoxDecoration(
              borderRadius: BorderRadius.circular(20.0),
              color: Color.fromRGBO(57, 61, 97, 0.5),
            ),
          ),
        ),
      ),
    );
  }

  Widget _textMenu() {
    return Container(
      width: double.infinity,
      margin: EdgeInsets.only(top: 80.0, left: 10.0, bottom: 25.0),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Text(
            'Menu apps #1',
            style: TextStyle(
                color: Colors.white,
                fontWeight: FontWeight.bold,
                fontSize: 30.0),
          ),
          SizedBox(height: 10.0),
          Text(
            'Trabajos realizados en el elemento 1',
            style: TextStyle(
              color: Colors.white,
              fontSize: 16.0,
            ),
          ),
        ],
      ),
    );
  }
}
