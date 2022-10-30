import 'package:flutter/material.dart';

class FondoHeader extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final _mediaQuery = MediaQuery.of(context).size;

    return Stack(
      alignment: AlignmentDirectional.center,
      children: [
        Container(
          height: _mediaQuery.height * 0.35,
          decoration: BoxDecoration(
            gradient: LinearGradient(colors: [
              Color.fromRGBO(107, 53, 115, 1.0),
              Color.fromRGBO(179, 90, 117, 1.0),
            ]),
          ),
        ),
        _CirculoFondo(left: 70.0, top: 40),
        _CirculoFondo(right: 160.0, top: 12),
        _CirculoFondo(),
        _CirculoFondo(right: 50.0, top: 47),
        _CirculoFondo(right: 90.0, bottom: 17),
        _CirculoFondo(bottom: 10.0, left: 17),
      ],
    );
  }
}

class _CirculoFondo extends StatelessWidget {
  final double? bottom;
  final double? top;
  final double? left;
  final double? right;

  _CirculoFondo({this.bottom, this.left, this.right, this.top});
  @override
  Widget build(BuildContext context) {
    final _mediaQuery = MediaQuery.of(context).size;
    return Positioned(
      bottom: bottom,
      left: left,
      right: right,
      top: top,
      child: Container(
        width: _mediaQuery.width * 0.12,
        height: _mediaQuery.height * 0.07,
        decoration: BoxDecoration(
          color: Color.fromRGBO(255, 255, 255, 0.1),
          borderRadius: BorderRadius.circular(50.0),
        ),
      ),
    );
  }
}
