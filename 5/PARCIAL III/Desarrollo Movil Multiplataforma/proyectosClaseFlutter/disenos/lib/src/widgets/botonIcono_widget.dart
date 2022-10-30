import 'package:flutter/material.dart';

class BotonIcono extends StatelessWidget {
  final IconData? icono;
  final Color? color;
  BotonIcono({
    this.icono,
    this.color = Colors.black,
  });
  @override
  Widget build(BuildContext context) {
    return IconButton(
      icon: Icon(
        icono,
        color: color,
        size: 40.0,
      ),
      onPressed: () {},
    );
  }
}
