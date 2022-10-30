import 'package:flutter/material.dart';

class UsuariosPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Center(
      child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: [
          Text('Hola estoy en la seccion de usuarios'),
          CircleAvatar(
            radius: 50.0,
            backgroundImage: NetworkImage(
                'https://hipertextual.com/wp-content/uploads/2018/11/Stan-Lee.jpg'),
          ),
        ],
      ),
    );
  }
}
