import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  createState() {
    return HomePageState();
  }
}

class HomePageState extends State<HomePage> {
  int _valor = 0;
  final _estiloLetra = TextStyle(fontSize: 20.0);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.cyanAccent,
        title: Text('Contador'),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Text(
              'Numero actual del contador',
              style: _estiloLetra,
            ),
            Text(
              '$_valor',
              style: _estiloLetra,
            ),
          ],
        ),
      ),
      floatingActionButton: Row(
        mainAxisAlignment: MainAxisAlignment.end,
        children: [
          SizedBox(width: 30.0),
          _botonReiniciar(),
          Expanded(child: SizedBox()),
          _botonRestar(),
          SizedBox(width: 10.0),
          _botonSumar(),
        ],
      ),
    );
  }

  Widget _botonSumar() {
    return FloatingActionButton(
      tooltip: 'Boton para sumar.',
      splashColor: Colors.red,
      backgroundColor: Colors.cyanAccent,
      onPressed: () {
        setState(() {
          _valor++;
        });
      },
      child: Icon(
        Icons.add,
      ),
    );
  }

  Widget _botonRestar() {
    return FloatingActionButton(
      tooltip: 'Boton para restar.',
      splashColor: Colors.red,
      backgroundColor: Colors.cyanAccent,
      onPressed: () {
        setState(() {
          if (_valor == 0) {
            _valor = 0;
          } else {
            _valor--;
          }
        });
      },
      child: Icon(
        Icons.remove,
      ),
    );
  }

  Widget _botonReiniciar() {
    return FloatingActionButton(
      tooltip: 'Boton para reiniciar.',
      splashColor: Colors.red,
      backgroundColor: Colors.cyanAccent,
      onPressed: () {
        setState(() {
          _valor = 0;
        });
      },
      child: Icon(
        Icons.rotate_left,
      ),
    );
  }
}
