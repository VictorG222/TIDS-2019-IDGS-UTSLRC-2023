import 'package:disenos/src/widgets/botonIcono_widget.dart';
import 'package:disenos/src/widgets/circle_avatar_widget.dart';
import 'package:disenos/src/widgets/floating_button_home.dart';
import 'package:disenos/src/widgets/menu_abajo_widget.dart';
import 'package:flutter/material.dart';

class EjercicioPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final Widget columnaDatos = Column(
      children: [
        Text('Pokedex',
            style: TextStyle(
                color: Colors.black,
                fontWeight: FontWeight.bold,
                fontSize: 25.0)),
        Text(
          '24/05/2021',
          style: TextStyle(color: Colors.black),
        )
      ],
    );
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0.0,
        actions: [
          BotonIcono(icono: Icons.camera_enhance_sharp),
          Expanded(child: Container()),
          columnaDatos,
          Expanded(child: Container()),
          BotonIcono(icono: Icons.camera_sharp),
        ],
      ),
      body: Container(
        margin: EdgeInsets.only(top: 25.0),
        child: Center(
          child: Column(
            children: [
              _StackImg(),
              SizedBox(height: 25.0),
              Text('Pokedex #8',
                  style: TextStyle(
                      color: Colors.grey,
                      fontWeight: FontWeight.bold,
                      fontSize: 20.0)),
              SizedBox(height: 14.0),
              Text(
                'Nombre de pokemon',
                style: TextStyle(fontSize: 25.0, fontWeight: FontWeight.bold),
              ),
              SizedBox(height: 14.0),
              Text(
                'squirtle',
                style: TextStyle(
                    fontWeight: FontWeight.bold,
                    fontSize: 55.0,
                    color: Colors.blue),
              ),
              SizedBox(height: 14.0),
              Divider(
                color: Colors.blue,
              ),
            ],
          ),
        ),
      ),
      bottomNavigationBar: MenuAbajo(),
      floatingActionButton: FloatingButtonHome(),
      floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
    );
  }
}

class _StackImg extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Stack(
      children: [
        CircleAvatarWidget(
          backgroundImage: NetworkImage(
              'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png'),
          radius: 125.0,
          elevation: 30.0,
          elevationColor: Colors.blue,
        ),
        CircleAvatarWidget(
          backgroundImage: NetworkImage(
              'https://upload.wikimedia.org/wikipedia/commons/5/51/Pokebola-pokeball-png-0.png'),
          radius: 30.0,
          borderWidth: 7.0,
        )
      ],
    );
  }
}
