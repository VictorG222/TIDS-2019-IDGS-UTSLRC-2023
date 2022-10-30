import 'package:flutter/material.dart';

class FloatingButtonHome extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      child: FloatingActionButton(
          onPressed: () => Navigator.pop(context), child: Icon(Icons.home)),
    );
  }
}
