class UsuarioModel {
  int? id;
  String usuario;
  String email;
  String? foto;
  String? password;
  String? createdAt;

  UsuarioModel({
    this.id,
    required this.usuario,
    required this.email,
    this.foto,
    this.createdAt,
  });

  factory UsuarioModel.fromMapJson(Map<String, dynamic> data) => UsuarioModel(
        id: data['id'],
        usuario: data['usuario'],
        email: data['email'],
        foto: data['foto'],
        createdAt: data['created_at'],
      );

  Map<String, dynamic> toJson() => {
        'usuario': usuario,
        'email': email,
        'foto': foto,
        'password': password,
      };
}
