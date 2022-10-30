import 'package:flutter/material.dart';

class MenuAbajo extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return BottomNavigationBar(items: [
      BottomNavigationBarItem(
        icon: Icon(Icons.chat_sharp,size: 30.0,),
        label:'Chats' 
      ),
      BottomNavigationBarItem(
        icon: Icon(Icons.group,size: 30.0,),
        label: 'Personas'
      ),
    ]);
  }
}

