import 'package:path_provider/path_provider.dart';
import 'package:sqflite/sqflite.dart';
import 'package:path/path.dart';
import 'package:notasapp/src/models/nota_model.dart';

class DBNotas {
  static final db = DBNotas._();
  Database _conexion;
  DBNotas._();

  Future<Database> get conexion async {
    if (_conexion == null) {
      _conexion = await openDBNota();
      return _conexion;
    } else {
      return _conexion;
    }
  }

  Future<Database> openDBNota() async {
    final rutaApp = await getApplicationDocumentsDirectory();
    final path = join(rutaApp.path, 'not.db');
    return await openDatabase(
      path,
      version: 1,
      onCreate: (Database db, int version) {
        db.execute('''
        CREATE TABLE notas(
        id INTEGER PRIMARY KEY,
        titulo TEXT,
        descripcion TEXT,
        foto TEXT
      );
      ''');
      },
    );
  }

  Future<int> createNota(NotaModel nota) async {
    final db = await conexion;
    print(nota.toJson());
    return await db.insert(
      'notas',
      nota.toJson(),
    );
  }

  Future<int> modificarNota(NotaModel nota) async {
    final db = await conexion;
    print(nota.toJson());
    return await db.update(
      'notas',
      nota.toJson(),
      where: 'id=?',
      whereArgs: [nota.id],
    );
  }

  Future<List<NotaModel>> obtenerTodasNotas() async {
    final db = await conexion;
    final datos = await db.query('notas');
    return datos.isNotEmpty
        ? datos.map((nota) => NotaModel.toMap(nota)).toList()
        : [];
  }

  Future<NotaModel> obtenerNotaId(int id) async {
    final db = await conexion;
    final datos = await db.query('notas', where: 'id=?', whereArgs: [id]);
    return datos.isNotEmpty ? NotaModel.toMap(datos.first) : null;
  }

  Future<int> deleteIdNota(int id) async {
    final db = await conexion;
    print(id);
    return await db.delete('notas', where: 'id=?', whereArgs: [id]);
  }

  Future<int> deleteTodaNota() async {
    final db = await conexion;
    return await db.delete('notas');
  }
}
