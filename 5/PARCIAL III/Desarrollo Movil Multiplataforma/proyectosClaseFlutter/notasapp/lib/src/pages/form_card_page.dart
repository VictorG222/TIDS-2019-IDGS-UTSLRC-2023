import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'dart:io';
import 'package:image_picker/image_picker.dart';
import 'package:notasapp/src/models/nota_model.dart';
import 'package:notasapp/src/providers/db_notas.dart';
import 'package:path/path.dart';
import 'package:path_provider/path_provider.dart';

class FormCardPage extends StatefulWidget {
  @override
  FormCardPageState createState() => FormCardPageState();
}

class FormCardPageState extends State<FormCardPage> {
  NotaModel nuevaNota = NotaModel();
  final _keyForm = GlobalKey<FormState>();
  File _imgNota;
  final img = ImagePicker();
  @override
  Widget build(BuildContext context) {
    final mediaQuery = MediaQuery.of(context).size;
    final notaArgument = ModalRoute.of(context).settings.arguments;
    if (notaArgument != null) {
      nuevaNota = notaArgument;
      if (_imgNota == null) {
        if (nuevaNota.foto != null) {
          _imgNota = File(nuevaNota.foto);
        }
      }
    }
    return Scaffold(
      appBar: AppBar(
        title: Text(
            notaArgument != null ? 'Cambiar Material' : 'Agregar Material'),
        actions: [
          _btnCamara(),
          _btnGaleria(),
          _btnDelete(notaArgument),
        ],
      ),
      body: SingleChildScrollView(
        child: Container(
            padding: EdgeInsets.symmetric(vertical: 30.0, horizontal: 25.0),
            child: Form(
              key: _keyForm,
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  _textTitulo(),
                  _imagen(mediaQuery),
                  SizedBox(
                    height: 20.0,
                  ),
                  _textDesc(),
                ],
              ),
            )),
      ),
      floatingActionButton:
          notaArgument != null ? _btnModificar() : _btnCrear(),
    );
  }

  Widget _btnCrear() {
    return FloatingActionButton(
        tooltip: 'Guardar Material',
        child: Icon(Icons.save_outlined),
        onPressed: () {
          if (!_keyForm.currentState.validate()) return;
          if (_keyForm.currentState.validate()) {
            _keyForm.currentState.save();
            if (_imgNota != null) {
              nuevaNota.foto = _imgNota.path;
            }
            DBNotas.db.createNota(nuevaNota);
            Navigator.pushNamed(this.context, '/');
          }
        });
  }

  Widget _btnModificar() {
    return FloatingActionButton(
        tooltip: 'Editar Material',
        child: Icon(Icons.edit),
        onPressed: () {
          if (!_keyForm.currentState.validate()) return;
          if (_keyForm.currentState.validate()) {
            _keyForm.currentState.save();
            if (_imgNota != null) {
              nuevaNota.foto = _imgNota.path;
            }
            DBNotas.db.modificarNota(nuevaNota);
            Navigator.pushNamed(this.context, '/');
          }
        });
  }

  Widget _textTitulo() {
    return TextFormField(
      initialValue: nuevaNota.titulo,
      onSaved: (textTitulo) {
        nuevaNota.titulo = textTitulo;
      },
      validator: (String textTitulo) {
        if (textTitulo == '') {
          return '¡¡¡Campos vacios!!!';
        } else {
          return null;
        }
      },
      style: TextStyle(fontSize: 35.0),
      decoration: InputDecoration(
        border: InputBorder.none,
        hintText: 'Material',
      ),
    );
  }

  Widget _textDesc() {
    return TextFormField(
      initialValue: nuevaNota.descripcion,
      onSaved: (textDesc) {
        nuevaNota.descripcion = textDesc;
      },
      validator: (String textDesc) {
        if (textDesc.length < 10) {
          return 'Capturar mas de 10 letras';
        } else {
          return null;
        }
      },
      maxLines: null,
      decoration: InputDecoration(
        hintStyle: TextStyle(fontSize: 30.0),
        border: InputBorder.none,
        hintText: 'Descripcion',
      ),
    );
  }

  Widget _imagen(Size mediaQuery) {
    return Container(
      child: _imgNota != null
          ? ClipRRect(
              borderRadius: BorderRadius.circular(50.0),
              child: Image.file(
                _imgNota,
                height: mediaQuery.height * 0.5,
              ),
            )
          : null,
      margin: EdgeInsets.symmetric(vertical: 10.0, horizontal: 10.0),
    );
  }

  Widget _btnCamara() {
    return IconButton(
      icon: Icon(Icons.camera_alt),
      onPressed: () {
        _obtenerImagen(ImageSource.camera);
      },
    );
  }

  Widget _btnGaleria() {
    return IconButton(
      icon: Icon(Icons.photo_size_select_actual_outlined),
      onPressed: () {
        _obtenerImagen(ImageSource.gallery);
      },
    );
  }

  Future _obtenerImagen(ImageSource source) async {
    final obtenerImg = await img.getImage(source: source);
    if (obtenerImg == null) return;
    File imagenPath = File(obtenerImg.path);
    final nombreImg = basename(imagenPath.path);
    final directoriopath = await getApplicationDocumentsDirectory();
    File imgObtenida =
        await imagenPath.copy('${directoriopath.path}/$nombreImg');
    setState(() {
      _imgNota = imgObtenida;
    });
  }

  Widget _btnDelete(NotaModel notaArgument) {
    return notaArgument != null
        ? IconButton(
            icon: Icon(Icons.delete),
            onPressed: () {
              DBNotas.db.deleteIdNota(notaArgument.id);
              Navigator.pushNamed(this.context, '/');
            })
        : Container();
  }
}
