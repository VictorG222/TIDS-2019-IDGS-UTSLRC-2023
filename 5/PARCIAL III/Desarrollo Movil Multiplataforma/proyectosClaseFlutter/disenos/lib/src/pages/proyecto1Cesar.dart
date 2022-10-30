import 'package:disenos/src/widgets/botonIcono_widget.dart';
import 'package:flutter/material.dart';

class EjercicioPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0.0,
        actions: [
          BotonIcono(icono: Icons.reorder),
          Expanded(child: Container()),
          Column(
            children: [
              Text(
                'Pokedex',
                style: TextStyle(color: Colors.black),
              ),
              Text(
                '24/05/2021',
                style: TextStyle(color: Colors.black),
              ),
            ],
          ),
          Expanded(child: Container()),
          BotonIcono(icono: Icons.location_on),
        ],
      ),
      body: Container(child:  Column(children: [],)
      ,),
    );
  }
}
