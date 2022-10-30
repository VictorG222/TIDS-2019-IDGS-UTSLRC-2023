import 'package:elemento3/src/widgets/widgets.dart';
import 'package:flutter/material.dart';

class LoginPage extends StatefulWidget {
  @override
  createState() => LoginPageState();
}

class LoginPageState extends State<LoginPage> {
 


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Stack(
        alignment: AlignmentDirectional.topCenter,
        children: [
          FondoHeader(),
          SingleChildScrollView(
            child: Column(
              children: [
                _HeaderText(),
                Formulario(),
              ],
            ),
          )
        ],
      ),
    );
  }
}

class Formulario extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final _mediaQuery = MediaQuery.of(context).size;

    return Container(
      margin: EdgeInsets.only(top: 18.0),
      width: _mediaQuery.width * 0.90,
      height: _mediaQuery.height * 0.66,
      child: Card(
        child: Container(
          margin: EdgeInsets.symmetric(horizontal: 20.0),
          child: Column(
            children: [
              _TextoForm(),
              _InputEmail(),
              SizedBox(height: 30.0),
              _InputPassword(),
              SizedBox(height: 20.0),
              _BtnAcceso(),
              _TextRegistro(),
            ],
          ),
        ),
        elevation: 12.0,
        shape: RoundedRectangleBorder(
          borderRadius: BorderRadius.circular(20.0),
        ),
      ),
    );
  }
}

class _TextRegistro extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    return TextButton(onPressed: (){}, child: Text(' ¿No tienes cuenta?'));
  }
}

class _BtnAcceso extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return ElevatedButton(
      onPressed: () {},
      child: Text('Acceder'),
      style: ElevatedButton.styleFrom(
          padding: EdgeInsets.symmetric(horizontal: 70.0)),
    );
  }
}

class _TextoForm extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: EdgeInsets.only(bottom: 60.0, top: 20.0),
      child: Text(
        'Acceso',
        style: TextStyle(fontSize: 22.0, fontWeight: FontWeight.bold),
      ),
    );
  }
}

class _HeaderText extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final _mediaQuery = MediaQuery.of(context).size;

    return Padding(
      padding: EdgeInsets.only(top: _mediaQuery.width * 0.15),
      child: Column(
        children: [
          Text(
            'Inicio de sesión',
            style: TextStyle(
              color: Colors.white,
              fontWeight: FontWeight.bold,
              fontSize: 35.0,
            ),
          ),
          Icon(
            Icons.person_pin_circle,
            color: Colors.white,
            size: 70,
          ),
        ],
      ),
    );
  }
}

class _InputEmail extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return TextFormField(
      keyboardType: TextInputType.emailAddress,
      decoration: InputDecoration(
          border: OutlineInputBorder(
            borderRadius: BorderRadius.circular(10.0),
          ),
          prefixIcon: Icon(
            Icons.email,
            color: Color.fromRGBO(179, 90, 117, 1.0),
          ),
          labelText: 'Email',
          hintText: 'Ejemplo@gmail.com',
          hintTextDirection: TextDirection.ltr),
    );
  }
}

class _InputPassword extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return TextFormField(
      obscureText: true,
      decoration: InputDecoration(
        hintText: 'escriba su contraseña',
        labelText: 'Contraseña',
        helperText: 'Minimo 6 letras',
        prefixIcon: Icon(
          Icons.lock,
          color: Color.fromRGBO(179, 90, 117, 1.0),
        ),
        border: OutlineInputBorder(
          borderRadius: BorderRadius.circular(10.0),
        ),
      ),
    );
  }
}
