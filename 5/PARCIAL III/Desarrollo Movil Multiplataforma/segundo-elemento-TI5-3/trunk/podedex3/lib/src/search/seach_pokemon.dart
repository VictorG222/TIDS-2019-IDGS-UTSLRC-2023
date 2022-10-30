import 'package:flutter/material.dart';
import 'package:podedex3/src/models/pokemon_model.dart';
import 'package:podedex3/src/provider/pokemones_provider.dart';

class SearchPokemon extends SearchDelegate {
  final _pokemonProvider = PokemonesProvider();
  @override
  List<Widget> buildActions(BuildContext context) {
    // widgets de lado izquierdo
    return [
      IconButton(
          onPressed: () {
            query = '';
          },
          icon: Icon(Icons.close)),
    ];
  }

  @override
  Widget buildLeading(BuildContext context) {
    // widgets de lado derecho
    return IconButton(
        onPressed: () {
          close(context, null);
        },
        icon: Icon(Icons.arrow_back));
  }

  @override
  Widget buildResults(BuildContext context) {
    // TODO: implement buildResults
    return Container();
  }

  @override
  Widget buildSuggestions(BuildContext context) {
    // cada vez que se ejecute el query(osea cada vez que escribas va a entrar aqui)
    return (query != '')
        ? FutureBuilder(
            future: _pokemonProvider.obtenerPokemonIdOrName(query),
            builder: (BuildContext context, AsyncSnapshot<PokemonModel> snap) {
              final pokemon = snap.data;
              if (snap.hasData) {
                return ListView(
                  children: [
                    ListTile(
                      onTap: () => Navigator.pushNamed(context, '/detalle',
                          arguments: pokemon),
                      leading: Hero(
                        tag: pokemon!.id.toString(),
                        child: Image.network(
                          pokemon.sprites!.officialArtwork!,
                          fit: BoxFit.cover,
                        ),
                      ),
                      title: Text(pokemon.name!),
                      subtitle: Text(pokemon.id.toString()),
                    )
                  ],
                );
              } else {
                return Center(
                  child: CircularProgressIndicator(),
                );
              }
            },
          )
        : Container();
  }
}
