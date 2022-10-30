import 'package:elemento2/src/providers/provider_container.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';

class HomePage extends StatelessWidget {
  final providerContainer = Get.put(ProviderContainer());
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Prueba de estados'),
        centerTitle: true,
      ),
      body: Center(
        child: GetBuilder(builder: (ProviderContainer provider) {
          return Container(
            width: 200.0,
            height: 200.0,
            decoration: BoxDecoration(color: provider.colorContainer),
          );
        }),
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: () {
          providerContainer.colorContainer = Colors.yellow;
        },
        child: Icon(Icons.add),
      ),
    );
  }
}
