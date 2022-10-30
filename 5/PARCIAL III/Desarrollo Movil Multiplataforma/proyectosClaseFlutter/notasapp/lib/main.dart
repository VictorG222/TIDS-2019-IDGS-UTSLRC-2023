import 'package:flutter/material.dart';
import 'package:notasapp/src/models/nota_model.dart';
import 'package:notasapp/src/pages/form_card_page.dart';
import 'package:notasapp/src/pages/home_page.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData.dark(),
      debugShowCheckedModeBanner: false,
      title: 'Materiales',
      initialRoute: '/',
      routes: {
        '/': (_) => HomePage(),
        '/form': (_) => FormCardPage(),
      },
    );
  }
}
