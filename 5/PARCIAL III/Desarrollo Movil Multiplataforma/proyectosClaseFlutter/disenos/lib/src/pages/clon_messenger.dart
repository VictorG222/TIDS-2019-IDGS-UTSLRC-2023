import 'package:disenos/src/widgets/botonIcono_widget.dart';
import 'package:disenos/src/widgets/campo_texto_widget.dart';
import 'package:disenos/src/widgets/estado_user_widget.dart';
import 'package:disenos/src/widgets/floating_button_home.dart';
import 'package:disenos/src/widgets/menu_abajo_widget.dart';
import 'package:flutter/material.dart';

class ClonMessenger extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0.0,
        actions: [
          _ChatInfo(),
          Expanded(child: Container()),
          BotonIcono(
            icono: Icons.camera_alt,
          ),
          BotonIcono(
            icono: Icons.edit,
          ),
        ],
      ),
      body: ListView(
        children: [
          CampoTexto(
              borderRadio: 30.0,
              hintText: 'Buscar',
              obscureText: true,
              height: 48.0,
              prefixIcono: Icon(Icons.search_outlined)),
          _PageViewUser(),
          _ListaMensaje(),
        ],
      ),
      bottomNavigationBar: MenuAbajo(),
      floatingActionButton: FloatingButtonHome(),
      floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
    );
  }
}

class _ChatInfo extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(top: 5.0),
      child: Row(
        children: [
          CircleAvatar(
            radius: 40,
            backgroundImage: NetworkImage(
                'https://uploads.toptal.io/user/photo/418751/large_fa100e141cc15e44be9e72fa81f468e6.jpeg'),
          ),
          Text(
            'Chats',
            style: TextStyle(
                color: Colors.black,
                fontSize: 30.0,
                fontWeight: FontWeight.bold),
          )
        ],
      ),
    );
  }
}

class _PageViewUser extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      height: 100.0,
      child: PageView(
        controller: PageController(initialPage: 2, viewportFraction: 0.2),
        children: [
          _User(
            url:
                'https://pbs.twimg.com/profile_images/969073897189523456/rSuiu_Hr.jpg',
            color: Colors.green,
          ),
          _User(
            url:
                'https://pbs.twimg.com/profile_images/1061275018926194690/6MWH9Xi_.jpg',
            color: Colors.green,
          ),
          _User(
            url: 'https://eisaf.es/wp-content/uploads/2017/05/face-8.jpg',
            color: Colors.red,
          ),
          _User(
            url:
                'https://pbs.twimg.com/profile_images/969073897189523456/rSuiu_Hr.jpg',
            color: Colors.green,
          ),
          _User(
            url:
                'https://pbs.twimg.com/profile_images/1061275018926194690/6MWH9Xi_.jpg',
            color: Colors.green,
          ),
          _User(
            url: 'https://eisaf.es/wp-content/uploads/2017/05/face-8.jpg',
            color: Colors.red,
          ),
        ],
      ),
    );
  }
}

class _User extends StatelessWidget {
  final String url;
  final Color? color;
  _User({
    this.color = Colors.white,
    required this.url,
  });
  @override
  Widget build(BuildContext context) {
    return Column(
      children: [
        EstadoUser(
          urlImage: url,
          colorEstado: color,
        ),
        SizedBox(height: 7.0),
        Text(
          'Raul Hernandez',
          overflow: TextOverflow.ellipsis,
          textAlign: TextAlign.center,
        )
      ],
    );
  }
}

class _ListaMensaje extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final usuario = ListTile(
      title: Text('Edgardo fabian'),
      subtitle: Text('tu: Hola como estas bro'),
      trailing: Icon(
        Icons.check_circle_outline,
        size: 20.0,
      ),
      leading: EstadoUser(
          colorEstado: Colors.green,
          urlImage:
              'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThj1t3yVBm0wXhcL50WwQBxLhWNigzvfa5lblDuUKylA5nkZ4E&s'),
    );
    return Container(
      child: Column(
        children: [
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
          usuario,
        ],
      ),
    );
  }
}
