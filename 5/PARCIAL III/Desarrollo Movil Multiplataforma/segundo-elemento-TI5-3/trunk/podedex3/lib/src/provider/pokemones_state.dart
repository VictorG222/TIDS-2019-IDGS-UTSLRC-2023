import 'package:get/get.dart';
import 'package:podedex3/src/models/pokemon_model.dart';
import 'package:podedex3/src/provider/pokemones_provider.dart';

class PokemonesState extends GetxController {
  List<PokemonModel> pokemones = [];
  int _paginado = 0;
  final _pokemonesProvider = PokemonesProvider();

  Future<void> obtenerPokemones() async {
    final pokes = await _pokemonesProvider.obtenerPokemones(_paginado);
    pokemones.addAll(pokes);
    _paginado += 20;
    update();
  }


}
