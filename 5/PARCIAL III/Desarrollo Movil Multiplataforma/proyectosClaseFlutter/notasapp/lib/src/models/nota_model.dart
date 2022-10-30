class NotaModel {
  int id;
  String titulo;
  String descripcion;
  String foto;

  NotaModel({this.id, this.titulo, this.descripcion, this.foto});

  factory NotaModel.toMap(Map<String, dynamic> map) => NotaModel(
        id: map['id'],
        titulo: map['titulo'],
        descripcion: map['descripcion'],
        foto: map['foto'],
      );

  Map<String, dynamic> toJson() => {
        'id': id,
        'titulo': titulo,
        'descripcion': descripcion,
        'foto': foto,
      };
}
