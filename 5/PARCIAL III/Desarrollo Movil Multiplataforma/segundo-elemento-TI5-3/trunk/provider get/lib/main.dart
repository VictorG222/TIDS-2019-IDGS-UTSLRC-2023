import 'package:elemento2/src/pages/secciones_page.dart';
import 'package:flutter/material.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData.dark(),
      debugShowCheckedModeBanner: false,
      title: 'Elemento 2',
      initialRoute: '/menu',
      routes: {
        '/menu': (_) => SeccionesPage(),
      },
    );
  }
}
