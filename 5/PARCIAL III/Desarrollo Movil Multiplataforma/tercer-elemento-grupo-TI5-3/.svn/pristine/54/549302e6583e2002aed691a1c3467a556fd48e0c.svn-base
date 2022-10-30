import 'package:elemento3/src/providers/providers.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';

class UsuarioSeach extends SearchDelegate {
  final _usuarioProvider = Get.find<UsuarioProvider>();
  @override
  List<Widget> buildActions(BuildContext context) {
    return [
      IconButton(
        onPressed: () {
          query = '';
        },
        icon: Icon(Icons.close),
      ),
    ];
  }

  @override
  Widget buildLeading(BuildContext context) {
    return IconButton(
      onPressed: () {
        close(context, null);
      },
      icon: Icon(Icons.arrow_back),
    );
  }

  @override
  Widget buildResults(BuildContext context) {
    return Container();
  }

  @override
  Widget buildSuggestions(BuildContext context) {
    _usuarioProvider.obtenerUserSeach(query);
    return (query != '')
        ? GetBuilder<UsuarioProvider>(
            builder: (usuarioProvider) {
              return ListView.builder(
                itemCount: usuarioProvider.usuariosSearch.length,
                itemBuilder: (context, i) {
                  final usuario = usuarioProvider.usuariosSearch[i];
                  return ListTile(
                    title: Text(usuario.usuario),
                    leading: CircleAvatar(
                      radius: 22.0,
                      backgroundImage: (usuario.foto == null)
                          ? AssetImage('assets/images/no_user.jpg')
                          : NetworkImage(usuario.foto!) as ImageProvider,
                    ),
                  );
                },
              );
            },
          )
        : Container();
  }
}
