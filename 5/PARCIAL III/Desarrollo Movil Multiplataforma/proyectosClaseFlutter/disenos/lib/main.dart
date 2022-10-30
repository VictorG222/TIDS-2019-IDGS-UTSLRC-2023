import 'package:disenos/src/pages/clon_messenger.dart';
import 'package:disenos/src/pages/diseno_simple.dart';
import 'package:disenos/src/pages/ejercicio_page.dart';
import 'package:disenos/src/pages/menu_app_pages.dart';
import 'package:disenos/src/pages/proyecto1.dart';
import 'package:disenos/src/pages/proyecto2.dart';
import 'package:disenos/src/pages/prueba.dart';
import 'package:disenos/src/pages/scroll_simple.dart';
import 'package:flutter/material.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Disenos grupo TI5-3',
      initialRoute: '/menu',
      routes: {
        '/disenoSimple': (_) => DisenoSimple(),
        '/scrollSimple': (_) => ScrollSimple(),
        '/clon_messenger': (_) => ClonMessenger(),
        '/prueba': (_) => Prueba(),
        '/ejercicio': (_) => EjercicioPage(),
        '/proyecto1': (_) => Proyecto1(),
        '/proyecto2': (_) => Proyecto2(),
        '/menu': (_) => MenuApp()
      },
    );
  }
}
