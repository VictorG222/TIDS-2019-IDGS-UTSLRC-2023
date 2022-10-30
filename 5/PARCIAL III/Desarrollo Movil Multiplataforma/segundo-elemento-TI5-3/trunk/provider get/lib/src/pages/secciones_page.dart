import 'package:elemento2/src/pages/inventario_page.dart';
import 'package:elemento2/src/pages/usuarios_page.dart';
import 'package:elemento2/src/providers/provider_menu.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';

class SeccionesPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        centerTitle: true,
        title: Text('Menu estados'),
      ),
      body: GetBuilder(
        builder: (ProviderMenu proMenu) {
          return _BodyPagina(proMenu);
        },
      ),

      bottomNavigationBar: GetBuilder<ProviderMenu>(
        builder: (ProviderMenu proMenu) {
          return _MenuBottom(proMenu);
        },
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: () {},
        child: Icon(Icons.add),
      ),
      floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
    );
  }
}

class _BodyPagina extends StatelessWidget {
  final ProviderMenu proMenu;
  _BodyPagina(this.proMenu);

  @override
  Widget build(BuildContext context) {
    if (proMenu.indexMen == 0) {
      return UsuariosPage();
    } else {
      return InventarioPage();
    }
  }
}

class _MenuBottom extends StatelessWidget {
  final ProviderMenu proMenu;
  _MenuBottom(this.proMenu);
  @override
  Widget build(BuildContext context) {
    return BottomNavigationBar(
      onTap: (int i) {
        proMenu.indexMen = i;
      },
      currentIndex: proMenu.indexMen,
      items: [
        BottomNavigationBarItem(
          icon: Icon(Icons.person_pin_circle),
          label: 'Usuarios',
        ),
        BottomNavigationBarItem(
          icon: Icon(Icons.personal_video_rounded),
          label: 'Inventario',
        ),
      ],
    );
  }
}
