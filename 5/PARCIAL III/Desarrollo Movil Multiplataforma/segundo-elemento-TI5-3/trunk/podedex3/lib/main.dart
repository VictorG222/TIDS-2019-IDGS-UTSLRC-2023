import 'package:flutter/material.dart';
import 'package:podedex3/src/pages/detalle_pokemon.dart';
import 'package:podedex3/src/pages/home_page.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Flutter Demo',
      initialRoute: '/',
      routes: {
        '/': (_) => HomePage(),
        '/detalle': (_) => DetallePokemon(),
      },
    );
  }
}
