import 'package:flutter/material.dart';

class CircleAvatarWidget extends StatelessWidget {
  final ImageProvider backgroundImage;
  final double? radius;
  final Color? backgroundColor;
  final double? elevation;
  final Color? elevationColor;
  final Color? borderColor;
  final double? borderWidth;

  CircleAvatarWidget({
    this.backgroundColor = Colors.white,
    this.borderWidth = 0.0,
    this.borderColor = Colors.white,
    this.elevation = 1.0,
    required this.backgroundImage,
    this.radius = 30.0,
    this.elevationColor = Colors.white,
  });
  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        border: Border.all(color: borderColor!, width: borderWidth!),
        shape: BoxShape.circle,
        boxShadow: [
          BoxShadow(blurRadius: elevation!, color: elevationColor!),
        ],
      ),
      child: CircleAvatar(
        radius: radius,
        backgroundColor: backgroundColor,
        backgroundImage: backgroundImage,
      ),
    );
  }
}
