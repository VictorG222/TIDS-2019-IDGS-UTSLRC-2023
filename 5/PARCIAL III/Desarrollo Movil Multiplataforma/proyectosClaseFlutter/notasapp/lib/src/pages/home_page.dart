import 'package:flutter/material.dart';
import 'package:notasapp/src/models/nota_model.dart';
import 'package:notasapp/src/providers/db_notas.dart';
import 'dart:io';

class HomePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final _sizedQuery = MediaQuery.of(context).size;
    return Scaffold(
      body: Stack(
        children: [
          _header(_sizedQuery),
          _body(_sizedQuery),
        ],
      ),
      floatingActionButton: _botonCrear(context),
    );
  }

  Widget _header(Size sizeQuery) {
    return SafeArea(
      child: Container(
        child: Column(mainAxisAlignment: MainAxisAlignment.center, children: [
          Text(
            'Materiales Carpinteria',
            style: TextStyle(color: Colors.white, fontSize: 30.0),
          ),
        ]),
        width: double.infinity,
        height: sizeQuery.height * 0.2,
        decoration: BoxDecoration(
          borderRadius: BorderRadius.only(bottomRight: Radius.circular(110.0)),
          gradient: LinearGradient(
            colors: [Colors.pink, Colors.pink[100]],
          ),
        ),
      ),
    );
  }

  Widget _body(Size sizeQuery) {
    return Container(
      margin: EdgeInsets.only(top: 160.0),
      child: FutureBuilder(
        future: DBNotas.db.obtenerTodasNotas(),
        builder:
            (BuildContext context, AsyncSnapshot<List<NotaModel>> snapshot) {
          if (snapshot.hasData) {
            return ListView.builder(
              itemCount: snapshot.data.length,
              itemBuilder: (BuildContext context, int i) {
                return _formaCard(snapshot.data[i], context, sizeQuery);
              },
            );
          } else {
            return Center(child: CircularProgressIndicator());
          }
        },
      ),
    );
  }

  Widget _formaCard(NotaModel nota, BuildContext context, Size sizeQuery) {
    return GestureDetector(
      onTap: () {
        Navigator.pushNamed(context, '/form', arguments: nota);
      },
      child: Container(
        height: sizeQuery.height / 7.0,
        padding: EdgeInsets.symmetric(horizontal: 5.0, vertical: 5.0),
        child: Card(
          elevation: 10.0,
          shadowColor: Colors.pink[600],
          child: Container(
            padding: EdgeInsets.only(top: 10.0),
            child: ListTile(
              trailing: nota.foto != null
                  ? CircleAvatar(
                      radius: 30.0,
                      backgroundImage: FileImage(File(nota.foto)),
                    )
                  : null,
              title: Container(
                padding: EdgeInsets.only(bottom: 10.0),
                child: Text(
                  nota.titulo,
                  style: TextStyle(fontSize: 20.0, fontWeight: FontWeight.bold),
                ),
              ),
              subtitle: Text(
                nota.descripcion,
                maxLines: 2,
                overflow: TextOverflow.ellipsis,
              ),
            ),
          ),
        ),
      ),
    );
  }

  Widget _botonCrear(BuildContext context) {
    return FloatingActionButton(
      onPressed: () {
        Navigator.pushNamed(context, '/form');
      },
      child: Icon(Icons.add),
    );
  }
}
