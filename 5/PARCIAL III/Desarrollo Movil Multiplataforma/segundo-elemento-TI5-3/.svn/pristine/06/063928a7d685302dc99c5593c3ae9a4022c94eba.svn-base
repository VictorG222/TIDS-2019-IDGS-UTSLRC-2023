import 'package:flutter/material.dart';
import 'package:podedex3/src/const/colores_tipos_const.dart';
class PokemonModel {
  int? id;
  String? name;
  List<Abilities>? abilities;
  int? height;
  int? weight;
  List<Moves>? moves;
  Sprites? sprites;
  List<Stats>? stats;
  List<Type>? type;
  Color  ? colorPokemon;
  
  PokemonModel({
    this.id,
    this.abilities,
    this.name,
    this.height,
    this.moves,
    this.sprites,
    this.stats,
    this.type,
    this.weight,
  }){
    this.colorPokemon = ColoresTypos.tipoColor[type![0].name];
  }

  factory PokemonModel.fromMapJson(Map<String, dynamic> data) => PokemonModel(
        id: data['id'],
        height: data['height'],
        weight: data['weight'],
        sprites: Sprites.fromMapJson(data['sprites']),
        name: data['name'],
        abilities: data['abilities']
            .map((ablility) => Abilities.fromMapJson(ablility))
            .toList()
            .cast<Abilities>(),
        moves: data['moves']
            .map((move) => Moves.fromMapJson(move))
            .toList()
            .cast<Moves>(),
        stats: data['stats']
            .map((stat) => Stats.fromMapJson(stat))
            .toList()
            .cast<Stats>(),
        type: data['types']
            .map((type) => Type.fromMapJson(type))
            .toList()
            .cast<Type>(),
      );
}

class Stats {
  int? baseStat;
  String? name;

  Stats({this.name, this.baseStat});

  factory Stats.fromMapJson(Map<String, dynamic> data) => Stats(
        baseStat: data['base_stat'],
        name: data['stat']['name'],
      );
}

class Moves {
  String? name;
  Moves({this.name});

  factory Moves.fromMapJson(Map<String, dynamic> data) => Moves(
        name: data['move']['name'],
      );
}

class Sprites {
  String? backDefault;
  String? backShiny;
  String? frontDefault;
  String? frontShiny;
  String? officialArtwork;

  Sprites({
    this.backDefault,
    this.backShiny,
    this.frontDefault,
    this.frontShiny,
    this.officialArtwork,
  });

  factory Sprites.fromMapJson(Map<String, dynamic> data) => Sprites(
        backDefault: data['back_default'],
        backShiny: data['back_shiny'],
        frontDefault: data['front_default'],
        frontShiny: data['front_shiny'],
        officialArtwork: data['other']['official-artwork']['front_default'],
      );
}

class Abilities {
  String? name;
  int? slot;

  Abilities({this.name, this.slot});

  factory Abilities.fromMapJson(Map<String, dynamic> data) =>
      Abilities(name: data['ability']['name'], slot: data['slot']);
}

class Type {
  String? name;
  int? slot;

  Type({this.name, this.slot});

  factory Type.fromMapJson(Map<String, dynamic> data) =>
      Type(name: data['type']['name'], slot: data['slot']);
}
