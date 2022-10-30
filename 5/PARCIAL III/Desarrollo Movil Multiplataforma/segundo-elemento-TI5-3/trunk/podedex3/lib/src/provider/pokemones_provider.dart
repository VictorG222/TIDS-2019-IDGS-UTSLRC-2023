import 'package:dio/dio.dart';
import 'package:podedex3/src/models/pokemon_model.dart';

class PokemonesProvider {
  final String _url = 'https://pokeapi.co/api/v2/pokemon';
  final http = Dio();
final apikey ='82349jaskdjaskdjaskd';
  Future<List<PokemonModel>> obtenerPokemones(int pagina) async {
    final response = await http.get(_url, queryParameters: {'offset': pagina});
    List<PokemonModel> pokemones = [];
    List<dynamic> responseData = response.data['results'];
    print(responseData[1]['url']);
    for (int i = 0; i < responseData.length; i++) {
      final responsePoke = await http.get(responseData[i]['url']);
      pokemones.add(PokemonModel.fromMapJson(responsePoke.data));
    }
    return pokemones;
  }

  Future<PokemonModel> obtenerPokemonIdOrName(String query) async {
    final response = await http.get('$_url/$query');
    final data = response.data;
    return PokemonModel.fromMapJson(data);
  }
}
