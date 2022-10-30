import 'package:disenos/src/widgets/botonIcono_widget.dart';
import 'package:disenos/src/widgets/menu_abajo_widget.dart';
import 'package:flutter/material.dart';

class Proyecto1 extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0.0,
        actions: [
          BotonIcono(
            icono: Icons.location_on,
          ),
          Expanded(child: Container()),
          _DayInfo(),
          Expanded(child: Container()),
          BotonIcono(
            icono: Icons.reorder,
          ),
        ],
      ),
      body: Container(
        decoration: BoxDecoration(
            image: DecorationImage(
                image: NetworkImage(
                    "https://i.ytimg.com/vi/R9mXtzn8meE/maxresdefault.jpg"),
                fit: BoxFit.cover)),
        child: ListView(
          children: [
            _Wheather(),
            Expanded(
              child: Container(),
            ),
            _Date(),
          ],
        ),
      ),
      bottomNavigationBar: MenuAbajo(),
    );
  }
}

class _DayInfo extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(top: 3.0),
      child: Column(
        children: [
          Text(
            'Raining',
            style: TextStyle(
                color: Colors.black,
                fontSize: 30.0,
                fontWeight: FontWeight.bold),
          ),
          Row(
            children: [
              Text(
                '04:24 PM -',
                style: TextStyle(
                    color: Colors.black,
                    fontSize: 10.0,
                    fontWeight: FontWeight.bold),
              ),
              Text(
                ' Bangalore',
                style: TextStyle(
                    color: Colors.black,
                    fontSize: 10.0,
                    fontWeight: FontWeight.bold),
              )
            ],
          )
        ],
      ),
    );
  }
}

class _Wheather extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Center(
      child: Stack(
        children: [
          CircleAvatar(
            radius: 160.0,
            backgroundImage:
                NetworkImage("https://wallpapercave.com/wp/wp5034773.jpg"),
          ),
          Container(
            padding: EdgeInsets.all(30),
            decoration:
                BoxDecoration(color: Colors.white, shape: BoxShape.circle),
            child: Positioned(
              child: Text(
                '2°',
                style: TextStyle(
                    color: Colors.purple,
                    fontSize: 50.0,
                    fontWeight: FontWeight.bold),
              ),
            ),
          ),
        ],
      ),
    );
  }
}

class _Date extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(top: 30),
      child: Center(
          child: Row(
        children: [
          Container(
            padding: EdgeInsets.all(30),
            child: Center(
              child: Icon(
                Icons.chevron_left,
                size: 60.0,
                color: Colors.purple,
              ),
            ),
          ),
          Expanded(
            child: Container(),
          ),
          Column(
            children: [
              Text(
                'Today',
                style: TextStyle(
                    color: Colors.purple,
                    fontSize: 20.0,
                    fontWeight: FontWeight.normal),
              ),
              Text(
                'Monday',
                style: TextStyle(
                    color: Colors.purple,
                    fontSize: 30.0,
                    fontWeight: FontWeight.normal),
              ),
              Text(
                '25',
                style: TextStyle(
                    color: Colors.purple,
                    fontSize: 90.0,
                    fontWeight: FontWeight.bold),
              ),
              Text(
                'May - 2021',
                style: TextStyle(
                    color: Colors.purple,
                    fontSize: 30.0,
                    fontWeight: FontWeight.normal),
              ),
            ],
          ),
          Expanded(
            child: Container(),
          ),
          Container(
            padding: EdgeInsets.all(30),
            child: Center(
              child: Icon(
                Icons.chevron_right,
                size: 60.0,
                color: Colors.purple,
              ),
            ),
          ),
        ],
      )),
    );
  }
}
