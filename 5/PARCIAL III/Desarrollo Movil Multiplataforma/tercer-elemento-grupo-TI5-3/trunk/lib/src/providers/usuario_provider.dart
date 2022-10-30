import 'package:dio/dio.dart';
import 'package:elemento3/src/const/const.dart';
import 'package:elemento3/src/models/models.dart';
import 'package:get/get.dart';

class UsuarioProvider extends GetxController {
  UsuarioProvider() {
    obtenerUser();
  }

  final _url = '${UrlConst.url}/user';
  final _http = Dio();
  List<UsuarioModel> usuarios = [];
  List<UsuarioModel> usuariosSearch = [];
  bool cargando = false;

  Future<void> obtenerUser() async {
    cargando = true;
    update();
    final _response = await _http.get(_url);
    List<dynamic> _data = _response.data['data'];
    _data.forEach((usuario) {
      usuarios.add(UsuarioModel.fromMapJson(usuario));
    });
    cargando = false;
    update();
  }

  Future<void> obtenerUserSeach(String query) async {
    final _response = await _http.get(_url, queryParameters: {'query': query});
    List<dynamic> _data = _response.data;
    final listaUser =
        _data.map((usuario) => UsuarioModel.fromMapJson(usuario)).toList();

    usuariosSearch = [...listaUser];
    update();
  }

  Future<void> usuarioRefresh() async {
    usuarios = [];
    await obtenerUser();
  }
}
