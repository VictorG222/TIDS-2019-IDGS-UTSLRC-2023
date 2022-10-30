import 'package:flutter/material.dart';

class Prueba extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Saludo()
      
    );
  }


//antes
  saludo(){
    return Center(
        child: Text(
          'hola desde el widget de prueba',
          style: TextStyle(fontSize: 40.0),
        ),
      );
  }
}

//ahora
class Saludo extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    return Center(
        child: Text(
          'hola desde el widget de prueba',
          style: TextStyle(fontSize: 40.0),
        ),
      );
  }
}