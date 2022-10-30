import 'package:elemento3/src/pages/pages.dart';
import 'package:flutter/material.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData(
        primaryColor: Color.fromRGBO(100, 30, 200, 1.0)
      ),
      debugShowCheckedModeBanner: false,
      title: 'App ventas',
      initialRoute: '/usuarios',
      routes: {
        '/login': (_) => LoginPage(),
        '/usuarios':(_)=>HomePage()
      },
    );
  }
}
