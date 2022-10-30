import 'package:flutter/material.dart';

class EstadoUser extends StatelessWidget {
  final String urlImage;
  final Color? colorEstado;

  EstadoUser({
    this.colorEstado = Colors.grey,
    required this.urlImage,
  });

  @override
  Widget build(BuildContext context) {
    final _circleavatar = CircleAvatar(
      radius: 30.0,
      backgroundImage: NetworkImage(urlImage),
    );

    final _estado = Positioned(
      right: 1.0,
      bottom: -2.0,
      child: Icon(
        Icons.circle,
        color: colorEstado,
        size: 20.0,
      ),
    );

    return Container(
      child: Stack(
        children: [
          _circleavatar,
          _estado,
        ],
      ),
    );
  }
}
