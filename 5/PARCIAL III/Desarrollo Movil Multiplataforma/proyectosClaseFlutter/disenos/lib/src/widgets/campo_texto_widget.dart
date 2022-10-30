import 'package:flutter/material.dart';

class CampoTexto extends StatelessWidget {
  final double? borderRadio;
  final String? hintText;
  final bool? obscureText;
  final double? height;
  final Widget? prefixIcono;
  CampoTexto({
    this.hintText,
    this.borderRadio = 0.0,
    this.obscureText = false,
    this.height = 40,
    this.prefixIcono,
  });
  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.symmetric(vertical: 20.0, horizontal: 10.0),
      height: height,
      child: TextField(
        obscureText: obscureText!,
        decoration: InputDecoration(
          prefixIcon: prefixIcono,
          hintText: hintText,
          border: OutlineInputBorder(
            borderRadius: BorderRadius.circular(borderRadio!),
          ),
        ),
      ),
    );
  }
}
