import 'package:disenos/src/widgets/floating_button_home.dart';
import 'package:flutter/material.dart';

class DisenoSimple extends StatelessWidget {
  final separacion = EdgeInsets.symmetric(horizontal: 25.0, vertical: 15.0);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Column(
        children: [
          _imagenFondo(), //primer hijo
          _calPaisaje(), // segundo hijo
          _enlacesPaisaje(), // tercer hijo
          textDescrip(), // cuarto hijo
        ],
      ),
      floatingActionButton: FloatingButtonHome(),
    );
  }

  Widget _imagenFondo() {
    return FadeInImage(
        width: double.infinity,
        height: 200.0,
        fit: BoxFit.cover,
        placeholder: AssetImage('assets/loading.gif'),
        image: NetworkImage(
            'https://wallup.net/wp-content/uploads/2019/09/838755-bonitas-cataratas-naturaleza-paisaje.jpg'));
  }

  Widget _calPaisaje() {
    return Container(
      margin: separacion,
      child: Row(
        mainAxisAlignment: MainAxisAlignment.spaceBetween,
        children: [
          Text('Cascadas de san luis'),
          Row(
            children: [
              Icon(
                Icons.star,
                color: Colors.red,
              ),
              Text('90')
            ],
          )
        ],
      ),
    );
  }

  Widget _enlacesPaisaje() {
    return Container(
      margin: EdgeInsets.symmetric(horizontal: 45.0, vertical: 15.0),
      child: Row(mainAxisAlignment: MainAxisAlignment.spaceBetween, children: [
        _estrucEnlaces(text: 'Call', icono: Icons.phone),
        _estrucEnlaces(text: 'Route', icono: Icons.map),
        _estrucEnlaces(text: 'Share', icono: Icons.share_outlined),
      ]),
    );
  }

  Widget _estrucEnlaces({required String text, required IconData icono}) {
    return Column(children: [
      Icon(
        icono,
        size: 35.0,
        color: Colors.blue,
      ),
      SizedBox(
        height: 10.0,
      ),
      Text(
        text,
        style: TextStyle(color: Colors.blue),
      ),
    ]);
  }

  Widget textDescrip() {
    return Container(
      margin: separacion,
      child: Text(
          'Comunidad social con una organización política común y un territorio y órganos de gobierno propios que es soberana e independiente políticamente de otras comunidades.Comunidad social con una organización política común y un territorio y órganos de gobierno propios que es soberana e independiente políticamente de otras comunidades.Comunidad social con una organización política común y un territorio y órganos de gobierno propios que es soberana e independiente políticamente de otras comunidades.'),
    );
  }
}
