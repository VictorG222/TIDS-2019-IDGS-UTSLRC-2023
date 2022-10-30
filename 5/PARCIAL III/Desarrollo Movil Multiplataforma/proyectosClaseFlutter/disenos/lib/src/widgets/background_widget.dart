import 'package:flutter/material.dart';

class BackgroundWidget extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final _fondo = Container(
      width: double.infinity,
      height: double.infinity,
      decoration: BoxDecoration(
        gradient: LinearGradient(
            begin: Alignment.topCenter,
            end: Alignment.bottomCenter,
            colors: [
              Color.fromRGBO(51,51,101, 1.0),
              Color.fromRGBO(35,37,57, 1.0)
            ]),
      ),
    );

    final _cuadrado = Positioned(
      left: -50,
      top: -100,
      child: Transform.rotate(
        angle: 95.0,
        child: Container(
          width: 340.0,
          height: 340.0,
          decoration: BoxDecoration(
            borderRadius: BorderRadius.circular(50.0),
            gradient: LinearGradient(
                begin: Alignment.topCenter,
                end: Alignment.bottomCenter,
                colors: [
                  Color.fromRGBO(238, 128, 198, 1.0),
                  Color.fromRGBO(221, 28, 150, 1.0)
                ]),
          ),
        ),
      ),
    );

    return Container(
      child: Stack(
        children: [
          _fondo,
          _cuadrado,
        ],
      ),
    );
  }
}
