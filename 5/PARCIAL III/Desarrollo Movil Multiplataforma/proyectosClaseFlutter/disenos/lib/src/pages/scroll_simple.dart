import 'package:disenos/src/widgets/floating_button_home.dart';
import 'package:flutter/material.dart';

class ScrollSimple extends StatelessWidget {
  final _estiloText = TextStyle(color: Colors.white, fontSize: 50.0);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        child: PageView(
          scrollDirection: Axis.vertical,
          children: [
            _pagina1(),
            _pagina2(),
          ],
        ),
      ),
      floatingActionButton: FloatingButtonHome(),
    );
  }

  Widget _pagina1() {
    return Stack(
      children: [
        _fondoImg(),
        _textoFondo(),
      ],
    );
  }

  Widget _pagina2() {
    return Stack(
      children: [
        Container(
          width: double.infinity,
          height: double.infinity,
          decoration: BoxDecoration(
            gradient: LinearGradient(
              colors: [
                Colors.blueAccent,
                Colors.red,
              ],
            ),
          ),
        ),
        Center(
          child: ElevatedButton(
            onPressed: () {},
            child: Text('Bienvenido'),
          ),
        )
      ],
    );
  }

  Widget _fondoImg() {
    return Container(
      width: double.infinity,
      child: Image.network(
        'https://i.pinimg.com/originals/2b/7e/b8/2b7eb8eec0d9504138a7d1d6ccdd6dab.jpg',
        fit: BoxFit.cover,
      ),
    );
  }

  Widget _textoFondo() {
    return Center(
      child: Container(
        padding: EdgeInsets.only(top: 130.0),
        child: Column(children: [
          Text(
            '11 °',
            style: _estiloText,
          ),
          Text(
            'Jueves',
            style: _estiloText,
          ),
          Expanded(child: Container()),
          Icon(
            Icons.expand_more_sharp,
            color: Colors.white,
            size: 70.0,
          )
        ]),
      ),
    );
  }
}
